

<?php $__env->startSection('title', 'Lobby'); ?>

<?php $__env->startSection('content'); ?>
    
    <?php for($i = 0; $i <= 6; $i++): ?>
    <img src=<?php echo e(asset('pokemon'.$i.'.jpg')); ?> class="card-img-top" alt="...">
    <?php endfor; ?>
    <?php $__currentLoopData = $pokData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pokemon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e($pokemon->image_url); ?>" alt="">
        <div class="desc">
            <h1><?php echo e($pokemon->name); ?></h1>
            <h2><?php echo e($pokemon->type); ?></h2>
            <h2><?php echo e($pokemon->stats); ?></h2>
        </div>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\GSLCWebLec\resources\views/lobby.blade.php ENDPATH**/ ?>