<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve(['title' => 'Tambah Produk'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="app-content main-content mt-4">
        <div class="side-app">
            <div class="main-container container-fluid">  
                <div class="row row-sm">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Menu</h4>
                        </div>
                    </div>
                    <form id="form_input" method="post">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Produk</label>
                                    <input type="text" name="title" class="form-control" placeholder="Masukkan Nama Product" value="<?php echo e($data->title); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Pilih Kategori</label>
                                    <select name="category" class="form-select">
                                        <option disabled selected>Pilih Kategori</option>
                                        <option value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                    </select>
                                    <br>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Harga</label>
                                    <input type="number" name="price" class="form-control" placeholder="Masukkan Harga" value="<?php echo e($data->price); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Stok</label>
                                    <input type="number" name="stock" class="form-control" placeholder="Masukkan Stok" value="<?php echo e($data->stock); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Gambar</label>
                                    <input type="file" name="cover" class="form-control" placeholder="Masukkan Gambar" value="<?php echo e($data->cover); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Deskripsi</label>
                                    <textarea name="description" class="form-control" placeholder="Masukkan Deskripsi"><?php echo e($data->description); ?></textarea>
                                </div>
                            </div>
                            <div class="card-footer"> 
                                <div class="hstack gap-2 justify-content-end">
                                    <a class="btn btn-light" href="<?php echo e(url('admin/food')); ?>">Kembali</a>
                                    <?php if($data->id): ?>
                                    <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','<?php echo e(route('admin.food.update',$data->id)); ?>','PATCH');" class="btn btn-primary" id="add-btn">Edit Produk</button>
                                    <?php else: ?>   
                                    <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','<?php echo e(route('admin.food.store')); ?>','POST');" class="btn btn-primary" id="add-btn">Tambah Produk</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/admin/food/input.blade.php ENDPATH**/ ?>