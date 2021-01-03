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
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/catalogue">Catalogue</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- end menu -->

<!-- coursel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../assets/image/model.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../assets/image/brandlarge.png" alt="Second slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- end coursel -->

<!-- container -->
<div class="container">
    <!-- new product -->
    <h4 class="custom-title">New Product</h4>
    <div class="row">
        <?php foreach ($products as $product) : ?>
            <div class="col-md-4 col-12">
                <a href="#">
                    <div class="card card-product mx-auto">
                        <img src="<?= base_url(); ?>/assets/image/<?= $product['product_image']; ?>" alt="" class="image-card mx-auto">
                        <div class="card-body">
                            <h5 class="card-title text-center text-product-name"><?= $product['product_name']; ?> <br> <?= $product['product_info']; ?></h5>
                            <h5 class="text-center text-price"><?php echo "Rp " . number_format($product['product_price'], 0, '', '.'); ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
        <!-- <div class="col-4">
            <a href="#">
                <div class="card card-product mx-auto">
                    <img src="../assets/image/1604991085067.jpg" alt="" class="image-card mx-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center text-product-name">'Miracle of Struggle' <br> T-shirt
                            (white)</h5>
                        <h5 class="text-center text-price">Rp 189.000</h5>
                    </div>
                </div>
        </div>
        </a>
        <div class="col-4">
            <a href="#">
                <div class="card card-product mx-auto">
                    <img src="../assets/image/1604991081160.jpg" alt="" class="image-card mx-auto">
                    <div class="card-body">
                        <h5 class="card-title text-center text-product-name">'Lost Sruggle' <br> T-shirt (black)
                        </h5>
                        <h5 class="text-center text-price">Rp 189.000</h5>
                    </div>
                </div>
            </a>
        </div> -->
    </div>
    <!-- end new product -->

</div>
<!-- end container -->
<?= $this->endSection(); ?>