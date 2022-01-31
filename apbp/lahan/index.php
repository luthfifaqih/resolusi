<!DOCTYPE html>
<html lang="en">

<head>

    <title>KELOMPOK TANI</title>

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../gapoktan/css/style2.css  ">
</head>
<form action="" method="get" class="cari">


    <input type="text" name="cari" class="search" placeholder="cari" autocomplete="off">
    <input type="submit" value="Cari" class="button">
</form>

<body>
    <h2>KELOMPOK TANI</h2>


    <table class="table" id="lahan">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Desa</th>
                <th>Jenis Tanah</th>
                <th>Luas Baku Lahan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        session_start();
        include "/laragon/www/apbp/config/koneksi.php";
        $id = (!isset($_GET['cari']) ? "" : $_GET['cari']);

        //cari & tampil
        if ($id == '') {
            $query = mysqli_query($conn, "SELECT * FROM lahan");
        } else {
            $query = mysqli_query($conn, "SELECT * FROM lahan where desa like  '%" . $id . "%'");
        }
        $no = 1;

        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['desa'] ?></td>
                <td><?php echo $data['jenis_tanah'] ?></td>
                <td><?php echo $data['lbl'] ?></td>
                <td>
                    <a href="edit.php?id_tanah=<?php echo $data['id_tanah'] ?>"> <button type="button" class='bx bxs-edit-alt'>Edit</button></a>
                    <a href="hapus.php?id_tanah=<?php echo $data['id_tanah'] ?>"> <button type="button" class='bx bxs-trash-alt'>Hapus</button></a>
                </td>
            </tr>
        <?php } ?>
    </table><br><br>
    <a href="../dashboard.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
    <a href="../lahan/show.php"><button type="button" class="bx bxs-file-plus"> tambah</button></a>
    <br><br><br>
    <div class="tb">

        <td>Total Anggota</td><br>
        <td><?php $jumlah = mysqli_num_rows($query); ?>
            <?php echo $jumlah; ?> orang</td>
        </td><br>
</body>

</html>