<?php if (isset($component)) { $__componentOriginaleace9cbc035c4368375a3a737ed40872 = $component; } ?>
<?php $component = App\View\Components\WebLayout::resolve(['title' => 'payment'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('web-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\WebLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="bread-crumb">
		<img src="<?php echo e(asset('assets/images/banner_top.jpg')); ?>" class="img-responsive" alt="banner-top" title="banner-top">
		<div class="container">
			<div class="matter">
				<h2>Shopping Cart</h2>
				<ul class="list-inline">
					<li><a href="<?php echo e((url('/'))); ?>">HOME</a></li>
					<li><a href="<?php echo e(url('/daftarmenu')); ?>">Shopping Cart</a></li>
				</ul>
			</div>
		</div>
	</div>
    <div class="mycart">
        <div class="container">
            <div class="row">
                <form method="POST" id="form" enctype="multipart/form-data" action="<?php echo e(route('web.checkout')); ?>">
                    <div class="tab-pane col-md-12 col-sm-12 col-xs-12" id="tab-payment">
                        <?php echo csrf_field(); ?>
                        <fieldset>
                            <div class="form-group">
                                <ul class="list-inline text-center">
                                    <li class="active">
                                        <a href="#" onclick="showCardForm('Dana')">
                                            <img src="<?php echo e(asset('assets/images/Dana.png')); ?>" alt="Dana" title="Dana" class="img-responsive">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="showCardForm('Mandiri')">
                                            <img src="<?php echo e(asset('assets/images/Mandiri.png')); ?>" alt="Mandiri" title="Mandiri" class="img-responsive">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="showCardForm('Cash')">
                                            <img src="<?php echo e(asset('assets/images/Cash.png')); ?>" alt="Cash" title="Cash" class="img-responsive">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="showCardForm('BNI')">
                                            <img src="<?php echo e(asset('assets/images/BNI.png')); ?>" alt="BNI" title="BNI" class="img-responsive">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="rekeningInfo" style="display: none;">
                                <span id="nomorRekening"></span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="input-cardnumber" placeholder="Card Number" name="payment" required="" type="text" readonly>
                            </div>
                            <div class="form-group">
                                <label for="input-proof">Bukti Pembayaran</label>
                                <input name="image" id="image" class="form-control" type="file" <?php echo e((old('payment') != 'Cash') ? 'required' : ''); ?>>
                            </div>
                        </fieldset>
                        
                        <div class="col-md-12 col-sm-12 col-xs-12 padd0">
                            <div class="buttons pull-right">
                                <button type="submit" class="btn btn-primary">Place Your Order</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--End Content-->
    <?php $__env->startSection('script'); ?>
    <script>
        function showCardForm(cardType) {
            var cardNumberInput = document.getElementById('input-cardnumber');
            cardNumberInput.value = ''; // Menghapus nilai yang ada pada input

            var paymentInput = document.querySelector('input[name="payment"]');

            var rekeningInfo = document.getElementById('rekeningInfo');
            var nomorRekening = document.getElementById('nomorRekening');

            switch (cardType) {
                case 'Dana':
                    // Logika khusus untuk tipe kartu Dana
                    cardNumberInput.placeholder = '127372903092938290292';
                    paymentInput.value = 'Dana (Fritz Marpaung | 89508081263632874)';
                    rekeningInfo.style.display = 'block';
                    break;
                case 'Mandiri':
                    // Logika khusus untuk tipe kartu Mandiri
                    cardNumberInput.placeholder = '019293339383992883999';
                    paymentInput.value = 'Mandiri (Fritz Marpaung | 1050016380549)';
                    rekeningInfo.style.display = 'block';
                    break;
                case 'BNI':
                    // Logika khusus untuk tipe kartu BNI
                    cardNumberInput.placeholder = '0123456789';                   
                    paymentInput.value = 'BNI (Oswaldz Samuel Nababan | 1449535698)';
                    rekeningInfo.style.display = 'block';
                break;
                case 'Cash':
                    // Logika khusus untuk tipe pembayaran tunai
                    cardNumberInput.placeholder = 'Silahkan Bayar Di Kasir';
                    paymentInput.value = 'Cash (Tidak Usah Mengupload Bukti Transfer)';
                    rekeningInfo.style.display = 'none';
                   
                    var buktiPembayaranInput = document.getElementById('image');
                    buktiPembayaranInput.value = '';
                    buktiPembayaranInput.required = false; // Menghapus keharusan untuk mengisi input file bukti pembayaran
                    break;
                default:
                    cardNumberInput.placeholder = 'Card Number'; // Placeholder default
                    paymentInput.value = ''; // Menghapus nilai pada input pembayaran
                    rekeningInfo.style.display = 'none'; // Menyembunyikan info rekening jika tipe kartu tidak cocok
                    break;

                    var buktiPembayaranInput = document.getElementById('image');
                    buktiPembayaranInput.required = true;
                    break;
            }
        }
    </script>
    <script>
        $('#form').on('submit', function(event){
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "<?php echo e(route('web.checkout')); ?>",
                type: "POST",
                data: formData,
                enctype: "multipart/form-data",
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.alert == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: response.message,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "detail/"+response.id;
                            }
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message,
                            dangerMode: true,
                        })
                    }
                }
            });
        });
    </script>
    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleace9cbc035c4368375a3a737ed40872)): ?>
<?php $component = $__componentOriginaleace9cbc035c4368375a3a737ed40872; ?>
<?php unset($__componentOriginaleace9cbc035c4368375a3a737ed40872); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/web/checkout/payment.blade.php ENDPATH**/ ?>