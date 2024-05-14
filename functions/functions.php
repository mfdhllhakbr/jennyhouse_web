<?php
$conn = mysqli_connect("localhost", "root", "", "jennyhousedb");

function registrasi($data)
{
    global $conn;

    //menampung data ke variabel
    $nama = htmlspecialchars($data["nama"]);
    $username = strtolower(stripslashes($data["username"]));
    $email = htmlspecialchars($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $alamat = htmlspecialchars($data["alamat"]);


    //cek username sudah ada atau tidak
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('Username sudah terdaftar');
                </script>";
        return false;
    }
    //cek email
    $resultemail = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
    if (mysqli_fetch_assoc($resultemail)) {
        echo "<script>
            alert('Email sudah terdaftar');
        </script>";
        return false;
    }
    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                    alert('Konfirmasi password tidak sesuai');
                </script>";
        return false;
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user ke database
    mysqli_query($conn, "INSERT INTO users VALUES(NULL,'$nama','$email','$username','$password','$alamat')");

    return mysqli_affected_rows($conn);
}

function dataTransaksi($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

    return $rows;
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function order($dataOrder)
{
    // srock produk gak ngurang
    global $conn;
    $quantity = $dataOrder["quantity"];
    $stockProduk = $dataOrder["stock_produk"];

    $userid = $dataOrder["id"];
    $productid = $dataOrder["productid"];
    $harga = $dataOrder["harga_produk"];
    $nama = $dataOrder["nama"];
    $alamat = htmlspecialchars($dataOrder["alamat"]);
    $notelepon = htmlspecialchars($dataOrder["nomortelp"]);
    //$date = date('Y-m-d H:i:s');
    $defstatus = "Proses Verifikasi";
    $sisaStock = $_POST["sisa-quantity"];

    mysqli_query($conn, "UPDATE `products` set `stock_produk` = $sisaStock WHERE `productid` = $productid");

    $query = "INSERT INTO transaction VALUES(NULL, '$userid', '$productid', '$harga', '$quantity', '$nama', '$alamat', '', '$defstatus', '$notelepon',CURRENT_TIMESTAMP)";
    mysqli_query($conn, $query);
    $last_id = $conn->insert_id;

    return $last_id;
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
				alert('pilih gambar terlebih dahulu');
			</script>";
        return false;
    }

    //cek apakah yang diupload gambar 
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
				alert('yang anda upload bukan gambar');
			</script>";
        return false;
    }

    //cek jika ukuran terlalu besar paling besar 1mb
    if ($ukuranFile > 1000000) {
        echo "<script>
				alert('ukuran gambar terlalu besar');
			</script>";
        return false;
    }

    //lolos pengecekan gambar siap diupload
    //generate nama baru

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'buktitransfer/' . $namaFile);
    return $namaFile;
}
