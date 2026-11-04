

<?php $__env->startSection('title', 'Page Not Found'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Page not found</h1>
    <p>The book page you are looking for does not exist.</p>
    <a href="<?php echo e(route('books.index')); ?>">Back to the book list</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\itrackb4-la5-Quijano-Robin-main\resources\views/errors/404.blade.php ENDPATH**/ ?>