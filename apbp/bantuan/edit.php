<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>KELOMPOK TANI</title>
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="../gapoktan/css/style.css">
    </head>

    <body>

        <form action="update.php" method="post">
            <center>
                <div class="container">

                    <h2>BPP PEBAYURAN</h2><br>
                    <?php

                    include "../config/koneksi.php";
                    $id = $_GET['id_bantuan'];
                    $query = mysqli_query($conn, "SELECT * FROM bantuan WHERE id_bantuan=$id");
                    while ($data = mysqli_fetch_array($query)) {


                    ?>

                        <fieldset>
                            <h3>Data Bantuan</h3>
                            <table class="table table-striped table-middle">
                                <tr>
                                    <th width="20%"><label>Nama Kelurahan</label> </th>
                                    <td width="1%">:</td>
                                    <input type="hidden" name="id_bantuan" value="<?php echo $id ?>">
                                    <td><input type="text" class="form-control" name="nama_kel" value="<?php echo $data['nama_kel'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label>Alamat</label>
                                    </th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th><label>Jenis Bantuan</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jenis_bantuan" value="<?php echo $data['jenis_bantuan'] ?>" required></td>
                                </tr>

                                <th><label>Priode Penerimaan</label> </th>
                                <td>:</td>
                                <td><input type="text" class="form-control" name="priode" value="<?php echo $data['priode'] ?>" required></td>
                                </tr>

                                <th><label>Keterangan</label> </th>
                                <td>:</td>
                                <td><input type="text" class="form-control" name="keterangan" value="<?php echo $data['keterangan'] ?>" required></td>
                                </tr>

                            </table>
                            <br>
                            <center>
                                <a href="../penyuluh/index.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
                                <button type="submit" class="bx bxs-save"> Simpan</button>
                            </center>
                </div>
            </center>
            </fieldset>
            </div>
            </center>
        </form>
    <?php } ?>

    </body>

    </html>
<?php
} else {
    header("Location:../index.php");
    exit();
}
?>