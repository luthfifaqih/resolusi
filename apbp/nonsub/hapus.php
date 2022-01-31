<?php
include "../config/koneksi.php  ";
$id = $_GET['id_pupuk'];
echo $id;
$query = "DELETE FROM nonsub  WHERE id_pupuk=$id";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header("Location:index.php");
    exit;
} else {
    echo "hapus data gagal";
}
