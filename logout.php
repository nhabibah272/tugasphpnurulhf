<?php
session_start();
require_once('required/auth.php');

onlyAdmin();

unset($_SESSION['is_login']);
unset($_SESSION['username']);

header('location:login.php?login=sukses');
exit;