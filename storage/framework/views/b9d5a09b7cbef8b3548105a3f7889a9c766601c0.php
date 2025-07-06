

<?php $__env->startSection('title', 'Buat Reservasi'); ?>
    
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="col-5 m-auto" style="padding-top: 100px;">
        <h4>Tambah Menu dengan nama Pelanggan <?php echo e($customer->name); ?></h4>
        <form action="/customer-foodup/<?php echo e($customer->id); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="mb-3">
                <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="input-group mb-3">
                    <div class="input-group-text">
                    <input class="form-check-input mt-0" type="radio" value="<?php echo e($data->id); ?>" name="menu_id" id="menu" >
                    </div>
                    <label for="" style="padding-left: 13px;" class="form-control"><?php echo e($data->name); ?></label>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Pesan</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waterfrontkitchen\resources\views/customer-food.blade.php ENDPATH**/ ?>