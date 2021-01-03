<?= $this->extend('user/layout/main'); ?>


<?= $this->section('title'); ?>
<title>HOME | LOSTRUG</title>
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
                        <a href="detail.html">
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
        <!-- <div class="col-3">
            <a href="detail.html">
                <div class="card card-catalogue mx-auto">
                    <img src="../assets/image/1604991085067.jpg" alt="" class="image-card mx-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center text-product-name-catalogue">'Miracle of Struggle' <br>
                            T-shirt (white)</h5>
                        <h5 class="text-center text-price-catalogue">Rp 189.000</h5>
                    </div>
                </div>
        </div>
        </a>
        <div class="col-3">
            <a href="detail.html">
                <div class="card card-catalogue mx-auto">
                    <img src="../assets/image/1604991081160.jpg" alt="" class="image-card mx-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center text-product-name-catalogue">'Lost Sruggle' <br> T-shirt
                            (black)</h5>
                        <h5 class="text-center text-price-catalogue">Rp 189.000</h5>
                    </div>
                </div>
            </a>
        </div> -->
    </div>
    <!-- end new product -->

</div>
<!-- end container -->
</div>
<!-- end container -->
<?= $this->endSection(); ?>