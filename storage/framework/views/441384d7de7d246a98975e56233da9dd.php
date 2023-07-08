<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve(['title' => 'Produk'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
	<div id="content_list">
        <div class="app-content main-content mt-4">
            <div class="side-app">
                <div class="main-container container-fluid">
                    <div class="row row-sm">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <div class="row g-4">
                                        <div class="col-sm-auto d-flex justify-content-between">
                                            <h3 class="card-title">Data Makanan & Minuman</h3>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="me-3">
                                                <form id="content_filter">
                                                    <input type="text" name="keyword" onkeyup="load_list(1);"
                                                        class="form-control" placeholder="Cari Produk...">     
                                                </form>                     
                                            </div>
                                            <a class="btn btn-info add-btn" href="<?php echo e(route('admin.food.create')); ?>">
                                            
                                                <i class="ri-add-line align-bottom me-1"></i>Tambah Data</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ms-auto pageheader-btn"></div>
                                    <div id="list_result"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content_input"></div>
    <div id="content_detail"></div>
    <?php $__env->startSection('custom_js'); ?>
        <script>
            load_list(1);
        </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/admin/food/main.blade.php ENDPATH**/ ?>