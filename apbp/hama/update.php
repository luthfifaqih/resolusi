<?php

session_start();
include "../config/koneksi.php";
$id = $_POST["id_hama"];
$nama = $_POST["nama_hama"];
$jh = $_POST["jenis_hama"];
$pn = $_POST["penanganan"];


$query = "UPDATE hama SET nama_hama='$nama',jenis_hama='$jh',penanganan='$pn' where id_hama='$id'";

if (mysqli_query($conn, $query)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
