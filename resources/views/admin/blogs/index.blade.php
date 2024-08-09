@extends('admin.layouts.default')

@section('title', 'Dashboard')
@section('contents')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog List Layout</title>
    <style>
        .blog-list {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .text {
            flex: 1;
        }

        .button-blog button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            background-color: #6610f2;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            /* Smooth transition for color change */
        }

        .button-blog button:hover {
            background-color: #6610f2;
            color: white;
        }

        .container-table {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .table-list-navicat {
            max-width: 80%;
        }
    </style>
</head>

<body>
    <div class="blog-list">
        @include('admin.profile._message')
        <div class="text">
            <h4>Blog list</h4>
        </div>

        <div class="button-blog">
            <form action="{{ route('admin.blogs.create') }}">
                <button type="submit" class="btn">Add blog</button>
            </form>
        </div>
    </div>

    <div class="container-table">
        <table class="table table-list-navicat">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{!! $blog->content !!}</td>
                    <td>{{ $blog->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $blog->updated_at->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $blog->author }}</td>
                    <td>
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
@endsection