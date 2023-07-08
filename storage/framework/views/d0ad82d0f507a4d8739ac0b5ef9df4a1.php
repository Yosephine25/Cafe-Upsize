<?php if (isset($component)) { $__componentOriginaleace9cbc035c4368375a3a737ed40872 = $component; } ?>
<?php $component = App\View\Components\WebLayout::resolve(['title' => 'Menu'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('web-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\WebLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
	<div class="banner">
		<img src="<?php echo e(asset('assets/images/shop/back.jpg')); ?>" class="img-responsive bg" alt="banner-top" title="banner-top">
		<div class="container">
			<div class="matter">
				<div class="crumb">
					<h2>List Menu</h2>
					<ul class="list-inline">
						<li><a href="<?php echo e((url('/'))); ?>">HOME</a></li>
						<li><a href="<?php echo e(url('/daftarmenu')); ?>">List Menu</a></li>
					</ul>
				</div>
				<div class="col-sm-6 order col-sm-offset-3">
					<form action="/daftarmenu/search" class="form-horizontal search-icon" method="GET">
						<fieldset>
							<div class="form-group">
								<input name="search" value="" placeholder="Search keyword" class="form-control" type="search">
							</div>
							<button type="submit" class="btn"><i class="icofont icofont-search"></i>Search</button>
						</fieldset>
					</form>
					<br>
					<form action="<?php echo e(url('/daftarmenu/filter')); ?>" class="form-horizontal filter-icon" method="GET">
						<div class="form-group">
							<select name="filter" class="form-control">
								<option value="">Semua</option>
								<option value="makanan">Makanan</option>
								<option value="minuman">Minuman</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Filter</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="shop">
		<div class="container">
			<div class="row ">
				<div class="col-sm-12 m-5 col-12 mainpage">
					<div class="row" style="margin-left: 10%; margin-right:10%">
						<?php if(isset($message)): ?>
							<div class="alert alert-info">
								<?php echo e($message); ?>

							</div>
						<?php endif; ?>
						<?php if(isset($filter)): ?>
							<div class="alert alert-info">
								Menampilkan menu <?php echo e(ucfirst($filter)); ?>

							</div>
						<?php endif; ?>
						<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-12 mx-auto col-xs-12">
							<div class="product-thumb">
								<div class="image">
									<a href="<?php echo e(url('/daftarmenu/menudetail', $item->id)); ?>">
										<img src="<?php echo e(asset('images/produk/'.$item->cover)); ?>" alt="image" title="image" class="img-responsive mx-auto d-block" style="width:100%; height:40vh" />
									</a>									  
								</div>
								<div class="caption">
									<h4 style="font-size: 26px;"><?php echo e($item -> title); ?></h4>
									<h5 style="font-size: 20px;">Stok :<?php echo e($item-> stock); ?></h5>
									<div class="price" style="font-size: 24px;"><?php echo e($item -> price); ?></div>
									<p><?php echo e($item-> description); ?></p>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
					</div>
					<div class="text-center">
						<?php echo e($product->links('theme.web.custom')); ?>

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
<?php endif; ?><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/web/daftarmenu/menu.blade.php ENDPATH**/ ?>