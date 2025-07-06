

<?php $__env->startSection('title', 'Daftar Reservasi'); ?>
    
<?php $__env->startSection('content'); ?>

<div class="container" style="margin-top: 100px;">
    <h2>Apakah anda ingin menghapus data <?php echo e($customer->name); ?> dengan reservasi tgl <?php echo e($customer->reservation_date); ?></h2>
    
    <form action="/customer-destroy/<?php echo e($customer->id); ?>" method="post" style="display: inline-block">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="/customers" class="btn btn-primary">Cancel</a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waterfrontkitchen\resources\views/customer-delete.blade.php ENDPATH**/ ?>