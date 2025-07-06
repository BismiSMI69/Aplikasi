

<?php $__env->startSection('title', 'Menu'); ?>
    
<?php $__env->startSection('content'); ?>
    

<div class="container" style="margin-top: 100px">
    <div class="row d-flex justify-content-center">
        <?php $__currentLoopData = $menuList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 15rem; margin: 0 0 20px 20px;">
            <img class="card-img-top" src="img/<?php echo e($item->gambar); ?>" alt="Card image cap" style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($item->name); ?></h5>
                <p class="card-text"><?php echo e($item->country); ?></p>
                <a href="#" class="btn btn-primary">Rp. <?php echo e($item->price); ?></a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waterfrontkitchen\resources\views/menu.blade.php ENDPATH**/ ?>