<?php
session_start();
require_once('required/database.php');
require_once('required/auth.php');

if (checkLogin()) {
    header('location:login.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM tabel_user WHERE email = '{$email}' AND password = '{$password}'";
    $result = mysqli_query($connectDb, $query);
    $data = mysqli_fetch_array($result);

    if ($data) {
        $_SESSION['is_login'] = true;
        $_SESSION['user'] = $data;
        header('location:portofolio.php?status=sukses');
        exit;
    } else {
        header('location:login.php?status=gagal');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Login Page</title>
</head>
<body>
    <div class="input">
        <h1>LOGIN</h1>
        <form action="login.php" method="post">
        <div class="box-input">
            <i class="fas fa-envelope-open-text"></i>
            <label for="email"></label>
            <input type="text" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="box-input">
            <i class="fas fa-lock"></i>
            <label for="password"></label>
            <input type="password" id="password" placeholder="password" name="password" required>
        </div>
        <form id="loginForm" onsubmit="return validateForm()" action="login.php">           
            <button type="submit" name="login" class="btn-input">Login</button>
        </form>
        <script>
            function validateForm() {
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;
    
                if (email.trim() === '' || password.trim() === '') {
                    alert('Harap isi kolom email dan password.');
                    return false;
                }

                return true;
            }
        </script>
        <div class="bottom">
            <p>
                <a href="guestbook.php">Daftar Buku Tamu disini</a>
            </p>
        </div>
        </form>
    </div>
</body>
</html>