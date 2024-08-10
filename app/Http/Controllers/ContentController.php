<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPostModel; // Thay đổi tùy thuộc vào model của bạn

class ContentController extends Controller
{
    public function show($id)
    {
        $content = BlogPostModel::findOrFail($id);
        return view('content.show', compact('content'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required', // Validates the content field
        ]);

        $content = new BlogPostModel();
        $content->body = $request->input('content'); // Lưu HTML vào cơ sở dữ liệu
        $content->save();

        return redirect()->back()->with('success', 'Content saved successfully!');
    }
}
