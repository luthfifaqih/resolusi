<?php

session_start();
include "../config/koneksi.php";

$anggota = $_POST["nama_anggota"];
$lhr = $_POST["lahir"];
$alm = $_POST["alamat"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$usia = $_POST["jenjang_usia"];
$gapoktan = $_POST["nama_gapoktan"];
$desa = $_POST["nama_desa"];
$jbt = $_POST["jabatan"];


$query_sql = "INSERT INTO gapoktan ( nama_anggota,lahir, alamat ,jenis_kelamin,jenjang_usia,nama_gapoktan,nama_desa,jabatan) 
VALUES ( '$anggota','$lhr', '$alm','$jenis_kelamin','$usia','$gapoktan','$desa','$jbt')";

if (mysqli_query($conn, $query_sql)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
