@extends('admin.layouts.default')

@section('title', 'Dashboard')
@section('contents')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <div class="informationBlog">
        <div class="inforContent">
            <div class="blog-list" style="margin-bottom: 20px">
                @include('admin.profile._message')
                <div class="text container-table " style="margin-top:30px;">
                    <h4 class="heading">Danh sách bài viết</h4>
                    <div class="button-blog ssss">
                        <a href="{{ route('admin.blogs.create') }}" class="btnsss">Add Blog</a>
                    </div>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <table width="100%" class="table table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th>Người tạo</th>
                                <th>Loại bài viết</th>
                                <th>Trạng thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allPosts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ Str::limit($post->title, 15, '...') }}</td>
                                    <td class="content-cell">{{ Str::limit($post->content, 30, '...') }}</td>
                                    <td>{{ $post->created_at->format('Y-m-d H:i:s') }}</td>
                                    <td>{{ $post->updated_at->format('Y-m-d H:i:s') }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>{{ $post->type }}</td>
                                    <td>{{ ucfirst($post->status) }}</td>
                                    <td>
                                        <a href="{{ route('admin.blogs.edit', $post->id) }}" class="btn-action">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <!-- Delete Button -->
                                        <form action="{{ route('admin.blogs.destroy', $post->id) }}" method="POST"
                                            style="display:inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this blog?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-action delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>

                                        <a href="{{ route('blog.content', ['slug' => $post->slug]) }}" class="btn-action">
                                            <i class="fas fa-link"></i>
                                        </a>
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
            </div>
        </div>



    @endsection
