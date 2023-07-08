<div class="card-body">
    <div>
        <div class="table-responsive table-card mb-1">
            <table class="table align-middle">
                <thead class="table-light text-muted">
                    <tr>
                        <th>No</th>
                        <th>Nama Pengirim</th>
                        <th>No Meja</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Deskripsi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="list form-check-all">
                    <?php $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->user->namalengkap); ?></td>
                        <td><?php echo e($item->meja->meja); ?></td>
                        <td><?php echo e($item->book_date); ?></td>
                        <td><?php echo e($item->description); ?></td>
                        <td><?php echo e($item->status); ?></td>
                        <td>
                            <ul class="list-inline hstack gap-2 mb-0">
                               <?php if($item->status == 'Pending'): ?>
                               <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                               data-bs-placement="top" title="" data-bs-original-title="Accept">
                                    <a href="javascript:;"
                                        onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PUT','<?php echo e(route('admin.history.accept',$item->id)); ?>');"
                                        class="text-success d-inline-block remove-item-btn">
                                        <i class="fa fa-check fs-16"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-placement="top" title="" data-bs-original-title="Reject">
                                    <a href="javascript:;"
                                        onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PUT','<?php echo e(route('admin.history.reject',$item->id)); ?>');"
                                        class="text-danger d-inline-block remove-item-btn">
                                        <i class="fa fa-close fs-16"></i>
                                    </a>
                                </li>
                               <?php endif; ?>
                               <?php if($item->status =='Accept'): ?>
                               <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                               data-bs-placement="top" title="" data-bs-original-title="Finish">
                                   <a href="javascript:;"
                                       onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PUT','<?php echo e(route('admin.history.finish',$item->id)); ?>');"
                                       class="text-success d-inline-block remove-item-btn">
                                       <i class="fa fa-flag fs-16"></i>
                                   </a>
                               </li>
                               <?php endif; ?>
                                <?php if($item->status != 'Pending'): ?>
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-placement="top" title="" data-bs-original-title="Remove">
                                    <a href="javascript:;"
                                        onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','<?php echo e(route('admin.history.destroy',$item->id)); ?>');"
                                        class="text-danger d-inline-block remove-item-btn">
                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    <?php echo e($booking->links('theme.app.pagination')); ?>

</div>
<?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/admin/history/list.blade.php ENDPATH**/ ?>