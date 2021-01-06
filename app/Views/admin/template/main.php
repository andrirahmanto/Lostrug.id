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

    <!-- Content  -->
    <?= $this->renderSection('title'); ?>
    <!-- end Content -->

    <!-- Logo Icon -->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/image/icon2.png">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-balck">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="/admin">
                ADMIN LOSTRUG
            </a>
            <form class="form-inline">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; margin-top:-25px">
                        Hi, <?= $_SESSION['admin_name']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/admin/logout">Logout</a>
                    </div>
                </li>
            </form>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- container -->
    <div class="container">
        <!-- Data Admin -->
        <div class="viewdataadmin"></div>
        <!-- end Data Admin -->
        <a type="button" class="btn btn-success mb-3 btn-refreshbutton" onclick="viewdataadmin()">Refresh <i class="fa fa-sync-alt"></i></a>

        <!-- Table  -->
        <?= $this->renderSection('table'); ?>
        <!-- end Table -->

    </div>
    <!-- end container -->

    <!-- footer -->
    <footer class="footer-black fixed-bottom">
        <div class="footer-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center footer-copyright">&copy; Copyright 2020 - Losturg. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <br><br><br><br><br><br><br>

    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first (move to header), then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        function viewdataadmin() {
            $.ajax({
                url: "<?= base_url('admin/order/viewdataadmin'); ?>",
                dataType: "json",
                beforeSend: function() {
                    $('.btn-refreshbutton').attr('disabled', 'disabled');
                    $('.btn-refreshbutton').html('Refresh <i class="fa fa-spin fa-sync-alt"></i>');
                },
                complete: function() {
                    $('.btn-refreshbutton').removeAttr('disabled');
                    $('.btn-refreshbutton').html('Refresh <i class="fa fa-sync-alt"></i>');
                },
                success: function(response) {
                    $('.viewdataadmin').html(response.data);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
        }

        $(document).ready(function() {
            // get table
            viewdataadmin();
        });
    </script>
    <?= $this->renderSection('script'); ?>
</body>

</html>