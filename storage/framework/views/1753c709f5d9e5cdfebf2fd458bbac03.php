<?php if (isset($component)) { $__componentOriginaleace9cbc035c4368375a3a737ed40872 = $component; } ?>
<?php $component = App\View\Components\WebLayout::resolve(['title' => 'Form'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
				<h2>Reservation</h2>
				<ul class="list-inline">
					<li><a href="<?php echo e((url('/'))); ?>">HOME</a></li>
					<li><a href="<?php echo e(url('/ruangan')); ?>">Form Reservation</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="reserved mar-b">
		<div class="container">
			<div class="row ">
				<div class="col-sm-12 commontop text-center">
					<h4>Form Reservation</h4>
					<hr>
					<p>Kami siap membantu Anda dalam mengatur setiap detail reservasi, mulai dari pemilihan menu makanan dan minuman yang sesuai dengan selera Anda,
						hingga penyesuaian ruangan sesuai dengan jumlah tamu dan kebutuhan teknis Anda. Tim kami akan bekerja sama dengan Anda untuk memastikan
						setiap acara yang Anda rencanakan berjalan dengan lancar dan memuaskan.</p>
					<hr>
				</div>
				<div class="col-sm-6 col-xs-12">
					<img src="<?php echo e(asset('assets/images/reservation.jpg')); ?>" class="img-responsive" alt="image" title="image" />
				</div>
				<div class="col-sm-6 col-xs-12">
					<form method="post" enctype="multipart/form-data" action="<?php echo e(route('booking.store')); ?>">
						<?php echo csrf_field(); ?>
						<?php if(!Auth::check()): ?> <!-- Menambahkan kondisi jika belum login -->
							<div class="alert alert-warning" role="alert">
								Silakan login terlebih dahulu untuk melakukan booking.
							</div>
						<?php endif; ?>
						<div class="form-group">
							<i class="icofont icofont-ui-calendar"></i><input name="book_date" value="Date" placeholder="date" id="datetimepicker" class="form-control" type="text">
							<?php $__errorArgs = ['book_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="alert alert-danger">
									Silahkan untuk melakukan penginputan tanggal beserta jam terlebih dahulu.
								</div>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<div class="form-group">
							<i class="fa fa-key"></i>							
							<select class="selectpicker form-control bs-select-hidden" name="meja_id">
								<option selected="" disabled>Table Number</option>
								<?php $__currentLoopData = $meja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($item->id); ?>"><?php echo e($item->meja); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
							<?php $__errorArgs = ['meja_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="alert alert-danger">
									Silahkan untuk melakukan pemilihan meja terlebih dahulu.
								</div>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<div class="form-group">
							<i class="icofont icofont-ui-message"></i>
							<textarea class="form-control" id="message" name="description" placeholder="Message"></textarea>
							<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="alert alert-danger">
									Silahkan untuk melakukan pengisian description terlebih dahulu.
								</div>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<?php if(Auth::check()): ?> <!-- Menambahkan kondisi jika sudah login -->
							<button type="submit" class="btn-primary">Book Now</button>
						<?php else: ?>
							<button type="button" class="btn-primary" onclick="showLoginAlert()">Book Now</button>
						<?php endif; ?>
					</form>

					<div class="text-left"></div>	
				</div>
			</div>
		</div>
	</div>
	<?php $__env->startSection('css'); ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.0/jquery.datetimepicker.css" integrity="sha512-/Ef7B82QK2/WK5lEP1rzzXC2tEP5437FenEsdCUJX8KY6FJ6sXfzGpnJLPDLayzwwl8wFzX1Ksbq41SkM0eUTQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php $__env->stopSection(); ?>
	<?php $__env->startSection('script'); ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.0/jquery.datetimepicker.full.min.js" integrity="sha512-Zsb24BFA6Bbhj6sc2WYGnjwSElEKYkkdmL7ImETdFklacNmcJS0Ny08qc5p64wF9XnzuK7Y3Ku0peWuYA8D7Ng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script>
			$(document).ready(function() {
				$(function() {
					var today = new Date();
					var minBookingDate = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 1); // Tanggal minimum untuk pemesanan (1 hari setelah hari ini)
					
					$('#datetimepicker').datetimepicker({
						format: 'Y-m-d H:i:s',
						timepickerScrollbar: true,
						step: 5,
						minDate: minBookingDate, // Tanggal minimum yang dapat dipilih
						yearStart: 2020,
						yearEnd: 2030,
						allowTimes: ['10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00'], // Jam operasional yang diperbolehkan
						onSelectDate: function(dp, $input) {
							console.log('Selected date: ' + dp.getDate());
						},
						onSelectTime: function(dp, $input) {
							console.log('Selected time: ' + dp.getTime());
						}
					});
				});
			});
		</script>			
		<script>
			function showLoginAlert() {
				alert('Silakan login terlebih dahulu untuk melakukan booking.');
				// Tambahkan kode lain sesuai kebutuhan, seperti redirect ke halaman login
			}
		</script>
	<?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleace9cbc035c4368375a3a737ed40872)): ?>
<?php $component = $__componentOriginaleace9cbc035c4368375a3a737ed40872; ?>
<?php unset($__componentOriginaleace9cbc035c4368375a3a737ed40872); ?>
<?php endif; ?><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/web/booking/create.blade.php ENDPATH**/ ?>