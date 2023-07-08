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
            .text-right {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <h2>Data Order Produk</h2>
        <?php
            $totalHargaProduk = 0;
        ?>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pengirim</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Produk</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $subtotal = 0;
            ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($item->user->namalengkap); ?></td>
                    <td><?php echo e($item->user->nomorhp); ?></td>
                    <td><?php echo e($item->user->address); ?></td>
                    <td><?php echo e($item->user->city); ?></td>
                    <td> 
                        <?php $__currentLoopData = $item->orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $subtotal += $orderDetail->product->price * $orderDetail->quantity;
                            ?>
                            <p>
                                - <?php echo e($orderDetail->product->title); ?>

                            </p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </td>
                    <td><?php echo e($item->total); ?></td>
                    <td><?php echo e($item->payment); ?></td>
                    <td><?php echo e($item->status); ?></td>
                </tr>
                <?php
                    $totalHargaProduk += $subtotal;
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="text-right">
            <h3>Total Harga Produk: Rp <?php echo e(number_format($totalHargaProduk, 0, ',', '.')); ?></h3>
        </div>
    </body>
</html>
<?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/admin/historyorder/pdf.blade.php ENDPATH**/ ?>