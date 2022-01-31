<?php
include "../config/koneksi.php  ";
$id = $_GET['id_penyuluh'];
echo $id;
$query = "DELETE FROM penyuluh  WHERE id_penyuluh=$id";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header("Location:index.php");
    exit;
} else {
    echo "hapus data gagal";
}
