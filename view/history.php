<?php
require "../functions/functions.php";
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:login.php");
}
$username = $_SESSION["username"];
$transaksi = mysqli_query($conn, "SELECT transactionid,nama_penerima, products.nama_produk, harga, alamat_pengiriman, notelepon, buktitransfer,status, tanggaltrans
FROM transaction
INNER JOIN users ON users.userid = transaction.userid
INNER JOIN products ON products.productid = transaction.productid
WHERE users.username = '$username'
ORDER BY tanggaltrans");

$cek = mysqli_affected_rows($conn);

while ($riwayat = mysqli_fetch_assoc($transaksi)) {
    $his[] = $riwayat;
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
    <title>Jennyhouse | History</title>
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
                        <a class="nav-link active" aria-current="page" style="color: #FB2E86;"
                            href="history.php">History</a>
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
            <h1>Transaction History</h1>
            <p>Your Transaction History is Here!</p>
        </div>
    </section>
    <!-- Akhir Header -->
    <!-- History -->

    <div class="container-sm" style="padding: 6rem;">
        <div class="row align-items-start ">
            <div class="row">
                <div class="col border border-2">
                    Nama Penerima
                </div>
                <div class="col border border-2">
                    Nama Produk
                </div>
                <div class="col border border-2">
                    Harga
                </div>
                <div class="col border border-2">
                    Alamat Pengiriman
                </div>
                <div class="col border border-2">
                    No Telepon
                </div>
                <div class="col border border-2">
                    Status
                </div>
                <div class="col border border-2">
                    Tanggal Transaksi
                </div>
            </div>
            <?php if ($cek == 0) {
                echo "<h3 align='center' class='mt-5 mb-5'>Tidak Ada Data Transaksi</h3>";
            } else {
            ?>
            <?php foreach ($his as $history) : ?>
            <div class="row align-items-start ms-0 me-0 px-auto border-bottom border-2">
                <div class="col">
                    <?php echo $history["nama_penerima"] ?>
                </div>
                <div class="col">
                    <?php echo $history["nama_produk"] ?>
                </div>
                <div class="col">
                    <?php echo number_format($history["harga"]) ?>
                </div>
                <div class="col">
                    <?php echo $history["alamat_pengiriman"] ?>
                </div>
                <div class="col">
                    <?php echo $history["notelepon"] ?>
                </div>
                <?php if (empty($history["buktitransfer"]) && $history["status"] == "Proses Verifikasi") : ?>
                <div class="col">
                    <a
                        href="paymentconf.php?transid=<?php echo $history["transactionid"] ?>&nama_produk=<?php echo $history["nama_produk"] ?> ">
                        <p>Upload Bukti Transfer</p>
                    </a>
                </div>
                <?php else : ?>
                <div class="col">
                    <?php echo $history["status"] ?>
                </div>
                <?php endif; ?>
                <div class="col">
                    <?php echo $history["tanggaltrans"] ?>
                </div>
            </div>
            <?php endforeach; ?>
            <?php } ?>
        </div>
    </div>
    <!-- Akhir History -->
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