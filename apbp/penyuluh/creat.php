<?php

session_start();
include "../config/koneksi.php";

$nama = $_POST["nama_penyuluh"];
$jbt = $_POST["jabatan_penyuluh"];
$daerah = $_POST["desa"];
$ktk = $_POST["kontak"];


$query_sql = "INSERT INTO penyuluh ( nama_penyuluh,jabatan_penyuluh, desa ,kontak) 
VALUES ( '$nama','$jbt', '$daerah','$ktk')";

if (mysqli_query($conn, $query_sql)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
