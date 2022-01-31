<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>DATA HARGA PUPUK</title>

        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="../gapoktan/css/style2.css  ">
    </head>

    <body>
        <h3>HARGA PUPUK SUBSIDI</h3>


        <table class="table" id="pupuksub">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Pupuk</th>
                    <th>Kandungann</th>
                    <th>Harga /kg</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php

            include "/laragon/www/apbp/config/koneksi.php";
            $no = 1;
            $query = mysqli_query($conn, 'SELECT * FROM pupuksub');
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['jenis_pupuk'] ?></td>
                    <td><?php echo $data['kandungan'] ?></td>
                    <td><?php echo $data['harga'] ?></td>


                    <td>
                        <a href="edit.php?id_pupuk=<?php echo $data['id_pupuk'] ?>"> <button type="button" class='bx bxs-edit-alt'>Edit</button></a>
                        <a href="hapus.php?id_pupuk=<?php echo $data['id_pupuk'] ?>"> <button type="button" class='bx bxs-trash-alt'>Hapus</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table><br><br>
        <a href="../dashboard.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
        <a href="../pupuksub/show.php"><button type="button" class="bx bxs-file-plus"> tambah</button></a>
        <br><br><br>
        <div class="tb">

            <td>Total Penyuluh</td><br>
            <td><?php $jumlah = mysqli_num_rows($query); ?>
                <?php echo $jumlah; ?> orang</td>
            </td><br>
    </body>

    </html>
<?php
} else {
    header("Location:../index.php");
    exit();
}
?>