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
                    $id = $_GET['id_hama'];
                    $query = mysqli_query($conn, "SELECT * FROM hama WHERE id_hama=$id");
                    while ($data = mysqli_fetch_array($query)) {


                    ?>

                        <fieldset>
                            <h3>Data Bantuan</h3>
                            <table class="table table-striped table-middle">
                                <tr>
                                    <th width="20%"><label>Nama Hama</label> </th>
                                    <td width="1%">:</td>
                                    <input type="hidden" name="id_hama" value="<?php echo $id ?>">
                                    <td><input type="text" class="form-control" name="nama_hama" value="<?php echo $data['nama_hama'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label>Jenis Hama</label>
                                    </th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jenis_hama" value="<?php echo $data['jenis_hama'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th><label>Penanganan</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="penanganan" value="<?php echo $data['penanganan'] ?>" required></td>
                                </tr>


                            </table>
                            <br>
                            <center>
                                <a href="../hama/index.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
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