<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Logikal Supply Localhost"
        content="15889612183-0ju8lmil439mo5qbr2guveu2il1h45pe.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/api:client.js"></script>
    <script>
        var googleUser = {};
        var startApp = function () {
            gapi.load('auth2', function () {
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
            console.log(element.id);
            auth2.attachClickHandler(element, {},
                function (googleUser) {
                    sessionStorage.setItem("name", googleUser.getBasicProfile().getName());
                    window.location.href = "index.html";
                    // document.getElementById('name').innerText = "Signed in: " +
                    //     googleUser.getBasicProfile().getName();
                }, function (error) {
                    alert(JSON.stringify(error, undefined, 2));
                });
        }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/custom/custom.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


    <title>My Orders Andri Rahmanto | LOSTRUG</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-balck">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="../assets/image/brand.png" alt="" class="brand-image">
            </a>
            <form class="form-inline">
                <li class="nav-item dropdown">
                    <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        <i class="fas fa-user icon-nav"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="orders.html">My Order</a>
                        <div class="dropdown-divider"></div>
                        <div>
                            <a class="dropdown-item" href="#" id="google">Login</a>
                            <div id="identity" hidden></div>
                            <script>
                                startApp();
                            </script>
                        </div>
                        <a class="dropdown-item" href="index.html">Logout</a>
                    </div>
                </li>
            </form>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light menu">
        <div class="container">
            <div class="mx-auto order-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="catalogue.html">Catalogue</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>