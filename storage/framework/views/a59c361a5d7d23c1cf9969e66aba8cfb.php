<?php if (isset($component)) { $__componentOriginaleace9cbc035c4368375a3a737ed40872 = $component; } ?>
<?php $component = App\View\Components\WebLayout::resolve(['title' => 'Login'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('web-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\WebLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<div class="bread-crumb">
		<img src="<?php echo e(asset('assets/images/banner_top.jpg')); ?>" class="img-responsive" alt="banner-top" title="banner-top">
		<div class="container">
			<div class="matter">
				<h2>sign in</h2>
				<ul class="list-inline">
					<li><a href="<?php echo e((url('/'))); ?>">HOME</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="col-sm-5 padd0">
						<div class="leftside"></div>
						<div class="loginto">
							<div class="commontop text-center">
								<h4>Login</h4>
								<hr>
							</div>
							<hr>
							<hr>
							<hr>
							<hr>
							<hr>
							<hr>
							<p>Belum Memiliki Akun? Silahkan Membuat Akun Anda Dengan <a href=<li><a href="<?php echo e(url('/authreg')); ?>">Register Sekarang</a>
							<hr>
							<hr>
							<hr>
							<hr>
							<hr>
							<hr>
						</div>
					</div>	
					<div class="col-sm-7 padd0">
						<div class="loginnow" style="display: flex; justify-content: center;">
							<form method="POST" action="<?php echo e(url('auth/login')); ?>" enctype="multipart/form-data" style="width: 100%;">
								<?php echo csrf_field(); ?>
								<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="alert alert-danger">
									Silahkan Isi Email Anda Terlebih Dahulu.
								</div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								<div class="form-group">
									<i class="icofont icofont-ui-message"></i>
									<input type="text" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" id="input-email" class="form-control" autocomplete="off" />
								</div>
								<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="alert alert-danger">
									Silahkan Isi Password Anda Terlebih Dahulu.
								</div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								<div class="form-group">
									<i class="icofont icofont-lock"></i>
									<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" autocomplete="off" />
								</div>
								<div style="text-align: center;">
									<button type="submit" value="Login" class="btn btn-primary" style="font-size: 15px; padding: 5px 10px; width: 80px; height: 40px; margin-top: 10px;">LOGIN</button>
								</div>
							</form>
						</div>
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
<?php endif; ?><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/auth/login.blade.php ENDPATH**/ ?>