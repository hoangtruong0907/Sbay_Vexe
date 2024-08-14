@extends('admin.layouts.default')

@section('title', 'Dashboard')
@section('contents')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<div class="blog-list">
    @include('admin.profile._message')
    <div class="text container-table " style="margin-top:30px;">
        <h4>Blog List</h4>
    </div>

    <div class="button-blog ssss">
        <form action="{{ route('admin.blogs.create') }}">
            <button type="submit" class="btnsss">Add Blog</button>
        </form>
    </div>
</div>

<!-- All Posts Section -->
<div class="container-table ffff">
    <table class="table table-list-navicat">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Author</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allPosts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ Str::limit($post->title, 20, '...') }}</td>
                <td>{{ Str::limit($post->content, 50, '...') }}</td>
                <td>{{ $post->created_at->format('Y-m-d H:i:s') }}</td>
                <td>{{ $post->updated_at->format('Y-m-d H:i:s') }}</td>
                <td>{{ $post->author }}</td>
                <td>{{ $post->type }}</td>
                <td>
                    <a href="{{ route('admin.blogs.edit', $post->id) }}" class="btnsss">Edit</a>
                    <form action="{{ route('admin.blogs.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btnsss buttondelete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="pagination">
        {{ $allPosts->links() }}
    </div>
</div>
</body>
</html>



@endsection
