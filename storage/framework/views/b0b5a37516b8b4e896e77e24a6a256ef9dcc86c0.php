

<?php $__env->startSection('title', 'Daftar Reservasi'); ?>
    
<?php $__env->startSection('content'); ?>
    
<div class="container" style="padding-top: 100px;">
        <h1>Reservasi atas nama <?php echo e($customer->name); ?></h1>
        <table class="table table-bordered">
                <thead>
                        <th>Tanggal Reservasi</th>
                        <th>Ruangan</th>
                        <th>Meja</th>
                        <th>Menu yang dipesan</th>
                </thead>
                <tbody>
                        <tr>
                                <td><?php echo e($customer->reservation_date); ?></td>
                                <td><?php echo e($customer->reservations->ruangan); ?></td>
                                <td><?php echo e($customer->reservations->meja); ?></td>
                                <td>
                                        <?php $__currentLoopData = $customer->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            - <?php echo e($item->name); ?><br>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                
                        </tr>
                </tbody>
        </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\waterfrontkitchen\resources\views/customer-detail.blade.php ENDPATH**/ ?>