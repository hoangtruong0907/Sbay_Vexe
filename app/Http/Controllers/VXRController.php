<?php

namespace App\Http\Controllers;
use App\Models\BlogPostModel; 
use Illuminate\Http\Request;

class VXRController extends Controller
{

public function showVxr($id)
{
    $blog = BlogPostModel::findOrFail($id);
    return view('vxr', compact('blog'));
}
}
