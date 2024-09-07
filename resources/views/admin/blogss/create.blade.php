@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@extends('admin.layouts.app')

@section('title', ' Dashboard')
@section('contents')
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
            </div>
            <!-- Add post -->
            <div class="container">
                <h1>Tạo Bài Viết Mới</h1>
                <form id="blog-form" action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Tiêu đề</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="picture" class="form-label">Hình ảnh</label>
                        <input type="file" name="picture" id="picture" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="form-label">Nội dung</label>
                        <textarea id="content" name="content" class="form-control"></textarea>
                    </div>


                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Xuất bản
                            </option>
                            <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Nháp</option>
                            <option value="archived" {{ old('status') === 'archived' ? 'selected' : '' }}>Lưu trữ</option>
                        </select>
                    </div>
                    <div class="mb-3x">
                        <label for="type" class="form-label">Loại bài viết</label>
                        <select name="type" id="type" class="form-control" required>
                            <option value="blog">Thông báo</option>
                            <option value="news">Tin tức</option>
                            <option value="incentives">Ưu đãi nổi bật</option>
                            <option value="vexeretip">Vexere tip</option>
                            <option value="relatedContent">Nội dung liên quan</option>
                            <option value="new">Tạo loại mới...</option>
                        </select>
                    </div>
                    <div id="new-post-type-container" class="mb-3" style="display: none;">
                        <label for="new_type" class="form-label">Loại bài viết mới</label>
                        <input type="text" name="new_type" id="new_type" class="form-control">
                    </div>

                    <div class="modal-footer mt-3">
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary"
                            style="margin-right:20px;">Hủy</a>
                        <button type="submit" id="submit-btn" class="btn btn-primary">Thêm Bài Viết</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        document.getElementById('blog-form').addEventListener('submit', function(event) {
            // event.preventDefault();
            console.log('Form is being submitted');
        });
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
