
    <div class="app-content main-content mt-4">
        <div class="side-app">
            <div class="main-container container-fluid"> 
                <div class="row row-sm">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Detail Meja</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row gx-lg-5">
                                <div class="col-xl-4 col-md-8 mx-auto">
                                    <div class="product-img-slider sticky-side-div">
                                        <img src="<?php echo e(asset('images/meja/'.$data->cover)); ?>" alt="" class="img-fluid d-block" />
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="mt-xl-0 mt-5">
                                        <div class="row mt-4">
                                            <div class="col-lg-6 col-sm-6">
                                                <div class="p-2 border border-dashed rounded">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-2">
                                                            <div class="avatar-title rounded bg-transparent text-info fs-24">
                                                                <i class="ri-stack-fill"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <p class="text-muted mb-1">Meja</p>
                                                            <h5 class="mb-0"><?php echo e($data->title); ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 text-muted">
                                        <h5 class="fs-14">Deskripsi :</h5>
                                        <p><?php echo e($data->description); ?></p>
                                    </div>
                                </div>
                                <div class="hstack gap-2 justify-content-end">
                                    <a class="btn btn-light" href="<?php echo e(url('admin/ruangan')); ?>">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/admin/ruangan/show.blade.php ENDPATH**/ ?>