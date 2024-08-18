<?php

namespace App\Http\Controllers\admin;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;
use App\Models\BlogPostModel;
use App\Models\PostType;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
{
    $postTypes = BlogPostModel::distinct()->pluck('type');

    // Lấy từ khóa tìm kiếm nếu có
    $search = $request->input('search');

    // Tạo một truy vấn cơ bản
    $query = BlogPostModel::orderBy('created_at', 'desc');

    // Nếu có từ khóa tìm kiếm, thêm điều kiện lọc
    if (!empty($search)) {
        $query->where('title', 'like', "%{$search}%");
    }

    // Lấy tất cả các bài viết theo điều kiện tìm kiếm và phân trang
    $allPosts = $query->paginate(10);

    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $perPage = 10; // Số lượng mục mỗi trang
    $currentItems = $allPosts->forPage($currentPage, $perPage);

    $paginator = new LengthAwarePaginator(
        $currentItems,
        $allPosts->total(),
        $perPage,
        $currentPage,
        ['path' => LengthAwarePaginator::resolveCurrentPath()]
    );

    return view('admin.blogs.index', [
        'allPosts' => $paginator,
        'postTypes' => $postTypes,
    ]);
}


    public function show($slug)
    {
        $blog = BlogPostModel::where('slug', $slug)->firstOrFail();
        $relatedContent = BlogPostModel::where('type', 'relatedContent')->paginate(10); // Hoặc bất kỳ điều kiện nào khác để lấy nội dung liên quan
        $showButtonOnly = $blog->type === 'blog';
        // $showButtonIncentives = $blog->type === 'incentives';
        return view('admin.blogs.index', compact('blog', 'relatedContent', 'showButtonOnly'));
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

    $blog = BlogPostModel::findOrFail($id);
    
    $blog->title = trim($request->title);
    $blog->content = trim($request->content);
    $blog->author = trim($request->author);
    $blog->status = $request->status;
    $blog->type = $request->input('type');

    // Cập nhật slug nếu tiêu đề thay đổi
    $newSlug = \Illuminate\Support\Str::slug($request->title, '-');
    if ($newSlug !== $blog->slug) {
        $originalSlug = $newSlug;
        $counter = 1;

        // Kiểm tra và xử lý slug trùng lặp
        while (BlogPostModel::where('slug', $newSlug)->exists()) {
            $newSlug = $originalSlug . '-' . $counter++;
        }

        $blog->slug = $newSlug;
    }

    if ($request->hasFile('picture')) {
        $picturePath = $request->file('picture')->store('public/blog_pictures');
        $blog->picture = $picturePath;
    }

    $blog->save();

    // Chuyển hướng về trang index với thông báo thành công
    return redirect()->route('admin.blogs.index')->with('success', 'Blog successfully updated.');
}

    public function destroy($id)
    {
        $blog = BlogPostModel::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog successfully deleted.');
    }
    public function showContent($title)
    {
        // Tìm blog theo title
        $blog = BlogPostModel::where('title', $title)->firstOrFail();

        // Lấy nội dung liên quan và lọc các bài viết có ID không trùng với blog hiện tại
        $relatedContent = BlogPostModel::where('type', 'relatedContent')->get();
        $filteredContent = $relatedContent->filter(function ($item) use ($blog) {
            return $item->id !== $blog->id;
        });

        return view('blog.content', [
            'blog' => $blog,
            'relatedContent' => $filteredContent
        ]);
    }
    public function store(Request $request)
{
    // Validate dữ liệu
    $request->validate([
        'title' => 'required|string|max:255',
        'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'content' => 'required',
        'author' => 'required|string|max:255',
        'type' => 'required|string',
        'status' => 'required|in:published,draft,archived',
        'new_type' => 'nullable|string|max:255',
    ]);

    $type = $request->input('type');
    if ($type === 'new') {
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
    }

    // Lưu bài viết mới
    $blog = new BlogPostModel();
    $blog->title = trim($request->title);
    $blog->content = trim($request->content);
    $blog->author = trim($request->author);
    $blog->status = $request->status;
    $blog->type = $type;

    if ($request->hasFile('picture')) {
        $picturePath = $request->file('picture')->store('public/blog_pictures');
        $blog->picture = $picturePath;
    }

    $blog->slug = \Illuminate\Support\Str::slug($blog->title, '-');
    $blog->save();

    // Chuyển hướng về trang index với thông báo thành công
    return redirect()->route('admin.blogs.index')->with('success', 'Blog đã được tạo thành công.');
}
}
