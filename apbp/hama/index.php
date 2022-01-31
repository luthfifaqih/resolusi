<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {



?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>DATA PENYULUH</title>

        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="../gapoktan/css/style2.css  ">
    </head>

    <body>
        <form action="" method="get" class="cari">


            <input type="text" name="cari" class="search" placeholder="cari" autocomplete="off">
            <input type="submit" value="Cari" class="button">
        </form>
        <h3>DATA PENYULUH</h3>



        <table class="table" id="hama">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Hama</th>
                    <th>Jenis Hama</th>
                    <th>Cara Penanganan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php

            include "../config/koneksi.php";
            $id = (!isset($_GET['cari']) ? "" : $_GET['cari']);

            //cari & tampil
            if ($id == '') {
                $query = mysqli_query($conn, "SELECT * FROM hama");
            } else {
                $query = mysqli_query($conn, "SELECT * FROM hama where nama_hama like  '%" . $id . "%'");
            }

            $no = 1;

            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama_hama'] ?></td>
                    <td><?php echo $data['jenis_hama'] ?></td>
                    <td><?php echo $data['penanganan'] ?></td>

                    <td>
                        <a href="edit.php?id_hama=<?php echo $data['id_hama'] ?>"> <button type="button" class='bx bxs-edit-alt'>Edit</button></a>
                        <a href="hapus.php?id_hama=<?php echo $data['id_hama'] ?>"> <button type="button" class='bx bxs-trash-alt'>Hapus</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table><br><br>
        <a href="../dashboard.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
        <a href="../hama/show.php"><button type="button" class="bx bxs-file-plus"> tambah</button></a>
        <br><br><br>
        <div class="tb">

            <td>Total hama</td><br>
            <td><?php $jumlah = mysqli_num_rows($query); ?>
                <?php echo $jumlah; ?> Kelompok</td>
            </td><br>

    </body>

    </html><?php
        } else {
            header("Location:../index.php");
            exit();
        }
            ?>