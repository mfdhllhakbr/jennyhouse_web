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
    <title>Jennyhouse | Home</title>
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
                        <a class="nav-link active" aria-current="page" href="index.php" style="color: #FB2E86;">Home</a>
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
    <section class="jumbotron position-relative">
        <div class="row g-0">
            <div class="col-sm-6 col-md-8">
                <div class="row">
                    <div class="col-sm-6 ms-5">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <br><br>
                                <p><img src="../img/SPS.png" alt=""></p>
                                <p align="center" class="card-title">You were meant to be where the spotlight shines</p>
                                <br><br>
                                <h3 class="card-text">
                                    Discover Your Beauty Way Now!
                                </h3>
                                <a href="collection.php" class="btn"
                                    style="background-color: #fb2e86; color: #ffff">Collection</a><br><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="jpg container-xl position-absolute top-50 end-0 translate-middle-y">
                </div>
            </div>
        </div>
    </section>
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <section class="jumbotron1 position-relative text-center">
                    <div class="row g-0">
                        <div class="col-sm-6 col-md-8">
                            <div class="row">
                                <div class="col-sm-6 ms-5">
                                    <div class="card bg-transparent border-0">
                                        <div class="card-body">
                                            <h1 class="display-6 fw-normal">Reveal Your True Beauty</h1>
                                            <h6 class="lead fw-normal">The best skin condition for creating a perfect
                                                makeup look.</h6>
                                            <br><br>
                                            <p class="lead fw-normal">Since our foundation in 2002, Jenny House, with
                                                the largest number of top makeup artists in Korea, Jenny House Cosmetics
                                                is an all-Green grade natural derma cosmetic brand. All products are
                                                formulated with the finest natural ingredients and designed to give
                                                innovative dermatologic efficacies. Natural yet dermatologic, the two
                                                key concepts, are Maximized for Jenny House Cosmetics. Currently, Jenny
                                                House has existed in Indonesia to make it easier for our loyal customers
                                                to get our best products.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="jpg container-xl position-absolute top-50 end-0 translate-middle-y">
                                <a href="collection.php"><img src="../img/JH Gominsi.svg" width="100%"
                                        class="img-fluid float-end" alt="gominsi" /></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="carousel-item">
                <section>
                    <div class="jumbo0 position-relative text-center">
                        <div class="col-md-5 p-lg-5 mx-auto my-5">
                            <br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                        <div class="product-device shadow-sm d-none d-md-block"></div>
                        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                    </div>
                </section>
            </div>
            <div class="carousel-item">
                <section>
                    <div class="jumbo1 position-relative text-center">
                        <div class="col-md-5 p-lg-5 mx-auto my-5">
                            <br><br><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                        <div class="product-device shadow-sm d-none d-md-block"></div>
                        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                    </div>
                </section>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Akhir Carousel -->
    <!-- Jumbotron -->
    <section>
        <div class="jumbo2 position-relative text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">Self-Up Volume Care</h1>
                <br><br>
                <p class="lead fw-normal">You thought your hair looked impressively beautiful at Jennyhouse Salon. You
                    can bring Jennyhouse Salon home today to make your hair as beautiful as yesterday.
                </p>
                <a class="btn btn-outline-secondary" href="https://www.jennyhouse.id/id">
                    More Details
                </a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>
    </section>
    <section>
        <div class="jumbo3 text-center border-bottom">
            <h1 class="display-6 fw-bold">“The best skin condition for creating a perfect makeup look”</h1><br>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Great stories have a personality. Consider telling a great story that provides
                    personality. Writing a story with personality for potential clients will assist with making a
                    relationship connection. This shows up in small quirks like word choices or phrases. Write from your
                    point of view, not from someone else's experience.</p>
            </div><br><br>
            <div class="overflow-hidden" style="max-height: 100vh;">
                <div class="container px-5">
                    <img src="../img/minsi.gif" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image"
                        width="700" height="500" loading="lazy">
                </div>
            </div>
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