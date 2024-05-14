<?php
require "../functions/functions.php";
session_start();
$username = $_SESSION["username"];
$quantity = (int)$_SESSION['order-quantity'];

$productid = $_GET["pid"];
$shoes = query("SELECT * FROM products WHERE productid = '$productid'");
$userdata = query("SELECT * FROM users WHERE username = '$username'");
$_POST['stock_produk'] = $shoes[0]['stock_produk'];

//total harga
$hargaProduk = (int)$shoes[0]["harga_produk"];
$totalHarga = $hargaProduk * $quantity;

$_POST['sisa-quantity'] = $_POST['stock_produk'] - $quantity;

if (isset($_POST['order'])) {
    $_SESSION['transid'] = order($_POST);
    header("Location: payment.php");
    $_SESSION["nama_produk"] = $shoes[0]["nama_produk"];
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
    <title>Jennyhouse | Order</title>
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
            <h1>Order</h1>
            <p>Please fill in the data for delivery!</p>
        </div>
    </section>
    <!-- Akhir Header -->
    <!-- Order -->
    <div class="container-sm w-50 mt-3 mb-3">
        <form action="" method="POST">
            <input type="hidden" name="quantity" value="<?php echo $quantity ?>">
            <input type="hidden" name="id" value="<?php echo $userdata[0]["userid"] ?>">
            <input type="hidden" name="productid" value="<?php echo $shoes[0]["productid"] ?>">
            <input type="hidden" name="harga_produk" value="<?php echo $totalHarga ?>">
            <div class="mb-3">
                <p class="fs-3"><?php echo $shoes[0]["nama_produk"]; ?> </p>
                <p class="fs-3">Price Rp.<?php echo number_format($totalHarga); ?></p>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" value="<?php echo $userdata[0]["email"] ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control" id="nama-user" name="nama"
                    value="<?php echo $userdata[0]["nama"] ?>">
            </div>
            <div class="mb-3">
                <label for="nomortelp" class="form-label">No. Telp</label>
                <input type="text" class="form-control" id="nomortelp" name="nomortelp" value="">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Address</label>
                <textarea class="form-control" id="alamat-user" name="alamat"
                    rows="3"><?php echo $userdata[0]['alamat']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3 border-0" style="background: #FB2E86;"
                name="order">Order</button>
        </form>
    </div>
    <!-- Akhir Order -->
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

</body>

</html>