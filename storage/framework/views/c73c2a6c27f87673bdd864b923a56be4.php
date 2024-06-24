<div class="mini_cart">
    <div class="cart_close">
        <div class="cart_text">
            <h3>cart</h3>
        </div>
        <div class="mini_cart_close">
            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
        </div>
    </div>
    <div class="dropdown-cart-products">

    </div>

    <div class="mini_cart_table">
        <div class="cart_total mt-10">
            <span>Total:</span>
            <span class="price cart-total-price">00</span>
        </div>
    </div>

    <div class="mini_cart_footer">
        <div class="cart_button">
            <a href="<?php echo e(route('cart.index')); ?>">View cart</a>
        </div>
        <div class="cart_button">
            <a class="active" href="<?php echo e(route('client.checkout')); ?>">Checkout</a>
        </div>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\client_lifestyle\resources\views/client/layouts/_mini_cart.blade.php ENDPATH**/ ?>