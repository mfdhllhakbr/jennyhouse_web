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
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="../functions/style.css">
    <title>Jennyhouse | About Us</title>
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
                        <a class="nav-link" href="collection.php">Collection</a>
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
    <!-- Jumbotron -->
    <section>
        <div class="jumbo3 position-relative text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Beauty Salon</h1>
                <br><br>
                <p class="lead fw-normal">
                    Located in Cheongdam-dong, Beauty Salon "Jenny House" operates two branches of Cheongdam Hill and
                    Primo directly. For the past 18 years Jenny House has offered the most illuminating moments to the
                    Korean glamour industry by giving the best professional services and products to beautify the skin
                    of tens of thousands women and men including more than 1,000 celebrities and half a million
                    customers.
                </p>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </section>
    </section>
    <section>
        <div class="jumbo1 position-relative text-center">
            <div class="col-md-7 p-lg-2 mx-auto my-5">
                <h1 class="display-4 fw-normal">“The best skin condition for creating a perfect makeup look”</h1>
                <br><br><br><br><br><br>
            </div>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </section>
    <section>
        <div class="jumbo3 position-relative text-center">
            <div class="col-md-7 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">ACHIEVEMENTS</h1>
                <br><br>
                <p class="lead fw-normal">
                THE BEST HAIR & MAKEUP TEAMS IN KOREA
                </p><br>
                <p class="lead fw-normal">
                HAIR & MAKEUP ARTISTS FOR WORLD STARS VISITING KOREA
                </p><br>
                <p class="lead fw-normal">
                CURRENTLY IN CHARGE OF DOING HAIR & MAKEUP FOR 600 KOREAN CELEBRITIES
                </p>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </section>
    <!-- Akhir Jumbotron -->
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>