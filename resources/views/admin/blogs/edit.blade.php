@extends('admin.layouts.default')

@section('title', 'Edit Blog Post')

@section('contents')
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
            <textarea id="editor" name="content" class="form-control">{{ $blog->content }}</textarea>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="{{ $blog->author }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection