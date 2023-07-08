<?php if($paginator->hasPages()): ?>
<div class="d-flex justify-content-end">
    <div class="pagination-wrap hstack gap-2">
        <?php if($paginator->onFirstPage()): ?>
        <a class="page-item pagination-prev disabled" href="javascript:;">
            Kembali
        </a>
        <?php else: ?>
        <a class="page-item pagination-prev paginasi" href="javascript:;" halaman="<?php echo e($paginator->previousPageUrl()); ?>">
            Kembali
        </a>
        <?php endif; ?>
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(is_string($element)): ?>
        <a class="page-item pagination-prev disabled" href="javascript:;">
            <?php echo e($element); ?>

        </a>
        <?php endif; ?>
        <?php if(is_array($element)): ?>
        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($page == $paginator->currentPage()): ?>
        <a class="page-item pagination-prev active" href="javascript:;">
            <?php echo e($page); ?>

        </a>
        <?php else: ?>
        <a class="page-item pagination-prev paginasi" href="javascript:;" halaman="<?php echo e($url); ?>">
            <?php echo e($page); ?>

        </a>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($paginator->hasMorePages()): ?>
        <a class="page-item pagination-prev paginasi" href="javascript:;" halaman="<?php echo e($paginator->nextPageUrl()); ?>">
            Selanjutnya
        </a>
        <?php else: ?>
        <a class="page-item pagination-prev disabled" href="javascript:;">
            Selanjutnya
        </a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/theme/app/pagination.blade.php ENDPATH**/ ?>