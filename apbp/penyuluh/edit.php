<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>BPP PEBAYURAN</title>
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="../gapoktan/css/style.css">
    </head>

    <body>

        <form action="update.php" method="post">
            <center>
                <div class="container">

                    <h2>DATA PENYULUH</h2><br>
                    <?php

                    include "../config/koneksi.php";
                    $id = $_GET['id_penyuluh'];
                    $query = mysqli_query($conn, "SELECT * FROM penyuluh WHERE id_penyuluh=$id");
                    while ($data = mysqli_fetch_array($query)) {


                    ?>

                        <fieldset>
                            <h3>PENYULUH</h3>
                            <table class="table table-striped table-middle">
                                <tr>
                                    <th width="20%"><label>Nama Penyuluh</label> </th>
                                    <td width="1%">:</td>
                                    <input type="hidden" name="id_penyuluh" value="<?php echo $id ?>">
                                    <td><input type="text" class="form-control" name="nama_penyuluh" value="<?php echo $data['nama_penyuluh'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label>Jabatan</label>
                                    </th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jabatan_penyuluh" value="<?php echo $data['jabatan_penyuluh'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th><label>Daerah Penyuluhan</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="desa" value="<?php echo $data['desa'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th><label>Kontak Penyuluh</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="kontak" value="<?php echo $data['kontak'] ?>" required></td>
                                </tr>


                            </table>
                            <br>
                            <center>
                                <a href="../nonsub/index.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
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