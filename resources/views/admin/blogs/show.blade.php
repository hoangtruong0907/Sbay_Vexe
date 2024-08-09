<!-- resources/views/blogs/index.blade.php -->
@extends('admin.layouts.default')
@section('title', ' Dashboard')
@section('contents')
<!DOCTYPE html>
<html>

<head>
    <title>Danh Sách Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .actions a {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <h1>Danh Sách Blog</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu Đề</th>
                <th>Nội Dung</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ Str::limit($blog->content, 50) }}</td>
                <td class="actions">
                    <a href="{{ route('blogs.show', $blog->id) }}"><i class="fas fa-eye"></i> Xem</a>
                    <a href="{{ route('blogs.edit', $blog->id) }}"><i class="fas fa-edit"></i> Sửa</a>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="border:none; background:none; color:red; cursor:pointer;"><i class="fas fa-trash"></i> Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('blogs.create') }}">Tạo Blog Mới</a>
</body>

</html>
@endsection