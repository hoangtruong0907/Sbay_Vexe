<?php

namespace App\Http\Controllers\home;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;
use App\Models\BlogPostModel;
use App\Models\PostType;

use Illuminate\Http\Request;

class BlogControllers extends Controller
{
    public function index()
    {
       
        $postTypes = BlogPostModel::distinct()->pluck('type');

    // Lấy tất cả các bài viết đã xuất bản và phân trang
    $allPosts = BlogPostModel::where('status', 'published')->orderBy('created_at', 'desc')->where('type', '!=', 'relatedContent')->paginate(10);

    $typeMapping = [
        'blog' => 'Thông tin mới',
        'news' => 'Tin tức',
        'incentives' => 'Ưu đãi nổi bật',
        'vexeretip' => 'Vexere Tip',
        'relatedContent' => 'Nội dung liên quan',
       
    ];
        
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 10; // Số lượng mục mỗi trang
        $currentItems = $allPosts->forPage($currentPage, $perPage);
        $paginator = new LengthAwarePaginator($currentItems, $allPosts->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);
        
        return view('index', [
            'allPosts' => $paginator,
            'typeMapping' => $typeMapping,
            'postTypes' => $postTypes,
        ]);
    }
    
    public function show($slug)
    {
        $blog = BlogPostModel::where('slug', $slug)->firstOrFail();
        $relatedContent = BlogPostModel::where('type', 'relatedContent')->where('id', '!=', $blog->id)->paginate(10); ; // Hoặc bất kỳ điều kiện nào khác để lấy nội dung liên quan
        $showButtonOnly = $blog->type === 'incentives';
        
        return view('blog.content', compact('blog', 'relatedContent','showButtonOnly'));
    }
    public function edit($id)
    {
        $blog = BlogPostModel::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
            'author' => 'required|string|max:255',
            'type' => 'required|in:blog,news,incentives,vexeretip,relatedContent',
            'status' => 'required|in:published,draft,archived',
            
        ]);

        $blog = BlogPostModel::findOrFail($id);

        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('public/blog_pictures');
            $blog->picture = $picturePath;
        }

        $blog->title = trim($request->title);
        $blog->content = trim($request->content);
        $blog->author = trim($request->author);
        $blog->status = trim($request->status);
        $blog->type = $request->type; 
        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog successfully updated.');
    }

    public function destroy($id)
    {
        $blog = BlogPostModel::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog successfully deleted.');
    }
    
    public function store(Request $request)
{
    // Validate dữ liệu
    $request->validate([
        'title' => 'required|string|max:255',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'content' => 'required',
        'author' => 'required|string|max:255',
        'type' => 'required|string|in:blog,news,incentives,vexeretip,relatedContent,new',
        'status' => 'required|in:published,draft,archived',
        'new_type' => 'nullable|string|max:255'
    ]);

    $type = $request->input('type');

    // Nếu người dùng chọn "Tạo loại mới...", xử lý loại mới
    if ($type === 'new') {
        $newType = trim($request->input('new_type'));

        if (!empty($newType)) {
            $existingType = PostType::where('name', $newType)->first();
            if (!$existingType) {
                $postType = new PostType();
                $postType->name = $newType;
                $postType->save();
                $type = $postType->name; // Cập nhật lại `type` thành loại mới vừa tạo
            } else {
                $type = $existingType->name;
            }
        } else {
            return redirect()->back()->withErrors(['new_type' => 'Loại bài viết mới không được để trống.']);
        }
    }

    // Lưu bài viết mới
    $blog = new BlogPostModel();
    $blog->title = trim($request->title);
    $blog->content = trim($request->content);
    $blog->author = trim($request->author);
    $blog->status = $request->status;
    $blog->type = $type; // Sử dụng loại bài viết đã xác định

    if ($request->hasFile('picture')) {
        $picturePath = $request->file('picture')->store('public/blog_pictures');
        $blog->picture = $picturePath;
    }
    $blog->slug = \Illuminate\Support\Str::slug($blog->title, '-');
    $blog->save();
    // Chuyển hướng về trang index với thông báo thành công
    return redirect()->route('admin.blogs.index')->with('success', 'Blog successfully created.');
}

}
