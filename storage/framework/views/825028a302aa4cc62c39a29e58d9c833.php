<html>
    <head>
        <title>Struk Pembayaran</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    </head>
    <body>
        <style type="text/css">
            table tr td,
            table tr th {
            font-size: 9vh;
            }
        </style>
        <?php if($order->payment != 'Cash'): ?>
            <center>
                <h2>Transaksi Non Tunai</h2>
                <h4>Cafe UpSize</h4>
                <p> 
                    Jl. Porsea, Jl. Balige, Sigumpar Dangsina, <br />
                    Kec. Sigumpar, Toba, Sumatera Utara 22381
                </p>
            </center>
            <div class="p-5 mx-5">
                <div class="" style="text-align: left; line-height: 0.5;">
                    <p>Nama : <?php echo e($order->user->namalengkap); ?></p>
                    <p>Hari/Tanggal : <?php echo e($order->created_at->translatedFormat('l, d-m-Y')); ?></p>
                    <p>ID : <?php echo e($order->code); ?></p>
                </div><br>
                <table class=" col-12">
                    <tbody>
                        <?php $__currentLoopData = $order->orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-end" style="width: 50%"><?php echo e($item->product->title); ?>

                                </td>
                                <td class="" style="width: 20%"><?php echo e($item->quantity); ?></td>
                                <td class="">Rp.
                                    <?php echo e(number_format($item->product->price * $item->quantity, 2, '.', ',')); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <hr />
                <table class="col-12">
                    <tbody>
                        <tr>
                            <td style="width:50%;">SubTotal</td>
                            <td style="width: 20%"></td>
                            <td>Rp. <?php echo e(number_format($order->total, 2, '.', ',')); ?></td>
                        </tr>
                        <tr>
                            <td style="width:50%;">Total</td>
                            <td style="width: 20%"></td>
                            <td>Rp. <?php echo e(number_format($order->total, 2, '.', ',')); ?></td>
                        </tr>
                    </tbody>
                </table>
                <hr />
                <table class="col-12">
                    <tbody>
                        <tr>
                            <td style="width:50%;" class="text-nowrap">Metode Pembayaran</td>
                            <td>:</td>
                            <td><?php echo e($item->order->payment); ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 35px" class="text-nowrap">Status</td>
                            <td>:</td>
                            <td>Lunas</td>
                        </tr>
                    </tbody>
                </table>
                <hr />
            </div>
            <?php else: ?>
            <center>
                <h2>Transaksi Tunai</h2>
                <h4>Cafe UpSize</h4>
                <p> 
                    Jl. Porsea, Jl. Balige, Sigumpar Dangsina, <br />
                    Kec. Sigumpar, Toba, Sumatera Utara 22381
                </p>
            </center>
            <div class="p-5 mx-5">
                <div class="" style="text-align: left; line-height: 0.5;">
                    <p><?php echo e($order->user->namalengkap); ?></p>
                    <p><?php echo e($order->created_at->translatedFormat('l, d-m-Y')); ?></p>
                    <p>ID : <?php echo e($order->code); ?></p>
                </div><br>
                <table class=" col-12">
                    <tbody>
                        <?php $__currentLoopData = $order->orderDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-end" style="width: 50%"><?php echo e($item->product->title); ?>

                                </td>
                                <td class="" style="width: 20%"><?php echo e($item->quantity); ?></td>
                                <td class="">Rp.
                                    <?php echo e(number_format(($item->product->price + $item->product->price / 100) * $item->quantity, 2, '.', ',')); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <hr />
                <table class="col-12">
                    <tbody>
                        <tr>
                            <td style="width:50%;">SubTotal</td>
                            <td style="width: 20%"></td>
                            <td>Rp. <?php echo e(number_format($order->total, 2, '.', ',')); ?></td>
                        </tr>

                        <tr>
                            <td style="width: 50%">Diskon</td>
                            <td style="width: 20%"></td>
                            <td class="">- Rp.0</td>
                        </tr>
                        <tr>
                            <td style="width:50%;">Total</td>
                            <td style="width: 20%"></td>
                            <td>Rp. <?php echo e(number_format($order->total, 2, '.', ',')); ?></td>
                        </tr>
                    </tbody>
                </table>
                <hr />
                <table class="col-12">
                    <tbody>
                        <tr>
                            <td style="width:50%;" class="text-nowrap">Metode Pembayaran</td>
                            <td>:</td>
                            <td><?php echo e($item->order->payment); ?></td>
                        </tr>
                        <tr>
                            <td style="padding-right: 35px" class="text-nowrap">Status</td>
                            <td>:</td>
                            <td>Lunas</td>
                        </tr>
                    </tbody>
                </table>
                <hr />
            </div>
        <?php endif; ?>
        <footer class="mt-4">
            <center>
                <h5>TerimaKasih</h5>
                <h6>~ Semoga Anda Senang Dengan Pelayanan Kami ~</h6>
            </center>
        </footer>
    </body>
</html><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/web/checkout/pdf.blade.php ENDPATH**/ ?>