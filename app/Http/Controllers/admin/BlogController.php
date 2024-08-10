<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPostModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() 
{
    $blogs = BlogPostModel::all(); 
    
    return view('admin.blogs.index', compact('blogs')); 
}
    public function show($id)
    {
        $blog = BlogPostModel::findOrFail($id);
        return view('admin.blogs.show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = BlogPostModel::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }
    public function create()
    {
        // Trả về view để tạo mới bài viết
        return view('admin.blogs.create');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
            'author' => 'required|string|max:255',
        ]);

        $blog = BlogPostModel::findOrFail($id);

        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('public/blog_pictures');
            $blog->picture = $picturePath;
        }

        $blog->title = trim($request->title);
        $blog->content = trim($request->content);
        $blog->author = trim($request->author);
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
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'title' => 'required|string|max:255 ',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
            'author' => 'required|string|max:255',
        ]);

        $blog = new BlogPostModel();

        // Xử lý file ảnh nếu có
        if ($request->hasFile('picture')) {
            $picturePath = $request->file('picture')->store('public/blog_pictures');
            $blog->picture = $picturePath;
        }

        $blog->title = trim($request->title);
        $blog->content = trim($request->content);
        $blog->author = trim($request->author);
        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog successfully created.');
    }
}
