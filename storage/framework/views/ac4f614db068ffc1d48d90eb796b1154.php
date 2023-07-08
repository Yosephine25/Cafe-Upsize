<?php if (isset($component)) { $__componentOriginaleace9cbc035c4368375a3a737ed40872 = $component; } ?>
<?php $component = App\View\Components\WebLayout::resolve(['title' => 'checkoutdetail'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('web-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\WebLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="bread-crumb">
		<img src="<?php echo e(asset('assets/images/banner_top.jpg')); ?>" class="img-responsive" alt="banner-top" title="banner-top">
		<div class="container">
			<div class="matter">
				<h2>Shopping Cart</h2>
				<ul class="list-inline">
					<li><a href="<?php echo e((url('/'))); ?>">HOME</a></li>
					<li><a href="<?php echo e(url('/daftarmenu')); ?>">Shopping Cart</a></li>
				</ul>
			</div>
		</div>
	</div>
    <div class="thanks">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <img src="<?php echo e(asset('assets/images/right_icon.png')); ?>" class="img-responsive" alt="icon" title="icon" />
                    <h2>Selamat, pesanan Anda dengan nomor pesanan <?php echo e($order->code); ?> diterima.</h2>
                    <p>Terima kasih telah melakukan pemesanan dengan kami. Pembayaran Anda telah berhasil diproses. Silahkan cetak struk pembayaran Anda!</p>
                    <div class="ms-auto pageheader-btn">
                        <a href="<?php echo e(route('web.checkout.export.pdf', $order->id)); ?>" class="btn btn-primary">Cetak Struk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleace9cbc035c4368375a3a737ed40872)): ?>
<?php $component = $__componentOriginaleace9cbc035c4368375a3a737ed40872; ?>
<?php unset($__componentOriginaleace9cbc035c4368375a3a737ed40872); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/web/checkout/detail.blade.php ENDPATH**/ ?>