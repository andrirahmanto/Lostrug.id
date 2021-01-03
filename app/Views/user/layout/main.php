<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Logikal Supply Localhost" content="15889612183-0ju8lmil439mo5qbr2guveu2il1h45pe.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/api:client.js"></script>
    <script>
        var googleUser = {};
        var startApp = function() {
            gapi.load('auth2', function() {
                // Retrieve the singleton for the GoogleAuth library and set up the client.
                auth2 = gapi.auth2.init({
                    client_id: '15889612183-0ju8lmil439mo5qbr2guveu2il1h45pe.apps.googleusercontent.com',
                    cookiepolicy: 'single_host_origin',
                    // Request scopes in addition to 'profile' and 'email'
                    //scope: 'additional_scope'
                });
                attachSignin(document.getElementById('google'));
            });
        };

        function attachSignin(element) {
            auth2.attachClickHandler(element, {},
                function(googleUser) {
                    // alert(googleUser.getBasicProfile().getName());
                    // alert(googleUser.getAuthResponse().id_token);
                    $.post()
                    document.getElementById("identity").innerHTML = '<form id="form-google" action="/login" method="POST"><input type="hidden" name="google-token" value="' + googleUser.getAuthResponse().id_token + '"></form>';
                    // $('#identity').html('<input type="hidden" name="google-token" value="'+ googleUser.getAuthResponse().id_token + '"')
                    var form = $('#form-google');
                    $.ajax({
                        type: form.attr('method'),
                        url: form.attr('action'),
                        data: form.serialize()
                    }).done(function(data) {
                        // alert(data);
                        window.location.href = '/';
                    }).fail(function(data) {
                        alert("Login Tidak Berhasil");
                    });
                },
                function(error) {
                    alert('Login Di Tutup');
                });
        }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/custom/custom.css">

    <!-- Jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/datatable/datatables.min.css">
    <script type="text/javascript" charset="utf8" src="<?= base_url(); ?>/assets/datatable/datatables.min.js"></script>

    <!-- sweetalret -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/sweetalert2/package/dist/sweetalert2.min.css">
    <script src="<?= base_url(); ?>/assets/sweetalert2/package/dist/sweetalert2.all.min.js"></script>

    <!-- Logo Icon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/image/icon2.png">

    <!-- Content  -->
    <?= $this->renderSection('title'); ?>
    <!-- end Content -->
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-balck">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="<?= base_url(); ?>/assets/image/brand.png" alt="" class="brand-image">
            </a>
            <div class="form-inline">
                <?php if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_name'])) : ?>
                    <button type="button" class="btn btn-light" id="google">Login <i class="fas fa-sign-in-alt"></i></button>
                    <div id="identity" hidden></div>
                    <script>
                        startApp();
                    </script>
                <?php else : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; margin-top:-25px">
                            Hi, <?= $_SESSION['user_name']; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/myorder">My Order</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </li>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- Content  -->
    <?= $this->renderSection('content'); ?>
    <!-- end Content -->



    <!-- footer -->
    <footer class="footer-black sticky-bottom">
        <div class="footer-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!--Brand-->
                        <img src="../assets/image/brand.png" alt="" class="brand-image">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4 class="footer-heading">Quick Link</h4>
                            <ul class="footer-item">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="catalogue.html">Category</a></li>
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
                            <li><a href="https://www.instagram.com/lostrugapparel/">Instagram</i></a></li>
                            <li><a href="https://www.tokopedia.com/lostrugapparel?source=universe&st=product">Tokopedia</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center footer-copyright">&copy; Copyright 2018 - Company Name. All rights
                            reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
<!-- end footer -->

<!-- Optional JavaScript -->
<!-- jQuery first (move to header), then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>