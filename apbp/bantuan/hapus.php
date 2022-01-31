<?php
include "../config/koneksi.php";
$id = $_GET['id_bantuan'];
echo $id;
$query = "DELETE FROM bantuan WHERE id_bantuan=$id";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header("Location:index.php");
    exit;
} else {
    echo "hapus data gagal";
}
