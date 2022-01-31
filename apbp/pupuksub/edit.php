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

                    <h2>PUPUK NON SUBSIDI</h2><br>
                    <?php

                    include "../config/koneksi.php";
                    $id = $_GET['id_pupuk'];
                    $query = mysqli_query($conn, "SELECT * FROM pupuksub WHERE id_pupuk=$id");
                    while ($data = mysqli_fetch_array($query)) {


                    ?>

                        <fieldset>
                            <h3>Data Bantuan</h3>
                            <table class="table table-striped table-middle">
                                <tr>
                                    <th width="20%"><label>Jenis Pupuk</label> </th>
                                    <td width="1%">:</td>
                                    <input type="hidden" name="id_pupuk" value="<?php echo $id ?>">
                                    <td><input type="text" class="form-control" name="jenis_pupuk" value="<?php echo $data['jenis_pupuk'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label>Kandungan</label>
                                    </th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="kandungan" value="<?php echo $data['kandungan'] ?>" required></td>
                                </tr>
                                <tr>
                                    <th><label>Harga</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>" required></td>
                                </tr>


                            </table>
                            <br>
                            <center>
                                <a href="../pupuksub/index.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
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