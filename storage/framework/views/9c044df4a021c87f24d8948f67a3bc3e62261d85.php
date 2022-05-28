<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('css/navbar.css')); ?>">
    <link rel="icon" href="<?php echo e(asset('assets/bee2.png')); ?>">
</head>
<body>
    <header>
        <h1>BeeFlix</h1>
        <img src="<?php echo e(asset('assets/bee2.png')); ?>" alt="" id="beelogo">
    </header>
    <nav>
        <div class="nav1">
            <?php echo $__env->yieldContent('back-btn'); ?>
        </div>
        <div class="nav2">
            <a href="/home">LIHAT SEMUA FILM</a>
        </div>
    </nav>
    <br><br>
    
    <?php echo $__env->yieldContent('content'); ?>

    <footer>
        2022 &copy; All Rights Reserved Beeflix Inc.
    </footer>

</body>
</html><?php /**PATH C:\xampp\htdocs\LaravelProjects\QuizBeforeUTC\resources\views/layouts/master.blade.php ENDPATH**/ ?>