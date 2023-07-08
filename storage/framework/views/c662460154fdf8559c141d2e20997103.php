<?php if (isset($component)) { $__componentOriginaleace9cbc035c4368375a3a737ed40872 = $component; } ?>
<?php $component = App\View\Components\WebLayout::resolve(['title' => 'Menu Detail'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                    <form class="form-horizontal search-icon" method="post"></form>
                </div>
            </div>
        </div>
    </div>
    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="row shopdetail">
                        <div class="col-sm-5 mx-auto col-xs-12">
                            <div class="image">
                                <img src="<?php echo e(asset('images/produk/'.$product->cover)); ?>" alt="image" title="image" class="img-responsive mx-auto d-block" style="width:100%; height:40vh" />
                            </div>
                        </div>
                        <div class="col-sm-7 col-xs-12">
                            <h2 style="font-size: 26px;"><?php echo e($product->title); ?></h2>
                            <h3 style="font-size: 20px;">Stok: <?php echo e($product->stock); ?></h3>
                            <div class="price" style="font-size: 24px;">Rp. <?php echo e($product->price); ?></div>
                            <p style="font-size: 18px;"><?php echo e($product->description); ?></p>
                            <div class="common">
                                <?php if(!Auth::check()): ?> <!-- Menambahkan kondisi jika belum login -->
                                    <div class="alert alert-warning" role="alert">
                                        Silakan login terlebih dahulu untuk menambahkan ke keranjang.
                                    </div>
                                <?php else: ?>                            
                                    <form method="POST" action="<?php echo e(route('web.cart.add', $product->id)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="container">
                                            <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                                                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                                            </div>
                                            <p class="qty pull-left">
                                                <span>Rata-Rata Rating Produk Ini : <?php echo e($rating ?? '0'); ?></span>
                                            </p>
                                        </div>	
                                        <p class="qtypara pull-left">
                                            <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control qty"  style="width: 50px;" />
                                        </p>
                                        <div class="buttons">
                                            <button type="button" class="btn-primary" onclick="location.href='<?php echo e(url('/daftarmenu')); ?>';">Back</button>
                                            <button type="submit" class="btn-primary">Add To Cart</button>
                                        </div>
                                    </form>
                                <?php endif; ?>
                            </div>
                            <script>
                                document.getElementById('input-quantity').addEventListener('change', function() {
                                    var quantity = parseInt(this.value);
                                    if (isNaN(quantity) || quantity < 1) {
                                        this.value = 1;
                                    }
                                });
                            </script>
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
<?php endif; ?><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/web/daftarmenu/menudetail.blade.php ENDPATH**/ ?>