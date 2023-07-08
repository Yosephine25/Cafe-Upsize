<!DOCTYPE html>
<html>
<head>
    <style>
        /* Define your CSS styles for the PDF here */
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Booking</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>No Meja</th>
                <th>Tanggal Pemesanan</th>
                <th>Deskripsi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->user->namalengkap); ?></td>
                <td><?php echo e($item->meja->meja); ?></td>
                <td><?php echo e($item->book_date); ?></td>
                <td><?php echo e($item->description); ?></td>
                <td><?php echo e($item->status); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/staff/historymeja/pdf.blade.php ENDPATH**/ ?>