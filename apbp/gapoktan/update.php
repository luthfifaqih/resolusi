<?php

session_start();
include "../config/koneksi.php";

$id = $_POST["id_anggota"];
$anggota = $_POST["nama_anggota"];
$lhr = $_POST["lahir"];
$alm = $_POST["alamat"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$usia = $_POST["jenjang_usia"];
$gapoktan = $_POST["nama_gapoktan"];
$desa = $_POST["nama_desa"];
$jbt = $_POST["jabatan"];



$query = "UPDATE gapoktan SET nama_anggota='$anggota',lahir='$lhr',alamat='$alm',jenis_kelamin='$jenis_kelamin',jenjang_usia='$usia',nama_gapoktan='$gapoktan',nama_desa='$desa',jabatan='$jbt' where id_anggota='$id'";

if (mysqli_query($conn, $query)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
