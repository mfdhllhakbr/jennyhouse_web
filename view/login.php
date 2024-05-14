<?php
session_start();
require "../functions/functions.php";
if (isset($_POST["login"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

  //cek username
  if (mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      //set session
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["login"] = true;
      echo "<script>
                    alert(`Selamat Datang`);
                </script>";
      echo "<script>window.location.href = 'index.php';</script>";
      exit;
    } else {
      echo "<script>
                    alert(`Password atau Username Salah!`);
                </script>";
    }
  }
  $error = true;
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

    <title>Jennyhouse | Login</title>
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
            <h1>Log In</h1>
            <p>Before all you need to login first</p>
        </div>
    </section>
    <!-- Akhir Header -->
    <!-- Form -->
    <div class="container w-50 mt-3 mb-3" style="background: #F8F8FD;">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <p class="text-center mt-4 fs-6">You don't have account? <a href="register.php">Register</a></p>
            <button type="submit" class="btn btn-primary mt-3 mb-3 border-0" style="background: #FB2E86;"
                name="login">LogIn</button>
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