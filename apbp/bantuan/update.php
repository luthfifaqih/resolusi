<?php

session_start();
include "../config/koneksi.php";
$id = $_POST["id_bantuan"];
$nama = $_POST["nama_kel"];
$alamat = $_POST["alamat"];
$jb = $_POST["jenis_bantuan"];
$prd = $_POST["priode"];
$kt = $_POST["keterangan"];


$query = "UPDATE bantuan SET nama_kel='$nama',alamat='$alamat',jenis_bantuan='$jb',priode='$prd',keterangan='$kt' where id_bantuan='$id'";

if (mysqli_query($conn, $query)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
