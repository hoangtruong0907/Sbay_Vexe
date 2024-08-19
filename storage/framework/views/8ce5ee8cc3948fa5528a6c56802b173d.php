<?php if(!empty(session('success'))): ?>
<div class="alert alert-success" role="alert">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<?php if(!empty(session('error'))): ?>
<div class="alert alert-danger" role="alert">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?><?php /**PATH /Applications/sbayht copy 2/sbay_vexere/resources/views/admin/profile/_message.blade.php ENDPATH**/ ?>