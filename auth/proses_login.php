<?php
session_start();
include "../config/db.php";

$username = $_POST['username'];
$password = md5($_POST['password']); // mengenkripsi password

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) === 1) {
    $_SESSION['login'] = true;
    header("Location: ../pages/dashboard.php");
} else {
    echo "Login gagal";
}
?>
