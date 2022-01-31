<?php

session_start();
include "../config/koneksi.php";

$nama = $_POST["nama_hama"];
$jh = $_POST["jenis_hama"];
$pn = $_POST["penanganan"];



$query_sql = "INSERT INTO hama ( nama_hama,jenis_hama, penanganan ) 
VALUES ( '$nama','$jh', '$pn ')";

if (mysqli_query($conn, $query_sql)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
