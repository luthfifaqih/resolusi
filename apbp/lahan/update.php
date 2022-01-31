<?php

session_start();
include "../config/koneksi.php";
$id = $_POST["id_tanah"];
$desa = $_POST["desa"];
$jt = $_POST["jenis_tanah"];
$lbl = $_POST["lbl"];


$query = "UPDATE lahan SET desa='$desa',jenis_tanah='$jt',lbl='$lbl' where id_tanah='$id'";

if (mysqli_query($conn, $query)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
