

<?php $__env->startSection('title', 'Buat Reservasi'); ?>
    
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col-5 m-auto" style="padding-top: 100px;">
        <form action="customer" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="mb-3">
                <label for="reservation_date">Tanggal Reservasi</label>
                <input type="date" id="reservation_date" name="reservation_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="reservations">Ruangan dan Meja</label>
                <select name="reservation_id" id="reservations" class="form-control" required>
                    <option value="">Pilih Tempat</option>
                    <?php $__currentLoopData = $reservation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->ruangan); ?>, <?php echo e($item->meja); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            

            
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Pesan</button>
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waterfrontkitchen\resources\views/customer-add.blade.php ENDPATH**/ ?>