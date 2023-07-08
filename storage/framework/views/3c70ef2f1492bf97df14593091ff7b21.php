<?php if (isset($component)) { $__componentOriginaleace9cbc035c4368375a3a737ed40872 = $component; } ?>
<?php $component = App\View\Components\WebLayout::resolve(['title' => 'checkout'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
    <div class="mycart">
        <div class="container">
            <div class="row">
                <form method="post" id="form" enctype="multipart/form-data" action="<?php echo e(route('web.checkout.updateCustomer')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="tab-pane col-md-12 col-sm-12 col-xs-12" id="tab-info">
                        <div class="col-md-5 col-sm-5 col-xs-12 padd0">
                            <h6>Contact Information</h6>
                            <fieldset>
                                <!-- Form input fields for shopping address -->
                                <div class="form-group">
                                    <input name="namalengkap" value="<?php echo e(Auth::user()->namalengkap); ?>" placeholder="Nama Lengkap" id="input-namalengkap" class="form-control" type="text" readonly>
                                </div>
                                <div class="form-group">
                                    <input name="email" value="<?php echo e(Auth::user()->email); ?>" placeholder="Email" id="input-email" class="form-control" type="text" readonly>
                                </div>
                                <div class="form-group">
                                    <input name="nomorhp" value="<?php echo e(Auth::user()->nomorhp); ?>" placeholder="Nomor HP" id="input-nomorhp" class="form-control" type="text" readonly>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-2 col-sm-2 co-xs-12"></div>
                        <div class="col-md-5 col-sm-5 col-xs-12 padd0">
                            <h6>Shopping Address</h6>
                                <fieldset>	
                                    <div class="form-group">
                                        <select name="city" id="input-city" class="form-control">
                                            <option value="" disabled selected>Select City</option>
                                            <option value="Balige">Balige</option>
                                            <option value="Sitoluama">Sitoluama</option>
                                            <option value="Sigumpar">Sigumpar</option>
                                            <option value="Silaen">Silaen</option>
                                            <option value="Laguboti">Laguboti</option>
                                            <option value="Porsea">Porsea</option>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group">
                                        <input name="address" value="<?php echo e(Auth::user()->address); ?>" placeholder="Input Alamat Lengkap" id="input-address" class="form-control" type="text">
                                    </div>
                                </fieldset>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 padd0">
                            <div class="buttons pull-right">
                            <button  type="submit" class="btn btn-primary">Payment Method</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->startSection('script'); ?>
    <script>
        $('#form').on('submit', function(event){
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "<?php echo e(route('web.checkout.updateCustomer')); ?>",
                type: "POST",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.alert == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href =
                                "<?php echo e(route('web.checkout.payment')); ?>";
                            }
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message,
                        })
                    }
                }
            });
        });
    </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleace9cbc035c4368375a3a737ed40872)): ?>
<?php $component = $__componentOriginaleace9cbc035c4368375a3a737ed40872; ?>
<?php unset($__componentOriginaleace9cbc035c4368375a3a737ed40872); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/web/checkout/customer.blade.php ENDPATH**/ ?>