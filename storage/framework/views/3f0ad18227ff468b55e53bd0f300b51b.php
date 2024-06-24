<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal_body" id="modal_guide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="modal_tab">
                            <div class="tab-content product-details-large">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                    <div class="modal_tab_img">

                                        <a href="#"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="modal_tab_button">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.sizeGuidePhoto').click(function (){
        sizePhoto = $(this).attr('size-product-photo');
        $(".modal_tab_img").find("a").html('');
        $('.modal_tab_img').find("a").append('<img src="'+sizePhoto+'" alt="">');
    });
</script>
<?php /**PATH C:\xampp\htdocs\abrar_old\resources\views/client/layouts/_sizeguide.blade.php ENDPATH**/ ?>