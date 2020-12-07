<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/custom/custom.css">

    <!-- Fontawsome -->


    <title>Hello, world!</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-balck">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url(); ?>/assets/image/brand.png" alt="" class="brand-image">
            </a>
            <form class="form-inline">
                <i class="fas fa-shopping-cart icon-nav"></i>
                <i class="fas fa-user icon-nav"></i>
            </form>
        </div>
    </nav>
    <!-- end navbar -->

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
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Catalogue<span class="sr-only">(current)</span></a>
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
            <div class="col-3">
                <div class="category">
                    <div class="card card-catalogue mx-auto">
                        <div class="card-body">
                            <h4 class="title">Category</h4>
                            <hr class="hr">
                            <a href="">
                                <h5 class="item text-dark">T-shirt</h5>
                            </a>
                            <hr class="hr-item">
                            <a href="">
                                <h5 class="item text-dark">Hoodie</h5>
                            </a>
                            <hr class="hr-item">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <a href="">
                    <div class="card card-catalogue mx-auto">
                        <img src="<?= base_url(); ?>/assets/image/1604991040283.jpg" alt="" class="image-card mx-auto">
                        <div class="card-body">
                            <h5 class="card-title text-center text-product-name-catalogue">'You are under my control' <br> T-shirt (black)</h5>
                            <h5 class="text-center text-price-catalogue">Rp 189.000</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-3">
                <a href="">
                    <div class="card card-catalogue mx-auto">
                        <img src="<?= base_url(); ?>/assets/image/1604991085067.jpg" alt="" class="image-card mx-auto">
                        <div class="card-body">
                            <h5 class="card-title text-center text-product-name-catalogue">'Miracle of Struggle' <br> T-shirt (white)</h5>
                            <h5 class="text-center text-price-catalogue">Rp 189.000</h5>
                        </div>
                    </div>
            </div>
            </a>
            <div class="col-3">
                <a href="">
                    <div class="card card-catalogue mx-auto">
                        <img src="<?= base_url(); ?>/assets/image/1604991081160.jpg" alt="" class="image-card mx-auto">
                        <div class="card-body">
                            <h5 class="card-title text-center text-product-name-catalogue">'Lost Sruggle' <br> T-shirt (black)</h5>
                            <h5 class="text-center text-price-catalogue">Rp 189.000</h5>
                        </div>
                    </div>
            </div>
            </a>
        </div>
        <!-- end new product -->

    </div>
    <!-- end container -->

    <!-- footer -->
    <footer class="footer-black">
        <div class="footer-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!--Brand-->
                        <img src="<?= base_url(); ?>/assets/image/brand.png" alt="" class="brand-image">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4 class="footer-heading">Quick Link</h4>
                            <ul class="footer-item">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Category</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4 class="footer-heading">About Us</h4>
                            <ul class="footer-item">
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Address</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Follow Us</h4>
                        <ul class="social-network social-circle footer-item">
                            <li><a href="#" class="icoFacebook" title="Facebook">Instagram</i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin">Tokopedia</i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center footer-copyright">&copy; Copyright 2018 - Company Name. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
<!-- end footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>