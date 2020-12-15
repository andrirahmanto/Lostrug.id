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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>


    <title>Hello, world!</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-balck">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="/admin">
                ADMIN LOSTRUG
            </a>
            <form class="form-inline">
                <i class="namaadmin"><span>Nama Admin</span></i>
                <i class="fas fa-sign-out-alt icon-nav"></i>
            </form>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- container -->
    <div class="container">
        <!-- Data Admin -->
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 col-12">
                <div class="card text-center pemberitahuan">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card text-center pemberitahuan">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card text-center pemberitahuan">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Data Admin -->

        <!-- Tabel -->
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Account</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <table id="tabel-orders" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img class="img-fluid" style="width: 100px;" src="../assets/image/1604991081160.jpg" alt="">
                            </td>
                            <td>'Lost Struggle' T-shirt (balck)</td>
                            <td>Rp 189.000</td>
                            <td>12 pcs</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaleditproduct"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>
                                <img class="img-fluid" style="width: 100px;" src="../assets/image/1604991081160.jpg" alt="">
                            </td>
                            <td>'Lost Struggle' T-shirt (balck)</td>
                            <td>Rp 189.000</td>
                            <td>12 pcs</td>
                            <td>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaleditproduct"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- End Table -->

    </div>
    <!-- end container -->

    <!-- footer -->
    <footer class="footer-black">
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

</body>

</html>
<!-- end footer -->

<!-- Optional JavaScript -->
<!-- jQuery first (move to header), then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#tabel-orders').DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>
</body>

</html>