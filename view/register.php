<?php
require "../functions/functions.php";
if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo
    "<script>
				alert('user berhasil ditambahkan!');
			</script>";
    echo "<script>window.location.href = 'login.php';</script>";
  } else {
    echo mysqli_error($conn);
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

    <title>Jennyhouse | Register</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light text-center">
        <div class="container">
            <a class="navbar-brand" id="reg-header" href="../view/index.php"><img src="../img/Jennyhouse.png"
                    alt="Jenny House" width="20%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Header -->
    <section>
        <div class="container" id="reg-header">
            <h1>Register</h1>
            <p>Register your account to find your beauty</p>
        </div>
    </section>
    <!-- Akhir Header -->
    <!-- Form -->
    <div class="container w-50 mt-3 mb-3" style="background: #F8F8FD;">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="password2" id="password">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Address</label>
                <textarea class="form-control" id="alamat" rows="5" name="alamat"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3 border-0" style="background: #FB2E86;"
                name="register">Submit</button>
        </form>
    </div>
    <!-- Akhir Form -->
    <!-- Footer -->
    <div class="row ">
        <div class="col-12 text-center">
            <div class="copyright mt-3 mb-2 pt-5">
                <p><small>&copy; Jennyhouse</small></p>
            </div>
        </div>
    </div>
    </div>
    <!-- Akhir Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

</body>

</html>