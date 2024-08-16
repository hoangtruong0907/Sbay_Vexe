<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('contents'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />
</head>

<body>
<div class="container">
    <h1>Chỉnh sửa bài viết</h1>
    <form action="<?php echo e(route('admin.blogs.update', $blog->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" id="title" value="<?php echo e($blog->title); ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="picture">Ảnh</label>
            <input type="file" name="picture" id="picture" class="form-control">
            <?php if($blog->picture): ?>
                <img src="<?php echo e(Storage::url($blog->picture)); ?>" alt="Current Picture" style="width: 100px;">
            <?php endif; ?>
        </div>

        <div class="form-group">
            <label for="content">Nội dung</label>
            <textarea id="content" name="content" class="form-control"><?php echo e($blog->content); ?></textarea>
        </div>

        <div class="form-group">
            <label for="author">Người tạo</label>
            <input type="text" name="author" id="author" value="<?php echo e($blog->author); ?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="type">Chủ đề</label>
            <select name="type" id="type" class="form-control">
                <option value="qq"<?php echo e($blog->type == 'Thông báo' ? ' selected' : ''); ?>>Thông báo</option>
                <option value="news"<?php echo e($blog->type == 'Tin tức' ? ' selected' : ''); ?>>Tin tức</option>
                <option value="incentives"<?php echo e($blog->type == 'Ưu đãi nổi bật<' ? ' selected' : ''); ?>>Ưu đãi nổi bật</option>
                <option value="vexeretip"<?php echo e($blog->type == 'vexeretip' ? ' selected' : ''); ?>>Vexere Tip</option>
                <option value="relatedContent"<?php echo e($blog->type == 'Nội dung liên quan' ? ' selected' : ''); ?>>Nội dung liên quan</option>
                <option value="new"<?php echo e($blog->type == 'Loại bài viết mới' ? ' selected' : ''); ?>>Tạo loại mới...</option>
            </select>
        </div>
        <div id="new-post-type-container" class="mb-3" style="display: none;">
                        <label for="new_type" class="form-label">Loại bài viết mới</label>
                        <input type="text" name="new_type" id="new_type" class="form-control">
                    </div>
        <div class="form-group">
    <label for="status">Trạng thái bài đăng</label>
    <select name="status" id="status" class="form-control">
        <option value="published"<?php echo e($blog->status == 'published' ? ' selected' : ''); ?>>Công khai</option>
        <option value="draft"<?php echo e($blog->status == 'draft' ? ' selected' : ''); ?>>Đang cập nhật</option>
        <option value="archived"<?php echo e($blog->status == 'archived' ? ' selected' : ''); ?>>Ẩn</option>
    </select>
</div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="<?php echo e(route('admin.blogs.index')); ?>" class="btn btn-secondary">Thoát</a>
    </form>
</div>
<script>
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
<?php $__env->stopSection(); ?>
</body>

</html>

<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/sbayy/sbay_vexere/resources/views/admin/blogs/edit.blade.php ENDPATH**/ ?>