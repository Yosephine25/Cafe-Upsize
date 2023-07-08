<div class="card-body">
    <div>
        <div class="table-responsive table-card mb-1">
            <table class="table align-middle">
                <thead class="table-light text-muted">
                    <tr>
                        <th>No</th>
                        <th>Nama Pengirim</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="list form-check-all">
                    <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($item->user->namalengkap); ?></td>
                        <td><?php echo e($item->user->nomorhp); ?></td>
                        <td><?php echo e($item->user->address); ?></td>
                        <td><?php echo e($item->user->city); ?></td>
                        <td><?php echo e($item->payment); ?></td>
                        <td><?php echo e($item->status); ?></td>
                        <td>
                            <ul class="list-inline hstack gap-2 mb-0">
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-placement="top" title="Show Detail Order" data-bs-original-title="Show Detail Order">
                                    <a href="<?php echo e(route('staff.historyproduk.show', $item->id)); ?>"
                                        class="text-primary d-inline-block remove-item-btn">
                                        <i class="ri-eye-fill fs-16"></i>
                                    </a>
                                </li>
                                <?php if($item->status == 'pending'): ?>
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                data-bs-placement="top" title="" data-bs-original-title="Accept">
                                     <a href="javascript:;"
                                         onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PUT','<?php echo e(route('staff.historyproduk.accept',$item->id)); ?>');"
                                         class="text-success d-inline-block remove-item-btn">
                                         <i class="fa fa-check fs-16"></i>
                                     </a>
                                 </li>
                                 <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                     data-bs-placement="top" title="" data-bs-original-title="Reject">
                                     <a href="javascript:;"
                                         onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PUT','<?php echo e(route('staff.historyproduk.reject',$item->id)); ?>');"
                                         class="text-danger d-inline-block remove-item-btn">
                                         <i class="fa fa-close fs-16"></i>
                                     </a>
                                 </li>
                                <?php endif; ?>
                                <?php if($item->status =='accepted'): ?>
                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                data-bs-placement="top" title="" data-bs-original-title="Finish">
                                    <a href="javascript:;"
                                        onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PUT','<?php echo e(route('staff.historyproduk.finish',$item->id)); ?>');"
                                        class="text-success d-inline-block remove-item-btn">
                                        <i class="fa fa-flag fs-16"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                 <?php if($item->status != 'pending'): ?>
                                 <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                     data-bs-placement="top" title="" data-bs-original-title="Remove">
                                     <a href="javascript:;"
                                         onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','<?php echo e(route('staff.historyproduk.destroy',$item->id)); ?>');"
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
    <?php echo e($order->links('theme.app.pagination')); ?>

</div><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/staff/historyproduk/list.blade.php ENDPATH**/ ?>