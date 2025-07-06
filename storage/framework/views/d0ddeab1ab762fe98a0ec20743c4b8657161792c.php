

<?php $__env->startSection('title', 'Daftar Reservasi'); ?>
    
<?php $__env->startSection('content'); ?>

<div class="col-5 m-auto">
    <div class="col-5 m-auto" style="padding-top: 100px;">
        <form action="/customer/<?php echo e($customer->id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" required value="<?php echo e($customer->name); ?>">
            </div>
            <div class="mb-3">
                <label for="reservation_date">Tanggal Reservasi</label>
                <input type="date" id="reservation_date" name="reservation_date" class="form-control" required value="<?php echo e($customer->reservation_date); ?>">
            </div>
            <div class="mb-3">
                <label for="reservations">Ruangan dan Meja</label>
                <select name="reservation_id" id="reservations" class="form-control" required>
                    <option value="<?php echo e($customer->reservations->id); ?>"><?php echo e($customer->reservations->ruangan); ?>, <?php echo e($customer->reservations->meja); ?></option>
                    <?php $__currentLoopData = $reservation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->ruangan); ?>, <?php echo e($item->meja); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waterfrontkitchen\resources\views/customer-edit.blade.php ENDPATH**/ ?>