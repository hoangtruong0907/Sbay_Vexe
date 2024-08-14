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
        // Lấy các bài viết theo loại
        $blogs = BlogPostModel::where('type', 'blog')->get();
        $news = BlogPostModel::where('type', 'news')->get();
        $incentives = BlogPostModel::where('type', 'incentives')->get();
        $vexeretip = BlogPostModel::where('type', 'vexeretip')->get();
        $relatedContent = BlogPostModel::where('type', 'relatedContent')->get();

        // Gộp các kết quả lại
        $allPosts = $blogs->merge($news)->merge($incentives)->merge($vexeretip)->merge($relatedContent);

        // Tạo phân trang tùy chỉnh cho tất cả các bài viết
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 10; // Số lượng mục mỗi trang
        $currentItems = $allPosts->forPage($currentPage, $perPage);
        $paginator = new LengthAwarePaginator($currentItems, $allPosts->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);
        // $postTypes = PostType::all();
        return view('index', [
            'allPosts' => $paginator,
        'blogs' => $blogs->slice(0, 10),
        'news' => $news->slice(0, 10),
        'incentives' => $incentives->slice(0, 10),
        'vexeretip' => $vexeretip->slice(0, 10),
        'relatedContent' => $relatedContent->slice(0, 10),

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
            'type' => 'required|in:blog,news,incentives,vexeretip,relatedContent'
        ]);

        $blog = BlogPostModel::findOrFail($id);

        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('public/blog_pictures');
            $blog->picture = $picturePath;
        }

        $blog->title = trim($request->title);
        $blog->content = trim($request->content);
        $blog->author = trim($request->author);
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
        $request->validate([
            'title' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
            'author' => 'required|string|max:255',
            'type' => 'required|in:blog,news,incentives,vexeretip,relatedContent',
            'new_post_type' => 'nullable|string|max:255',
        ]);
        $type = $request->input('type');
        if ($type === 'new' && $request->filled('new_post_type')) {
            $type = trim($request->input('new_post_type'));
            
            // Kiểm tra xem loại bài viết mới đã tồn tại chưa
            if (!PostType::where('name', $type)->exists()) {
                // Tạo loại bài viết mới
                PostType::create(['name' => $type]);
            }
        }
        $blog = new BlogPostModel();

        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('public/blog_pictures');
            $blog->picture = $picturePath;
        }

        $blog->title = trim($request->title);
        $blog->content = trim($request->content);
        $blog->author = trim($request->author);
        $blog->type = $type;

        // Tạo giá trị slug từ tiêu đề
        $blog->slug = \Illuminate\Support\Str::slug($blog->title, '-');

        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog successfully created.');
    }
}
