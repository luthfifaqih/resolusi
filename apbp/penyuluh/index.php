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



        <table class="table" id="gapoktan">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Penyuluh</th>
                    <th>Jabatan</th>
                    <th>Daerah Penyuluhan</th>
                    <th>Kontak Penyuluh</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php

            include "../config/koneksi.php";
            $id = (!isset($_GET['cari']) ? "" : $_GET['cari']);

            if ($id == '') {
                $query = mysqli_query($conn, "SELECT * FROM penyuluh");
            } else {
                $query = mysqli_query($conn, "SELECT * FROM penyuluh where nama_penyuluh like '%" . $id . "%'");
            }

            $no = 1;

            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama_penyuluh'] ?></td>
                    <td><?php echo $data['jabatan_penyuluh'] ?></td>
                    <td><?php echo $data['desa'] ?></td>
                    <td><?php echo $data['kontak'] ?></td>

                    <td>
                        <a href="edit.php?id_penyuluh=<?php echo $data['id_penyuluh'] ?>"> <button type="button" class='bx bxs-edit-alt'>Edit</button></a>
                        <a href="hapus.php?id_penyuluh=<?php echo $data['id_penyuluh'] ?>"> <button type="button" class='bx bxs-trash-alt'>Hapus</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table><br><br>
        <a href="../dashboard.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
        <a href="../penyuluh/show.php"><button type="button" class="bx bxs-file-plus"> tambah</button></a>
        <br><br><br>
        <div class="tb">

            <td>Total Penyuluh</td><br>
            <td><?php $jumlah = mysqli_num_rows($query); ?>
                <?php echo $jumlah; ?> orang</td>
            </td><br>

    </body>

    </html><?php
        } else {
            header("Location:../index.php");
            exit();
        }
            ?>