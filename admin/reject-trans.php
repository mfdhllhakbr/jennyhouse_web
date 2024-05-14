<?php
require "../functions/functions.php";
session_start();
if (!isset($_SESSION["username"])) {
    header("location: login-admin.php");
}
$transid = $_GET['transid'];
$query = "SELECT transactionid,nama_penerima, products.nama_produk, harga, alamat_pengiriman,jumlah, notelepon, buktitransfer,status, tanggaltrans
FROM transaction
INNER JOIN users ON users.userid = transaction.userid
INNER JOIN products ON products.productid = transaction.productid
WHERE transactionid = $transid";
$res = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($res);

$jumlah = (int)$result["jumlah"];
$nama_produk = $result["nama_produk"];

if (isset($_POST["reject"])) {
    $update = "UPDATE `transaction` SET `status` = 'Ditolak' WHERE `transaction`.`transactionid` = $transid;";
    mysqli_query($conn, $update);
    if (mysqli_affected_rows($conn) > 0) {
        $rollbackstock = "UPDATE products SET `stock_produk` = (`stock_produk` + '$jumlah') WHERE `nama_produk` = '$nama_produk'";
        mysqli_query($conn, $rollbackstock);
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert(`Transaksi Berhasil Ditolak`);</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert(`Transaksi Gagal Ditolak`);</script>";
            echo "<script>window.location.href = 'index.php';</script>";
        }
    }
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
    <title>Jennyhouse | Admin</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" id="reg-header" href="../admin/index.php"><img src="../img/Jennyhouse.png"
                    alt="Jenny House" width="20%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-4 mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="logout-admin.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Header -->
    <section>
        <div class="container" id="reg-header">
            <h1>Payment Reject</h1>
        </div>
    </section>
    <!-- Akhir Header -->
    <!-- Verifikasi -->
    <div class="container w-50 mt-3 mb-3">
        <div class="input-group input-group-sm">
            <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
            <input class="form-control" type="text" value="<?php echo $result["nama_penerima"] ?>"
                aria-label="Disabled input example" disabled readonly>
        </div>
        <div class="input-group input-group-sm">
            <span class="input-group-text" id="inputGroup-sizing-sm">Product Name</span>
            <input class="form-control" type="text" value="<?php echo $result["nama_produk"] ?>"
                aria-label="Disabled input example" disabled readonly>
        </div>
        <div class="input-group input-group-sm">
            <span class="input-group-text" id="inputGroup-sizing-sm">Quantity</span>
            <input class="form-control" type="text" value="<?php echo $result["jumlah"] ?>"
                aria-label="Disabled input example" disabled readonly>
        </div>
        <div class="input-group input-group-sm">
            <span class="input-group-text" id="inputGroup-sizing-sm">Price</span>
            <input class="form-control" type="text" value="<?php echo $result["harga"] ?>"
                aria-label="Disabled input example" disabled readonly>
        </div>
        <div class="input-group input-group-sm">
            <span class="input-group-text" id="inputGroup-sizing-sm">No. Telp</span>
            <input class="form-control" type="text" value="<?php echo $result["notelepon"] ?>"
                aria-label="Disabled input example" disabled readonly>
        </div>
        <div class="input-group input-group-sm">
            <span class="input-group-text" id="inputGroup-sizing-sm">Address</span>
            <input class="form-control" type="text" value="<?php echo $result["alamat_pengiriman"] ?>"
                aria-label="Disabled input example" disabled readonly>
        </div>
        <div class="input-group input-group-sm">
            <span class="input-group-text" id="inputGroup-sizing-sm">Transaction Date</span>
            <input class="form-control" type="text" value="<?php echo $result["tanggaltrans"] ?>"
                aria-label="Disabled input example" disabled readonly>
        </div>
        <img src="../buktitransfer/<?php echo $result["buktitransfer"] ?>" class="rounded mx-auto d-block" alt="...">
        <form action="" method="POST">
            <button type="submit" class="btn btn-primary" name="reject">Reject</button>
        </form>

    </div>
    <!-- Akhir Verifikasi -->
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
                        <li><a href="#">About Us</a></li>
                        <li><a href="collection.php">Collection</a></li>
                        <li><a href="#">Contact</a></li>
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