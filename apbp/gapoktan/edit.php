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
                    $id = $_GET['id_anggota'];
                    $query = mysqli_query($conn, "SELECT * FROM gapoktan WHERE id_anggota=$id");
                    while ($data = mysqli_fetch_array($query)) {


                    ?>

                        <fieldset>
                            <h3>Data Anggota</h3>

                            <table class="table">
                                <tr>
                                    <th width="20%"><label>Nama Anggota</label> </th>
                                    <td width="1%">:</td>
                                    <input type="hidden" name="id_anggota" value="<?php echo $id ?>">
                                    <td><input type="text" class="form" name="nama_anggota" required value="<?php echo $data['nama_anggota']  ?> "></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label>Tanggal Lahir</label>
                                    </th>
                                    <td>:</td>
                                    <td><input type="date" class="date" name="lahir" required value="<?php echo $data['lahir'] ?> "></td>
                                </tr>
                                <tr>
                                    <th><label>Alamat</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="alamat" required value="<?php echo $data['alamat'] ?> "></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label>jenis Kelamin </label>
                                    </th>
                                    <td>:</td>
                                    <td>
                                        <select class=" select" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>">
                                            <option value="#">-pilih-</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>

                                        </select>
                                    </td>



                                </tr>
                                <tr>
                                    <th><label>Usia</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jenjang_usia" required value="<?php echo $data['jenjang_usia'] ?>"></td>
                                </tr>

                            </table>
                            <h3>Data Gapoktan</h3>
                            <table class="table table-striped table-middle">
                                <tr>
                                    <th width="20%"><label>Nama Gapoktan</label> </th>
                                    <td width="1%">:</td>
                                    <td><input type="text" class="form-control" name="nama_gapoktan" required value="<?php echo $data['nama_gapoktan'] ?>"></td>
                                </tr>
                                <tr>
                                    <th><label>Desa</label> </th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_desa" required value="<?php echo $data['nama_desa'] ?>"></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label>jabatan </label>
                                    </th>
                                    <td>:</td>

                                    <td><select class=" select" name="jabatan" value="<?php echo $data['jabatan'] ?>">
                                            <option value="#">-pilih-</option>
                                            <option value="ketua">ketua</option>
                                            <option value="sekretaris">sekretaris</option>
                                            <option value="bendahara">bendahara</option>
                                            <option value="anggota">anggota</option>
                                        </select>
                                    </td>



                                </tr>
                            </table>
                            <br>
                            <a href="../gapoktan/index.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
                            <button type="submit" class="bx bxs-save"> Simpan</button>
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