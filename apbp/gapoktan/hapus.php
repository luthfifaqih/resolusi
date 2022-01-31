<?php
include "../config/koneksi.php  ";
$id = $_GET['id_anggota'];
echo $id;
$query = "DELETE FROM gapoktan  WHERE id_anggota=$id";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header("Location:index.php");
    exit;
} else {
    echo "hapus data gagal";
}
