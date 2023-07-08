<div class="mycart">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-cart">
                        <h2>Keranjang Anda</h2>
                        <div class="table-responsive">
                            <table class="table  table-bordered">
                                <thead>
                                    <tr>
                                        <td class="text-center">Name</td>
                                        <td class="text-center">Price</td>
                                        <td class="text-center">Qty.</td>
                                        <td class="text-center">Total</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="<?php echo e(url('/daftarmenu/menudetail', $item->product->id)); ?>">
                                                <img src="<?php echo e(asset('images/produk/'.$item->product->cover)); ?>" alt="image" title="image" class="img-responsive mx-auto d-block" style="width:100%; height:40vh" />
                                            </a>	
                                            <div class="name">
                                                <h4><?php echo e($item->product->title); ?></h4>
                                            </div>
                                        </td>
                                        <td class="text-center"><?php echo e($item->product->price); ?></td>
                                        <td class="text-center">
                                            <p class="qtypara">
                                                <span id="minus<?php echo e($item->id); ?>" class="minus" onclick="updateQuantity(<?php echo e($item->id); ?>, -1, <?php echo e($item->product->price); ?>)"><i class="icofont icofont-minus"></i></span>
                                                <input type="text" name="quantity" value="<?php echo e($item->quantity); ?>" size="2" id="input-quantity<?php echo e($item->id); ?>" class="form-control qty" readonly />
                                                <span id="add<?php echo e($item->id); ?>" class="add" onclick="updateQuantity(<?php echo e($item->id); ?>, 1, <?php echo e($item->product->price); ?>)"><i class="icofont icofont-plus"></i></span>
                                                <input type="hidden" name="product_id" value="<?php echo e($item->product->id); ?>" />
                                            </p>
                                        </td>
                                        <td class="text-center" id="price<?php echo e($item->id); ?>"><?php echo e($item->product->price * $item->quantity); ?></td>
                                        <script>
                                            function updateQuantity(itemId, change, price) {
                                                var inputQuantity = document.getElementById('input-quantity' + itemId);
                                                var priceElement = document.getElementById('price' + itemId);
                                                
                                                
                                                var quantity = parseInt(inputQuantity.value) + change;
                                                if (quantity < 1) {
                                                    quantity = 1;
                                                }
                                                
                                                inputQuantity.value = quantity;
                                                priceElement.textContent = (price * quantity).toFixed(2);
                                                calculateTotal();
                                            }
                                        </script>
                                        <td class="text-center">
                                            <form action="<?php echo e(route('web.cart.destroy', $item->id)); ?>"  method="POST">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus ini?')">
                                                    <i class="icofont icofont-close-line"></i>
                                                </button>
                                            </form>                                                
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="5">
                                    <h3 class="text-right" id="subtotal">SUBTOTAL - $0.00</h3>
                                    <div class="buttons pull-right">
                                        <a href="<?php echo e(route('web.checkout.customer')); ?>" class="btn btn-primary">Checkout</a>
                                    </div>
                                </td>
                            </tr> 
                            <script>
                                function calculateTotal() {
                                    var prices = document.querySelectorAll("[id^='price']");
                                    var subtotal = 0;
                                    
                                    prices.forEach(function(priceElement) {
                                        subtotal += parseFloat(priceElement.textContent);
                                    });
                                    
                                    document.getElementById('subtotal').textContent = "SUBTOTAL - Rp." + subtotal.toFixed(2);
                                }
                                
                                calculateTotal();
                            </script>
                            </table>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#checkout').hide();
        get_cart();
    });

    function update_quantity(url) {
        $.ajax({
            url: url,
            type: 'PATCH',
            success: function(data) {
                $('.total-product-price').html(data.subtotal);
                $('.data-product').attr('data-quantity', data.quantity);
                load_list(1);
            }
        });
    }

    function input_quantity(url) {
        let data = "quantity=" + $('#qty').val();
        $.ajax({
            url: url,
            type: 'PATCH',
            data: data,
            success: function(data) {
                $('.total-product-price').html(data.subtotal);
                $('#qty').val(data.quantity);
                load_list(1);
            }
        });

    }

    function get_cart() {
        $('.data-product').each(function() {
            var price = $(this).data('price');
            var quantity = $(this).data('quantity');
            var total = price * quantity;
            $(this).find('.total-product-price').html('Rp ' + total.toFixed(2));
            $(this).find('.total-product-price').data('subtotal', total);
        });
        var total_price = 0;
        $('.total-product-price').each(function() {
            total_price += $(this).data('subtotal');
        });
        $('#cart-total').html('Rp ' + total_price.toFixed(2));
    }

    function hapus_cart(title, confirm_title, deny_title, method, route) {
        Swal.fire({
            title: title,
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: confirm_title,
            denyButtonText: deny_title,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: method,
                    url: route,
                    dataType: 'json',
                    beforeSend: function() {

                    },
                    success: function(response) {
                        if (response.alert == "success") {
                            toastr.success(response.message);
                            $('.top-cart-number').html(response.total_item ?? 0);
                            load_list(1);
                        } else {
                            toastr.error(response.message);
                        }
                    },
                });
            }
        });
    }
</script><?php /**PATH D:\laragon\www\CafeUpsize\resources\views/pages/web/cart/list.blade.php ENDPATH**/ ?>