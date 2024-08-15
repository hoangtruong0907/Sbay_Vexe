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
        'blog' => 'Thông tin',
        'news' => 'Tin tức',
        'incentives' => 'Ưu đãi',
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
        dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
            'author' => 'required|string|max:255',
            'type' => 'required|in:blog,news,incentives,vexeretip,relatedContent',
            'status' => 'required|in:published,draft,archived',
            'new_type' => 'nullable|string|max:255'
        ]);
        $type = $request->input('type');
        if ($type !== 'new') {
            return redirect()->back()->withErrors(['type' => 'Bạn chỉ có thể tạo bài viết bằng cách chọn "Tạo loại mới..."']);
        }
    
        // Kiểm tra và lưu loại bài viết mới
        $newType = trim($request->input('new_type'));
        if (!empty($newType)) {
            $existingType = PostType::where('name', $newType)->first();
            if (!$existingType) {
                $postType = new PostType();
                $postType->name = $newType;
                $postType->save();
                $type = $postType->name;
            } else {
                $type = $existingType->name;
            }
        } else {
            return redirect()->back()->withErrors(['new_type' => 'Loại bài viết mới không được để trống.']);
        }
        
        $blog = new BlogPostModel();

        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('public/blog_pictures');
            $blog->picture = $picturePath;
        }

        $blog->title = trim($request->title);
        $blog->content = trim($request->content);
        $blog->author = trim($request->author);
        $blog->status = $request->status;
        $blog->type = $type;
        
        $blog->slug = \Illuminate\Support\Str::slug($blog->title, '-');

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog successfully created.');
    }
}
