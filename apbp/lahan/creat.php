<?php

session_start();
include "../config/koneksi.php";

$des = $_POST["desa"];
$jt = $_POST["jenis_tanah"];
$lahan = $_POST["lbl"];



$query_sql = "INSERT INTO lahan ( desa,jenis_tanah, lbl) 
VALUES ( '$des','$jt', '$lahan')";

if (mysqli_query($conn, $query_sql)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
