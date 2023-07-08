<?php if (isset($component)) { $__componentOriginaleace9cbc035c4368375a3a737ed40872 = $component; } ?>
<?php $component = App\View\Components\WebLayout::resolve(['title' => 'Ruangan'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('web-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\WebLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    .justify-content-end {
      justify-content: end;
      display: flex;
    }
    .reservation-button {
      margin-bottom: 10px;
    }
    .pagination-container {
      margin-top: 10px;
    }
  </style>
  <div class="bread-crumb">
    <img src="<?php echo e(asset('assets/images/banner_top.jpg')); ?>" class="img-responsive" alt="banner-top" title="banner-top">
    <div class="container">
      <div class="matter">
        <h2>Reservation</h2>
        <ul class="list-inline">
          <li><a href="<?php echo e((url('/'))); ?>">HOME</a></li>
          <li><a href="<?php echo e(url('/ruangan')); ?>">Room Reservation</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="reserved mar-b">
    <div class="container">
      <div class="row ">
        <div class="col-sm-12 commontop text-center">
          <h4>Room Reservation</h4>
          <hr>
          <p>Anda dapat memesan ruangan kami dengan mudah melalui pemesanan online atau melalui tim pelayanan kami yang ramah.
            Kami menyediakan pilihan ruangan yang nyaman dan dilengkapi dengan fasilitas modern, seperti meja rapat, layar proyektor,
            dan akses internet yang cepat. Setiap ruangan dirancang untuk memberikan lingkungan yang kondusif bagi pertemuan atau acara Anda.</p>
        </div>
        <div class="col-sm-6 order col-sm-offset-3">
          <form action="/ruangan/search" class="form-horizontal search-icon" method="GET">
              <fieldset>
                  <div class="form-group">
                      <input name="search" value="<?php echo e(request('search')); ?>" placeholder="Search keyword" class="form-control" type="search">
                  </div>
                  <button type="submit" class="btn">Search</button>
              </fieldset>
          </form>
          <br>
          <?php if(isset($message)): ?>
          <div class="alert alert-danger mt-3">
              <?php echo e($message); ?>

          </div>
          <?php endif; ?>
        </div>      
        <div class="blog-area full-blog blog-standard full-blog grid-colum default-padding col-md-12">
          <div class="reservation-button justify-content-end"> 
            <button type="button" class="btn-primary" onclick="location.href='<?php echo e(url('/booking/create')); ?>';">Reservation</button> 
          </div>
          <table>
            <tr>
              <th>No</th>
              <th>Image</th>
              <th>Table Number</th>
              <th>Description</th>
              <th>Table Status</th>
            </tr>
            <?php $__currentLoopData = $meja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <th><?php echo e($item->id); ?></th>
              <th>
                <img src="<?php echo e(asset('images/meja/'.$item->cover)); ?>" alt="image" title="image" class="img-responsive mx-auto d-block" style="width:100%; height:40vh" />
              </th>
              <th><?php echo e($item->meja); ?></th>
              <th><?php echo e($item->description); ?></th>
              <th><?php echo e($item->status); ?></th>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>
      </div>
      <div class="pagination-container text-center">
        <?php echo e($meja->links('theme.web.custom')); ?>

      </div>
    </div>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleace9cbc035c4368375a3a737ed40872)): ?>
<?php $component = $__componentOriginaleace9cbc035c4368375a3a737ed40872; ?>
<?php unset($__componentOriginaleace9cbc035c4368375a3a737ed40872); ?>
<?php endif; ?>
<?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/web/ruangan/main.blade.php ENDPATH**/ ?>