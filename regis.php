<?php
session_start();
require_once('required/database.php');
require_once('required/auth.php');

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tabel_user (fullname, username, email, password)
VALUES ('$fullname', '$username', '$email', '$password')";

if (mysqli_query($connectDb, $query_sql)) {
    header("Location:regis.php");
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
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
    <title>Register Page</title>
</head>
<body>
    <div class="input">
        <h1>REGISTER</h1>
        <form action="regis.php" method="POST">
        <div class="box-input">
            <i class="fa-regular fa-user"></i>
            <label for="fullname"></label>
            <input type="text" id="fullname" placeholder="Fullname" name="fullname" required>
        </div>
        <div class="box-input">
            <i class="fas fa-address-book"></i>
            <label for="username"></label>
            <input type="text" id="username" placeholder="Username" name="username" required>
        </div>
        <div class="box-input">
            <i class="fas fa-envelope-open-text"></i>
            <label for="email"></label>
            <input type="text" id="email" placeholder="Email" name="email" required>
        </div>
        <div class="box-input">
            <i class="fas fa-lock"></i>
            <label for="password"></label>
            <input type="password" id="password" placeholder="Password" name="password" required>
        </div>
        <form id="registerForm" onsubmit="return validateForm()" action="portofolio.php">           
            <button type="submit" name="register" class="btn-input">Register</button>
        </form>
        <script>
            function validateForm() {
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;
                var username = document.getElementById('username').value;

    
                if (email.trim() === '' || password.trim() === '' || username.trim() === '') {
                    alert('Harap isi kolom yang kosong.');
                    return false;
                }

                return true;
            }
        </script>
        <div class="bottom">
            <p>Sudah punya akun?
                <a href="login.php">Login disini</a>
            </p>
        </div>
        </form>
    </div>
</body>
</html>