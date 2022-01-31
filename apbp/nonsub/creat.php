<?php

session_start();
include "../config/koneksi.php";

$jns = $_POST["jenis_pupuk"];
$knd = $_POST["kandungan"];
$hrg = $_POST["harga"];



$query_sql = "INSERT INTO nonsub ( jenis_pupuk,kandungan, harga ) 
VALUES ( '$jns','$knd', '$hrg')";

if (mysqli_query($conn, $query_sql)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
