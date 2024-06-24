<?php $__env->startSection('content'); ?>

<!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="<?php echo e(route('client.home')); ?>">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="checkout_page_bg">
        <div class="container">
            <div class="Checkout_section">
                <div class="row"></div>
                <div class="checkout_form">
                    <div class="row">
                        <div class="checkout-success">

                        </div>

                        <div class="col-lg-6 col-md-6 afterCheckout">
                            <div class="checkout_form_left">
                                <h3>Billing Details</h3>
                                <div class="row">

                                    <div class="col-lg-6 mb-20">
                                        <label>Name <span>*</span></label>
                                        <input type="text" id="name" value="<?php echo e(Auth::user()->name); ?>" readonly>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label>Phone<span>*</span></label>
                                        <input id="phone" type="text" value="<?php echo e(Auth::user()->phone); ?>" readonly>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label> Email Address <span>*</span></label>
                                        <input id="email" type="text" value="<?php echo e(Auth::user()->email); ?>" readonly>
                                    </div>
                                    <div class="col-lg-6 mb-20">
                                        <label> District <span>*</span></label>
                                        <select class="niceselect_option" name="district" id="district">
                                            <option value="">--Select District--</option>
                                            <?php if(Auth::user()->district): ?>
                                                <option selected><?php echo e(Auth::user()->district); ?></option>
                                            <?php endif; ?>
                                            <option>Bagerhat</option>
                                            <option>Bandarban</option>
                                            <option>Barguna</option>
                                            <option>Barisal</option>
                                            <option>Bhola</option>
                                            <option>Bogura</option>
                                            <option>Brahmanbaria</option>
                                            <option>Chandpur</option>
                                            <option>Chapainawabganj</option>
                                            <option>Chattogram</option>
                                            <option>Chuadanga</option>
                                            <option>Comilla</option>
                                            <option>Coxsbazar</option>
                                            <option>Dhaka</option>
                                            <option>Dinajpur</option>
                                            <option>Faridpur</option>
                                            <option>Feni</option>
                                            <option>Gaibandha</option>
                                            <option>Gazipur</option>
                                            <option>Gopalganj</option>
                                            <option>Habiganj</option>
                                            <option>Jamalpur</option>
                                            <option>Jashore</option>
                                            <option>Jhalakathi</option>
                                            <option>Jhenaidah</option>
                                            <option>Joypurhat</option>
                                            <option>Khagrachhari</option>
                                            <option>Khulna</option>
                                            <option>Kishoreganj</option>
                                            <option>Kurigram</option>
                                            <option>Kushtia</option>
                                            <option>Lakshmipur</option>
                                            <option>Lalmonirhat</option>
                                            <option>Madaripur</option>
                                            <option>Magura</option>
                                            <option>Manikganj</option>
                                            <option>Meherpur</option>
                                            <option>Moulvibazar</option>
                                            <option>Munshiganj</option>
                                            <option>Mymensingh</option>
                                            <option>Naogaon</option>
                                            <option>Narail</option>
                                            <option>Narayanganj</option>
                                            <option>Narsingdi</option>
                                            <option>Natore</option>
                                            <option>Netrokona</option>
                                            <option>Nilphamari</option>
                                            <option>Noakhali</option>
                                            <option>Pabna</option>
                                            <option>Panchagarh</option>
                                            <option>Patuakhali</option>
                                            <option>Pirojpur</option>
                                            <option>Rajbari</option>
                                            <option>Rajshahi</option>
                                            <option>Rangamati</option>
                                            <option>Rangpur</option>
                                            <option>Satkhira</option>
                                            <option>Shariatpur</option>
                                            <option>Sherpur</option>
                                            <option>Sirajganj</option>
                                            <option>Sunamganj</option>
                                            <option>Sylhet</option>
                                            <option>Tangail</option>
                                            <option>Thakurgaon</option>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-20">
                                        <label>Street address <span>*</span></label>
                                        <input id="address" placeholder="House number and street name" type="text" value="<?php echo e(Auth::user()->address); ?>">
                                    </div>





                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 afterCheckout">
                            <div class="checkout_form_right">


                                    <h3>Your order</h3>
                                    <div class="order_table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody class="checkout-page-view">

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Cart Subtotal</th>
                                                    <td> <span class="fontSize14 cart-total-price">0</span></td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping (+):</th>
                                                    <td><span class="fontSize14 shipping-total">0</span></td>
                                                </tr>
                                                <tr class="order_total">
                                                    <th>Order Total</th>
                                                    <td><span class="fontSize14 payable-total">0</span></td>
                                                </tr>
                                            </tfoot>

                                        </table>
                                    </div>
                                    <div class="payment_method">
                                        <h4>Cash On Delivery</h4>
                                        <input type="hidden" value="cod" name="paymentMethod">
                                        <div class="order_button">
                                            <button type="button" class="orderPlaceBtn">Proceed to Order</button>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Checkout page section end-->

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(function (){
            let district = document.getElementById("district");
            let selectedIndex = district.selectedIndex;
            let selectedOptionText = district.options[selectedIndex].text;
            let shippingCharge = 0;
            let payableTotal = 0;
            if (selectedOptionText == 'Dhaka'){
                shippingCharge = 70;
            }else{
                shippingCharge = 120;
            }
            let totalPrice = localStorage.getItem('totalPrice');
            payableTotal = parseFloat(totalPrice) + parseFloat(shippingCharge);
            $('.shipping-total').html('Tk '+shippingCharge)
            $('.payable-total').html('Tk '+payableTotal)
            $('#amountTotal').attr('value', payableTotal);
            localStorage.setItem('shippingCharge',JSON.stringify(shippingCharge));
        });
    </script>
    <script>
        $('select[name="district"]').on('change', function(){
            let district = document.getElementById("district");
            let selectedIndex = district.selectedIndex;
            let selectedOptionText = district.options[selectedIndex].text;
            let shippingCharge = 0;
            let payableTotal = 0;
            if (selectedOptionText == 'Dhaka'){
                shippingCharge = 70;
            }else{
                shippingCharge = 120;
            }
            let totalPrice = localStorage.getItem('totalPrice');
            payableTotal = parseFloat(totalPrice) + parseFloat(shippingCharge);
            $('.shipping-total').html('Tk '+shippingCharge)
            $('.payable-total').html('Tk '+payableTotal)
            $('#amountTotal').attr('value', payableTotal);
            localStorage.setItem('shippingCharge',JSON.stringify(shippingCharge));
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('client.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/zariijsr/abrarmart.com/resources/views/client/checkout.blade.php ENDPATH**/ ?>