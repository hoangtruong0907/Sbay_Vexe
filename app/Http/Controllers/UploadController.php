<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048',
        ]);

        $file = $request->file('file');
        $path = $file->store('public/uploads-image');

        return response()->json([
            'url' => Storage::url($path)
        ]);
    }
}
