<?php
require "../functions/functions.php";
session_start();
if (!isset($_SESSION["login"])) {
  header("Location:login.php");
}
$shoes = query("SELECT * FROM products");
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

    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- My CSS -->
    <link rel="stylesheet" href="../functions/style.css">
    <link rel="stylesheet" href="collection.css">
    <title>Jennyhouse | Collection</title>
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
                        <a class="nav-link" href="index.php" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="collection.php" style="color: #FB2E86;">Collection</a>
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
    <!-- Produk -->
    <div class="container">
        <div class="form-group">
            <div class="input-group col mb-2 mt-2">
                <form class="d-flex col" action="" method="">
                    <span class="input-group-text" id="addon-wrapping">Search</span>
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                        name="search_text" id="search_text">
                </form>
            </div>
        </div>
        <div class="container-xxl">
            <div class="">
                <div id="result" class=""></div>
            </div>
        </div>
    </div>
    </div>
    <!-- Akhir Produk -->
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

    <!-- Akhir Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function () {

            load_data();

            function load_data(query) {
                $.ajax({
                    url: "ambil.php",
                    method: "POST",
                    data: {
                        query: query
                    },
                    success: function (data) {
                        $('#result').html(data);
                    }
                });
            }
            $('#search_text').keyup(function () {
                var search = $(this).val();
                if (search != '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });
        });
    </script>
</body>

</html>