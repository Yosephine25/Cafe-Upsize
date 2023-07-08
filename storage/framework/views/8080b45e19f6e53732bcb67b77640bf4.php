<?php if (isset($component)) { $__componentOriginaleace9cbc035c4368375a3a737ed40872 = $component; } ?>
<?php $component = App\View\Components\WebLayout::resolve(['title' => 'cart'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    <div id="list_result">
        <?php if(Auth::check()): ?>
            <!-- Tampilkan konten keranjang jika pengguna telah login -->
            <!-- Tempatkan kode yang berhubungan dengan konten keranjang di sini -->
            <?php else: ?>
            <!-- Tampilkan pesan bahwa pengguna belum login -->
            <div class="container">
                <div class="text-center">
                    <h3>Anda belum login</h3>
                    <p>Silakan login untuk melihat keranjang Anda.</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php $__env->startSection('script'); ?>
        <script>
            load_list(1);
            $(document).ready(function() {
                load_cart();
            });

            function update_quantity(url) {
                $.ajax({
                    url: url,
                    type: 'PATCH',
                    success: function(data) {
                        $('.total-product-price').html(data.subtotal);
                        $('.data-product').attr('data-quantity', data.quantity);
                        load_cart(localStorage.getItem("route_cart"));
                        load_list(1);
                    }
                });
            }

            function input_quantity(url) {
                let data = "quantity=" + $('#qty').val();
                $.ajax({
                    url: url,
                    type: 'PATCH',
                    data: data,
                    success: function(data) {
                        $('.total-product-price').html(data.subtotal);
                        $('#qty').val(data.quantity);
                        load_cart(localStorage.getItem("route_cart"));
                        load_list(1);
                    }
                });
            }

            function load_cart() {
                $('.data-product').each(function() {
                    var price = $(this).data('price');
                    var quantity = $(this).data('quantity');
                    var total = price * quantity;
                    $(this).find('.total-product-price').html('Rp ' + total.toFixed(2));
                    $(this).find('.total-product-price').data('subtotal', total);
                });
                var total_price = 0;
                $('.total-product-price').each(function() {
                    total_price += $(this).data('subtotal');
                });
                $('#cart-total').html('Rp ' + total_price.toFixed(2));
            }

            function tombol_hapus(url) {
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    success: function(data) {
                        load_cart(localStorage.getItem("route_cart"));
                        load_list(1);
                    }
                });
            }
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleace9cbc035c4368375a3a737ed40872)): ?>
<?php $component = $__componentOriginaleace9cbc035c4368375a3a737ed40872; ?>
<?php unset($__componentOriginaleace9cbc035c4368375a3a737ed40872); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/web/cart/main.blade.php ENDPATH**/ ?>