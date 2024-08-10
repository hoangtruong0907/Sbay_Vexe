<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('image');
        $path = $file->store('public/images'); // Store the image in the public/images directory
        $url = url('storage/images/' . basename($path));

        return response()->json(['url' => $url]);

    }
}
