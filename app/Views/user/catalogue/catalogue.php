<?= $this->extend('user/layout/main'); ?>


<?= $this->section('title'); ?>
<title>CATALOGUE | LOSTRUG</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light menu">
    <div class="container">
        <div class="mx-auto order-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/catalogue">Catalogue</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- end menu -->

<!-- container -->
<div class="container">

    <!-- new product -->
    <div class="row">
        <div class="col-md-3 col-12">
            <div class="category">
                <div class="card card-catalogue mx-auto">
                    <div class="card-body">
                        <h4 class="title">Category</h4>
                        <hr class="hr">
                        <a href="#">
                            <h5 class="item text-dark">T-shirt</h5>
                        </a>
                        <hr class="hr-item">
                        <a href="#">
                            <h5 class="item text-dark">Hoodie</h5>
                        </a>
                        <hr class="hr-item">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="row jutify-content-center d-flex">
                <?php foreach ($products as $product) : ?>
                    <div class="col-md-4 col-12">
                        <a href="" onclick="productDetail('<?php echo $product['product_id']; ?>')" data-toggle="modal">
                            <div class="card card-catalogue mx-auto">
                                <img src="<?= base_url(); ?>/assets/image/<?= $product['product_image']; ?>" alt="" class="image-card mx-auto">
                                <div class="card-body">
                                    <h5 class="card-title text-center text-product-name-catalogue"><?= $product['product_name']; ?> <br> <?= $product['product_info']; ?></h5>
                                    <h5 class="text-center text-price-catalogue"><?php echo "Rp " . number_format($product['product_price'], 0, '', '.'); ?></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- end new product -->

</div>
<!-- end container -->
<div class="viewmodal" style="display: none;"></div>
<script>
    function productDetail(product_id) {
        $.ajax({
            type: "post",
            url: "<?= base_url('/order/viewmodaldetail'); ?>",
            dataType: "json",
            data: {
                product_id: product_id
            },
            success: function(response) {
                if (response.success) {
                    $('.viewmodal').html(response.success).show();
                    $('#modaldetail').modal('show');
                } else {
                    alert('error');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    };
</script>
<?= $this->endSection(); ?>