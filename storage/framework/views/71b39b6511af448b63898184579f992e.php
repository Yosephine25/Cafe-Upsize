<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
      <thead>
        <tr>
            <th style="width: 25%">No</th>
            <th style="width: 25%">Nomor Meja</th>
            <th style="width: 25%">Aksi</th>
        </tr>
      </thead>
      <tbody class="list form-check-all">
        <?php $__currentLoopData = $ruangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($loop->iteration); ?></td>
          <td><?php echo e($item->meja); ?></td>
          <td>
            <ul class="list-inline hstack gap-2 mb-0">
              <li class="btn btn-info-light btn-square  br-50 m-1" data-bs-toggle="tooltip" data-bs-trigger="Quick View"
                data-bs-placement="top" title="View" data-bs-original-title="Show">
                <a href="javascript:;"
                  onclick="load_detail('<?php echo e(route('admin.ruangan.show',$item->id)); ?>')"
                  class="text-primary d-inline-block edit-item-btn">
                  <i class="ri-eye-fill fs-16"></i>
                </a>
              <li class="btn btn-info-light " data-bs-toggle="tooltip" data-bs-trigger="hover"
                data-bs-placement="top" title="Edit" data-bs-original-title="Edit">
                <a href="<?php echo e(route('admin.ruangan.edit',$item->id)); ?>"
                  class="text-primary d-inline-block edit-item-btn">
                  <i class="ri-pencil-fill fs-16"></i>
                </a>
              </li>
              <li class="btn btn-info-light" data-bs-toggle="tooltip" data-bs-trigger="hover"
                data-bs-placement="top" title="" data-bs-original-title="Remove">
                <a href="javascript:;"
                  onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','<?php echo e(route('admin.ruangan.destroy',$item->id)); ?>');"
                  class="text-danger d-inline-block remove-item-btn">
                  <i class="ri-delete-bin-5-fill fs-16"></i>
                </a>
              </li>
            </ul>
          </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
</div>
<div class="d-flex justify-content-center">
  <?php echo e($ruangan->links('theme.app.pagination')); ?>

</div>

<?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/admin/ruangan/list.blade.php ENDPATH**/ ?>