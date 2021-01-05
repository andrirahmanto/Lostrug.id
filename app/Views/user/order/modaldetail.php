<div class="modal fade" id="modaldetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content modal-lg">
            <div class="content">
                <!-- detail -->
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card detail-card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <!-- crousel -->
                                        <img src="<?= base_url(); ?>/assets/image/<?= $product['product_image']; ?>" class="d-block w-100" alt="...">
                                        <!-- end crousel -->
                                    </div>
                                    <div class="col-6">
                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> -->
                                        <h3 class="detail-product-name"><?= $product['product_name']; ?> <?= $product['product_info']; ?></h3>
                                        <h2 class="detail-price"><?php echo "Rp " . number_format($product['product_price'], 0, '', '.'); ?></h2>
                                        <h4 class="detail-size"> Size: S, M, L, XL</h4>
                                        <!-- form -->
                                        <?= form_open_multipart('/order/nextorder', ['class' => 'formdetailorder']); ?>
                                        <?= csrf_field(); ?>
                                        <!-- id -->
                                        <input type="hidden" value="<?= $product['product_id']; ?>" name="product_id">
                                        <!-- size -->
                                        <div class="form-group form-margin">
                                            <input type="text" class="form-control" id="size" name="size" placeholder="Your size">
                                            <div class="invalid-feedback errorsize"></div>
                                        </div>
                                        <!-- amount -->
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount you're going to buy">
                                            <div class="invalid-feedback erroramount"></div>
                                        </div>
                                        <?php if (!isset($_SESSION['user_id'])) : ?>
                                            <a href="">
                                                <span style="color: red;">you must login!</span>
                                                <button type="button" disabled class="btn btn-dark btn-buy disabled">Buy</button>
                                            </a>
                                        <?php else : ?>
                                            <a href="">
                                                <button type="submit" class="btn btn-dark btn-buy">Buy</button>
                                            </a>
                                        <?php endif; ?>
                                        <?= form_close(); ?>
                                        <!-- end form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end detail -->
            </div>
        </div>
    </div>
</div>
<Script>
    $(document).ready(function() {
        $('.formdetailorder').submit(function(e) {
            e.preventDefault();
            let form = $('.formdetailorder')[0];
            let data = new FormData(form);
            $.ajax({
                type: "post",
                url: $(this).attr("action"),
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                beforeSend: function() {
                    $('.btn-buy').attr('disabled', 'disabled');
                    $('.btn-buy').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btn-buy').removeAttr('disabled');
                    $('.btn-buy').html('Buy');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.size) {
                            $('#size').addClass('is-invalid');
                            $('.errorsize').html(response.error.size);
                        } else {
                            $('#size').removeClass('is-invalid');
                            $('.errorsize').html('');
                        };
                        if (response.error.amount) {
                            $('#amount').addClass('is-invalid');
                            $('.erroramount').html(response.error.amount);
                        } else {
                            $('#amount').removeClass('is-invalid');
                            $('.erroramount').html('');
                        };
                    } else {
                        $('.content').html(response.success);
                    };

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    });
</Script>