<?php

session_start();
include "../config/koneksi.php";
$id = $_POST["id_penyuluh"];
$np = $_POST["nama_penyuluh"];
$jp = $_POST["jabatan_penyuluh"];
$des = $_POST["desa"];
$kntk = $_POST["kontak"];


$query = "UPDATE penyuluh SET nama_penyuluh='$np',jabatan_penyuluh='$jp',desa='$des',kontak='$kntk' where id_penyuluh='$id'";

if (mysqli_query($conn, $query)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
