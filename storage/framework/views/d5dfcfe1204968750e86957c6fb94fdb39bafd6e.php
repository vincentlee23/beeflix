

<link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">


<?php $__env->startSection('title', 'Beeflix - Bee Ready for Fun and Excitement!'); ?>
<?php $__env->startSection('back-btn'); ?>
    <a href="/">&#x2190;KEMBALI</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h2>DRAMA</h2>

    <div class="container">
        <?php $__currentLoopData = $drama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="movie-slot">
                <img src="<?php echo e($d->photo); ?>" alt="drama img" class="cover-photo">
                <?php echo e($d->title); ?>

                <a href="/moviedetails/<?php echo e($d->id); ?>">LIHAT FILM</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <br><br>

    <h2>KIDS</h2>

    <div class="container">
        <?php $__currentLoopData = $kids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="movie-slot">
                <img src="<?php echo e($k->photo); ?>" alt="kids img" class="cover-photo">
                <?php echo e($k->title); ?>

                <a href="/moviedetails/<?php echo e($k->id); ?>">LIHAT FILM</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <br><br>

    <h2>TV SHOW</h2>

    <div class="container">
        <?php $__currentLoopData = $tvshow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="movie-slot">
                <img src="<?php echo e($t->photo); ?>" alt="tvshow img" class="cover-photo">
                <?php echo e($t->title); ?>

                <a href="/moviedetails/<?php echo e($t->id); ?>">LIHAT FILM</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <br><br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\QuizBeforeUTC\resources\views/home.blade.php ENDPATH**/ ?>