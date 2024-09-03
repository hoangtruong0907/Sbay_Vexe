@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('contents')
<div class="container p-5">
    <h1>Chỉnh sửa bài viết</h1>
    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" id="title" value="{{ $blog->title }}" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="picture">Ảnh</label>
            <input type="file" name="picture" id="picture" class="form-control">
            @if ($blog->picture)
                <img src="{{ Storage::url($blog->picture) }}" alt="Current Picture" style="width: 100px;">
            @endif
        </div>

        <div class="form-group mb-3">
            <label for="content">Nội dung</label>
            <textarea id="content" name="content" class="form-control">{{ $blog->content }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="type">Chủ đề</label>
            <select name="type" id="type" class="form-control">
                <option value="blog"{{ $blog->type == 'Thông báo' ? ' selected' : '' }}>Thông báo</option>
                <option value="news"{{ $blog->type == 'Tin tức' ? ' selected' : '' }}>Tin tức</option>
                <option value="incentives"{{ $blog->type == 'Ưu đãi nổi bật<' ? ' selected' : '' }}>Ưu đãi nổi bật</option>
                <option value="vexeretip"{{ $blog->type == 'vexeretip' ? ' selected' : '' }}>Vexere Tip</option>
                <option value="relatedContent"{{ $blog->type == 'Nội dung liên quan' ? ' selected' : '' }}>Nội dung liên quan</option>
                <option value="new"{{ $blog->type == 'Loại bài viết mới' ? ' selected' : '' }}>Tạo loại mới...</option>
            </select>
        </div>

        <div id="new-post-type-container" class="mb-3" style="display: none;">
            <label for="new_type" class="form-label">Loại bài viết mới</label>
            <input type="text" name="new_type" id="new_type" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="status">Trạng thái bài đăng</label>
            <select name="status" id="status" class="form-control">
                <option value="published"{{ $blog->status == 'published' ? ' selected' : '' }}>Công khai</option>
                <option value="draft"{{ $blog->status == 'draft' ? ' selected' : '' }}>Đang cập nhật</option>
                <option value="archived"{{ $blog->status == 'archived' ? ' selected' : '' }}>Ẩn</option>
            </select>
        </div>

        <!-- Group buttons in a flex container to align them to the right -->
        <div class="d-flex justify-content-end mt-3 gap-2">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Thoát</a>
        </div>
    </form>
</div>

@endsection
@section('scripts')
    <script>
        document.getElementById('type').addEventListener('change', function() {
            var newPostTypeContainer = document.getElementById('new-post-type-container');
            var newPostTypeInput = document.getElementById('new_type');

            if (this.value === 'new') {
                newPostTypeContainer.style.display = 'block';
                newPostTypeInput.setAttribute('required', 'required'); // Hiển thị trường nhập liệu mới là bắt buộc
            } else {
                newPostTypeContainer.style.display = 'none';
                newPostTypeInput.removeAttribute(
                    'required'); // Ẩn trường nhập liệu mới nếu không chọn "Tạo loại mới..."
            }
        });
    </script>
    <!-- Include CKEditor 5 from CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
