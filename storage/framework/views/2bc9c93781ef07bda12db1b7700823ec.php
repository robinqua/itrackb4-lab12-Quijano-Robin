

<?php $__env->startSection('title', 'Server Error'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Something went wrong</h1>
    <p>Sorry, the server could not complete your request. Please try again later.</p>
    <a href="<?php echo e(route('books.index')); ?>">Back to the book list</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\itrackb4-la5-Quijano-Robin-main\resources\views/errors/500.blade.php ENDPATH**/ ?>