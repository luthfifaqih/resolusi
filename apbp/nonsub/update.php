<?php

session_start();
include "../config/koneksi.php";
$id = $_POST["id_pupuk"];
$jnp = $_POST["jenis_pupuk"];
$knd = $_POST["kandungan"];
$har = $_POST["harga"];


$query = "UPDATE nonsub SET jenis_pupuk='$jnp',kandungan='$knd',harga='$har' where id_pupuk='$id'";

if (mysqli_query($conn, $query)) {
    header("Location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
