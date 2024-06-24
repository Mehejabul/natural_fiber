<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal_body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="modal_tab">
                            <div class="tab-content product-details-large">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                    <div class="modal_tab_img" id="qvImg">
                                        <a href="#"><img src="<?php echo e(asset('client/assets/img/product/productbig2.jpg')); ?>" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal_tab_button">
                                <ul class="nav product_navactive owl-carousel" role="tablist">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="modal_right">
                            <div class="modal_title mb-10">
                                <h2 id="qvTitle"> <span>Title</span></h2>
                            </div>
                            <div class="modal_price mb-10">
                               <span id="qvNewPrice"> <span class="new_price">00</span></span>

                            </div>
                            <div class="modal_description mb-10">
                               <span id="qvCat"> <span></span></span>
                            </div>

                            <div class="modal_description mb-10">
                               <span id="qvColor"> <span></span></span>
                            </div>

                            <div class="modal_description mb-15">
                                <p id="qvDetails"><span></span> </p>
                            </div>
                            <div class="variants_selects">











                                <div class="modal_add_to_cart">
                                    <form action="#">

                                        <button type="submit" id="qvUrl"><span>
                                                <a href="" style="color: #fff">add to cart</a>
                                            </span></button>
                                    </form>
                                </div>
                            </div>










                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\lifestyle\resources\views/client/layouts/_quickview.blade.php ENDPATH**/ ?>