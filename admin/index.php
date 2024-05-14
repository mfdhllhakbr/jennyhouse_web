<?php
require "../functions/functions.php";
session_start();

if (!isset($_SESSION["username"])) {
    header("location: login-admin.php");
}
$query = "SELECT * FROM transaction WHERE NOT (status = 'Terverifikasi' OR status = 'Ditolak') ";
$res = mysqli_query($conn, $query);

while ($result = mysqli_fetch_assoc($res)) {
    $results[] = $result;
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
                        <a class="nav-link active" aria-current="page" href="index.php"
                            style="color: #FB2E86;">Verification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dataorder.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link">|</a>
                    </li>
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
            <h1>Admin Dashboard</h1>
            <p>Payment Verification</p>
        </div>
    </section>
    <!-- Akhir Header -->
    <!-- TRANSAKSI -->
    <table class="table mt-4">
        <?php if (!empty($results)) : ?>
        <thead>
            <tr>
                <th scope="col">Transid</th>
                <th scope="col">User</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Address</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Status</th>
                <th scope="col">Transfer Proof</th>
                <th scope="col">Transction Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $trans) : ?>
            <tr>
                <td><?php echo $trans["transactionid"] ?></td>
                <td><?php echo $trans["userid"] ?></td>
                <td><?php echo $trans["nama_penerima"] ?></td>
                <td><?php echo $trans["jumlah"] ?></td>
                <td><?php echo $trans["harga"] ?></td>
                <td><?php echo $trans["alamat_pengiriman"] ?></td>
                <td><?php echo $trans["notelepon"] ?></td>
                <td><?php echo $trans["status"] ?></td>
                <td><img class="img-thumbnail" src="../buktitransfer/<?php echo $trans["buktitransfer"] ?>" alt=""></td>
                <td><?php echo $trans["tanggaltrans"] ?></td>
                <td>
                    <a class="link-danger"
                        href="verifikasi-trans.php?transid=<?php echo $trans["transactionid"] ?>">Verifikasi</a>
                    <a class="link-danger"
                        href="reject-trans.php?transid=<?php echo $trans["transactionid"] ?>">Reject</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <?php else : ?>
        <h4 class="" align="center">Tidak Ada Data Transaksi Yang Harus Diverifikasi</h4>
        <?php endif; ?>
    </table>
    <!-- AKHIR TRANSAKSI -->
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