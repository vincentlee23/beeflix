

<link rel="stylesheet" href="<?php echo e(asset('css/moviedetails.css')); ?>">

<?php $__env->startSection('title', 'Beeflix - Movie Details'); ?>
<?php $__env->startSection('back-btn'); ?>
    <a href="/home">&#x2190;KEMBALI</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="photo">
            <img src="<?php echo e($movie->photo); ?>" alt="">
        </div>
        
        <div class="desc">
            <?php echo e($movie->title); ?> <br>
            <?php echo e($movie->rating); ?> / 10 <br>
            <?php echo e($movie->description); ?> <br><br>
            Kategori: 
            <?php if($movie->genre_id==1): ?>
                <a href="/viewcategory/1">Drama</a>
            <?php elseif($movie->genre_id==2): ?>
                <a href="/viewcategory/2">Kids</a>
            <?php else: ?>
                <a href="/viewcategory/3">TV Show</a>
            <?php endif; ?>
        </div>

        <div class="episodes">
            <h4>LIST OF EPISODES</h4>
            <table>
                <tr>
                    <th style="width:10%">Episode</th>
                    <th>Title</th>
                </tr>
                <?php $__currentLoopData = $episodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($eps->episode); ?></td>
                    <td><?php echo e($eps->title); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <?php echo e($episodes->links()); ?>

        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProjects\QuizBeforeUTC\resources\views/moviedetails.blade.php ENDPATH**/ ?>