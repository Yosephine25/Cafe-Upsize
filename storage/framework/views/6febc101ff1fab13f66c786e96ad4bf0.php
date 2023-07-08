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
    <h2>Data Kritik & Saran</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengirim</th>
                <th>Isi Kritik & Saran</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $kritik; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item->user->namalengkap); ?></td>
                <td><?php echo e($item->kritiksaran); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/staff/historykritik/pdf.blade.php ENDPATH**/ ?>