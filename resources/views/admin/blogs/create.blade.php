@extends('admin.layouts.default')

@section('title', ' Dashboard')
@section('contents')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
</head>

<body>
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
                        <label for="author" class="form-label">Người tạo</label>
                        <input type="text" name="author" id="author" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Trạng thái</label>
                        <select name="status" id="status" class="form-control" required>
                            <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Xuất bản</option>
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

                    <div class="modal-footer">
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary" style="margin-right:20px;">Hủy</a>
                        <button type="submit" id="submit-btn" class="btn btn-primary">Thêm Bài Viết</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                newPostTypeInput.removeAttribute('required'); // Ẩn trường nhập liệu mới nếu không chọn "Tạo loại mới..."
            }
        });

        
    </script>

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
</body>
</html>
@endsection
