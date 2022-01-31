<?php

session_start();
include "../config/koneksi.php";

$nama = $_POST["nama_kel"];
$almt = $_POST["alamat"];
$jbt = $_POST["jenis_bantuan"];
$prd = $_POST["priode"];
$ket = $_POST["keterangan"];


$query_sql = "INSERT INTO bantuan ( nama_kel,alamat, jenis_bantuan ,priode,keterangan) 
VALUES ( '$nama','$almt', '$jbt','$prd ','$ket')";

if (mysqli_query($conn, $query_sql)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
