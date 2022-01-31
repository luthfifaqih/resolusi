<?php
session_start();
include "../bpp3/config/koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$role = $_POST["role"];

$query_sql = "INSERT INTO user (username, password, email, role) 
VALUES ('$username', '$password', '$email', '$role')";

if (mysqli_query($conn, $query_sql)) {
    header("location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
