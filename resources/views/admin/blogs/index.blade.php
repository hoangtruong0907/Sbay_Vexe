@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('contents')
    <div class="container">
        <div class="blog-list">
            @include('admin.profile._message')
            <div class="page-title" style="margin-top:30px;">
            <h3>Danh sách bài viết
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm btn-outline-primary float-end"><i class="bi bi-plus"></i>
                        Thêm bài viết</a>
                </h3>
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
                            <th class="text-center">Ngày</th>
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
                                <td class="content-cell">{!! Str::limit($post->content, 30, '...') !!}
                                </td>
                                <td>
                                    <ul>
                                        <li>
                                            Ngày tạo: {{ $post->created_at->format('Y-m-d H:i:s') }}
                                        </li>
                                        <li>
                                            Ngày sửa: {{ $post->updated_at->format('Y-m-d H:i:s') }}
                                        </li>

                                    </ul>

                                </td>
                                <td>{{ $post->author }}</td>
                                <td>
                                    @switch($post->type)
                                    @case('news')
                                        Tin tức
                                        @break

                                    @case('incentives')
                                        Ưu đãi nổi bật
                                        @break

                                    @case('blog')
                                        Thông báo
                                        @break

                                    @case('vexeretip')
                                        Vexere Tip
                                        @break

                                    @case('relatedContent')
                                        Nội dung liên quan
                                        @break

                                    @case('new')
                                        Loại bài viết mới
                                        @break

                                    @default
                                        {{ $post->type }}
                                @endswitch
                                </td>
                                <td>
                                    @switch($post->status)
                                    @case('published')
                                        Công khai
                                        @break

                                    @case('draft')
                                        Đang cập nhật
                                        @break

                                    @case('archived')
                                        Ẩn
                                        @break

                                    @default
                                       {{ $post->status }}
                                @endswitch
                                </td>
                                <td>
                                    <a href="{{ route('admin.blogs.edit', $post->id) }}" class="btn btn-outline-info btn-rounded">
                                        <i class="fas fa-pen"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.blogs.destroy', $post->id) }}" method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Bạn có chắc chắn muốn xóa blog này không?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-rounded">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>

                                    <a href="{{ route('blog.content', ['slug' => $post->slug]) }}" class="btn btn-outline-info text-success border-success btn-rounded">
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
