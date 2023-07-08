<?php if (isset($component)) { $__componentOriginaleace9cbc035c4368375a3a737ed40872 = $component; } ?>
<?php $component = App\View\Components\WebLayout::resolve(['title' => 'Home'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('web-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\WebLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <div class="slide">
        <div class="banner">
            <img src="<?php echo e(asset('assets/images/shop/back.jpg')); ?>" class="img-responsive bg" alt="banner-top" title="banner-top">
        </div>
        <div class="slide-detail col-lg-6 col-md-9 col-sm-8">
            <div class="col-sm-12">
                <h4>UpSize Coffee</h4>
                <p>Selamat datang di Coffee Shop kami, tempat yang menyajikan secangkir kebahagiaan dalam setiap tegukan.</p>
                <button type="button" class="btn-primary" onclick="location.href='<?php echo e(url('daftarmenu')); ?>';">Book Now</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 commontop text-center">
                <h4>Pengumuman Terbaru</h4>
                <?php $__currentLoopData = $pengumumans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo"===================================================="?>
                    <h3><?php echo e($item->judul); ?></h3>
                    <?php if($item->image): ?>
                        <img src="/images/<?php echo e($item->image); ?>" alt="Gambar Pengumuman" width="500px">
                    <?php endif; ?>
                    <p><?php echo e($item->konten); ?></p>
                    <br><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <br><br><br><br><br><br>
                <br><br><br><br><br><br>
            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleace9cbc035c4368375a3a737ed40872)): ?>
<?php $component = $__componentOriginaleace9cbc035c4368375a3a737ed40872; ?>
<?php unset($__componentOriginaleace9cbc035c4368375a3a737ed40872); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/web/pengumuman/pengumuman.blade.php ENDPATH**/ ?>