<?php
include "../config/koneksi.php  ";
$id = $_GET['id_tanah'];
echo $id;
$query = "DELETE FROM lahan  WHERE id_tanah=$id";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header("Location:index.php");
    exit;
} else {
    echo "hapus data gagal";
}
