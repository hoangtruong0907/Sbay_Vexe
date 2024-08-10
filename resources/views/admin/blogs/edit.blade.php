@extends('admin.layouts.default')

@section('title', ' Dashboard')
@section('contents')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
</head>

<body>
<div class="container">
    <h1>Edit Blog Post</h1>
    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $blog->title }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="picture">Picture</label>
            <input type="file" name="picture" id="picture" class="form-control">
            <img src="{{ Storage::url($blog->picture) }}" alt="Current Picture" style="width: 100px;">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control">{{ $blog->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="{{ $blog->author }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<script type="importmap">
            {
                "imports": {
                    "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
                    "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
                }
            }
        </script>

        <script type="module">
    import {
        ClassicEditor,
        Essentials,
        Bold,
        Italic,
        Font,
        Paragraph,
        Table,
        TableToolbar,
        Image,
        ImageUpload,
        ImageToolbar,
        ImageCaption,
        ImageStyle
    } from 'ckeditor5';

    ClassicEditor
        .create(document.querySelector('#content'), {
            plugins: [
                Essentials,
                Bold,
                Italic,
                Font,
                Paragraph,
                Table,
                TableToolbar,
                Image,
                ImageUpload,
                ImageToolbar,
                ImageCaption,
                ImageStyle
            ],
            toolbar: {
                items: [
                    'undo', 'redo', '|', 'bold', 'italic', '|',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|',
                    'insertTable', 'tableColumn', 'tableRow', 'mergeTableCells', '|',
                    'imageUpload'
                ]
            },
            image: {
                toolbar: [
                    'imageTextAlternative', 'imageStyle:full', 'imageStyle:side'
                ],
                upload: {
                    url: '/upload-image', 
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                }
            }
        })
        .then(editor => {
            console.log('Editor was initialized', editor);
        })
        .catch(error => {
            console.error('There was a problem initializing the editor.', error);
        });
</script>
@endsection
</body>

</html>