<div class="modal fade" id="modaldetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
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
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h3 class="detail-product-name"><?= $product['product_name']; ?> <?= $product['product_info']; ?></h3>
                                <h2 class="detail-price"><?php echo "Rp " . number_format($product['product_price'], 0, '', '.'); ?></h2>
                                <h4 class="detail-size"> Size: S, M, L, XL</h4>
                                <!-- form -->
                                <form>
                                    <div class="form-group form-margin">
                                        <input type="text" class="form-control" placeholder="Your size">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Amount you're going to buy">
                                    </div>
                                    <a href="form.html">
                                        <button type="button" class="btn btn-dark btn-buy">Buy</button>
                                    </a>
                                </form>
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