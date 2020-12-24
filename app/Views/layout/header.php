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
                            <a class="nav-link" href="<?= base_url(); ?>/Home/index">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/Home/catalogue')?>">Catalogue</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>