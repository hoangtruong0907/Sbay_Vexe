<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('contents'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
<div class="blog-list">
    <?php echo $__env->make('admin.profile._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="text container-table " style="margin-top:30px;">
        <h4>Blog List</h4>
    </div>

    <div class="button-blog ssss">
        <form action="<?php echo e(route('admin.blogs.create')); ?>">
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
                <th>Status</th> 
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $allPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($post->id); ?></td>
        <td><?php echo e(Str::limit($post->title, 20, '...')); ?></td>
        <td><?php echo e(Str::limit($post->content, 50, '...')); ?></td>
        <td><?php echo e($post->created_at->format('Y-m-d H:i:s')); ?></td>
        <td><?php echo e($post->updated_at->format('Y-m-d H:i:s')); ?></td>
        <td><?php echo e($post->author); ?></td>
        <td><?php echo e($post->type); ?></td>
        <td><?php echo e(ucfirst($post->status)); ?></td>
        <td>
            <a href="<?php echo e(route('admin.blogs.edit', $post->id)); ?>" class="btn-action">Edit</a>
            
            <form action="<?php echo e(route('admin.blogs.destroy', $post->id)); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this blog?');">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn-action delete">Delete</button>
            </form>

            <a href="<?php echo e(route('blog.content', ['slug' => $post->slug])); ?>" class="btn-action">Link</a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="pagination">
        <?php echo e($allPosts->links()); ?>

    </div>
</div>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/sbayht copy 4/sbay_vexere/resources/views/admin/blogs/index.blade.php ENDPATH**/ ?>