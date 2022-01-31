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

                    <h2>LAHAN</h2><br>
                    <?php

                    include "../config/koneksi.php";
                    $id = $_GET['id_tanah'];
                    $query = mysqli_query($conn, "SELECT * FROM lahan WHERE id_tanah=$id");
                    while ($data = mysqli_fetch_array($query)) {


                    ?>

                        <fieldset>
                            <h3>Data Bantuan</h3>
                            <table class="table table-striped table-middle">
                                <tr>
                                    <th width="20%"><label>Desa</label> </th>
                                    <td width="1%">:</td>
                                    <input type="hidden" name="id_tanah" value="<?php echo $id ?>">
                                    <td><input type="text" class="form-control" name="desa" value="<?php echo $data['desa'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label>Jenis Tanah</label>
                                    </th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jenis_tanah" value="<?php echo $data['jenis_tanah'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th><label>Luas Baku Lahan</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="lbl" value="<?php echo $data['lbl'] ?>" required></td>
                                </tr>


                            </table>
                            <br>
                            <center>
                                <a href="../lahan/index.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
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