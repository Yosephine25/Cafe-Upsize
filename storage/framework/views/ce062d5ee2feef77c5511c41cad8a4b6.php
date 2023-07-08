<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/js/dist/js/bootstrap-select.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/js/internal.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/js/owl-carousel/owl.carousel.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('assets/js/photo-gallery.js')); ?>" type="text/javascript"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115890069-7"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo e(asset('js/method.js')); ?>"></script>

<?php echo $__env->yieldContent('script'); ?>
<script>
    <?php if(session()->has('success')): ?>
    toastr.options = {
        "closeButton": true
    }
    toastr.success("<?php echo e(session()->get('success')); ?>")
    <?php endif; ?>
    
    <?php if(session()->has('error')): ?>
    toastr.options = {
        "closeButton": true
    }
    toastr.error("<?php echo e(session()->get('error')); ?>")
    <?php endif; ?>

    <?php if(session('success')): ?>
        showToast('<?php echo e(session('success')); ?>');
    <?php endif; ?>

    function showToast(message) {

    Toastify({
        text: message,
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: 'top',
        position: 'center',
        backgroundColor: 'linear-gradient(to right, #00b09b, #96c93d)',
        stopOnFocus: true
    }).showToast();
    }
</script><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/theme/web/js.blade.php ENDPATH**/ ?>