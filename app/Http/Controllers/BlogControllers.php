<?php

namespace App\Http\Controllers;

use App\Models\BlogPostModel; 
use Illuminate\Http\Request;

class BlogControllers extends Controller
{
    public function index()
    {
        $blogs = BlogPostModel::all();
        return view('index', compact('blogs')); 
    }

    public function show($id)
    {
        $blog = BlogPostModel::findOrFail($id); 
        return view('show', compact('blog')); 
    }
    

    // Các phương thức khác nếu cần
}
