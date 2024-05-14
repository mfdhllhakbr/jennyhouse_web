<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:login.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        
    <!-- My CSS -->
    <link rel="stylesheet" href="../functions/style.css">
    <link rel="stylesheet" href="collection.css">
    <title>Jennyhouse | Payment</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" id="reg-header" href="../view/index.php"><img src="../img/Jennyhouse.png"
                    alt="Jenny House" width="20%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-4 mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #FB2E86;">Collection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">History</a>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Header -->
    <section>
        <div class="container" id="reg-header">
            <h1>Payment</h1>
            <p>Please complete your payments!</p>
        </div>
    </section>
    <!-- Akhir Header -->
    <!-- Payment -->
    <div class="bca container-sm w-50 mt-3 mb-3 text-center">
        <div class="card mb-3">
            <p><img src="../img/BCA-logo.png" alt="..."></p>
            <div class="card-body">
                <h3 class="card-title border-bottom border-3">7335014103</h3>
                <p class="card-text fs-4 border-bottom border-3 pb-3">Muhammad Fadhillah Akbar</p>
                <p class="card-text fs-5"><a href="paymentconf.php">Confirm Payment</a></p>
            </div>
        </div>
    </div>
    <!-- Akhir Payment -->
    <!-- About -->
    <footer class="footer-48201">

        <div class="container">
            <div class="row">
                <div class="col-md-4 pr-md-5">
                    <a href="#" class="footer-site-logo d-block mb-4"><img src="../img/Jennyhouse.png" alt="Jenny House"
                            width="35%"></a>
                    <p>Jenny House, with the largest number of top makeup artists in Korea, Jenny House Cosmetics is an
                        all-Green grade natural derma cosmetic brand</p>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li>
                            <p><b>OUR PAGES</b></p>
                        </li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="collection.php">Collection</a></li>
                        <li><a href="https://wa.me/6281808228020">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li>
                            <p><b>OUR TEAM</b></p>
                        </li>
                        <li>
                            <p>Muhammad Fadhillah Akbar</p>
                        </li>
                        <li>
                            <p>Indah Ayu Kusumaningrum</p>
                        </li>
                        <li>
                            <p>M. Jullian Rifigo</p>
                        </li>
                        <li>
                            <p>Cecylia Putri Gianti</p>
                        </li>
                        <li>
                            <p>Nur Azmi Amrulloh</p>
                        </li>
                        <li>
                            <p>Daniel Hidayatullah</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md text-md-center">
                    <ul class="social list-unstyled">
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                        <li><a href="#"><span class="icon-dribbble"></span></a></li>
                    </ul>
                    <p class=""><a href="https://wa.me/6281808228020" class="btn btn-tertiary">Contact Us</a></p>
                </div>
            </div>

            <div class="row ">
                <div class="col-12 text-center">
                    <div class="copyright mt-3 mb-2 pt-5">
                        <p><small>&copy; Jennyhouse</small></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- Akhir About -->
    <!-- Footer -->
    <footer>
        <p>Jennyhouse - All Right Reserved</p>
    </footer>
    <!-- Akhir Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>