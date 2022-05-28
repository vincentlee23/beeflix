

<link rel="stylesheet" href="<?php echo e(asset('css/viewcategory.css')); ?>">

<?php $__env->startSection('title', 'Beeflix - View Category'); ?>
<?php $__env->startSection('back-btn'); ?>
    <a href="/home">&#x2190;KEMBALI</a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php if($id == 1): ?>
        <h2>DRAMA</h2>
    <?php elseif($id == 2): ?>
        <h2>KIDS</h2>
    <?php else: ?>
        <h2>TV SHOW</h2>
    <?php endif; ?>

    <div class="container">
        <?php $__currentLoopData = $genre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="movie-slot">
                <img src="<?php echo e($g->photo); ?>" alt="drama img" class="cover-photo">
                <?php echo e($g->title); ?>

                <a href="/moviedetails/<?php echo e($g->id); ?>">LIHAT FILM</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\QuizBeforeUTC\resources\views/viewcategory.blade.php ENDPATH**/ ?>