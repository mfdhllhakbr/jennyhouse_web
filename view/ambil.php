<?php
//fetch.php

$connect = mysqli_connect("localhost", "root", "", "jennyhousedb");
$output = '';
if (isset($_POST["query"])) {
  $search = mysqli_real_escape_string($connect, $_POST["query"]);
  $query = "
  SELECT * FROM products 
  WHERE nama_produk LIKE '%" . $search . "%'
  OR merek_produk LIKE '%" . $search . "%' 
  OR harga_produk LIKE '%" . $search . "%' 
  OR kategori_produk LIKE '%" . $search . "%' 
 ";
} else {
  $query = "
  SELECT * FROM products ORDER BY nama_produk
 ";
}
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
?>

<div class="row">
    <?php
  foreach ($result as $row) {
    echo '
    <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                <img src="../img/' . $row['gambar_produk'] . '" class="w-100" />
                <a href="product.php?id=' . $row['productid'] . '">
                    <div class="mask">
                    </div>
                    <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                </a>
            </div>
            <div class="card-body">
                <a href="product.php?id=' . $row['productid'] . '" class="text-reset">
                    <h5 class="card-title mb-3">' . $row['nama_produk'] . '</h5>
                </a>
                <p>Categori : '. $row['kategori_produk'] .'</p>
                <p>Net : '. $row['ukuran_produk'] .'</p>
                <p>Stock : '. $row['stock_produk'] .'</p>
                <p class="mb-3"><b>Rp.' . number_format($row['harga_produk']) . '</b></p>
            </div>
        </div>
    </div>
    ';
  }
?>
</div>

<?php
} else {
  echo '<h4 class="pt-4 pb-5" align="center" >Shoes Not Found</h4>';
}
?>

<!-- <div class="card mb-3 mt-4" style="max-width: 540px; background: #FB2E86;" >
    <div class="row no-gutters">
    <div class="col-md-4 mt-5">
        <img src="../img/' . $row['gambar_produk'] . '" class="card-img" alt="">
    </div>
        <div class="col-md-8">
        <div class="card-body">
        <h5 class="card-title">' . $row['nama_produk'] . '</h5>
        <p class="card-text">Rp.' . number_format($row['harga_produk']) . '</p>
        <p class="card-text">Kategori : ' . $row['kategori_produk'] . '</p>
        <p class="card-text">Size : ' . $row['ukuran_produk'] . '</p>
        <p class="card-text">Stock : ' . $row['stock_produk'] . '</p>
        <a href="product.php?id=' . $row['productid'] . '" class="btn btn-primary">Order</a>
        </div>
    </div>
    </div>
</div> -->