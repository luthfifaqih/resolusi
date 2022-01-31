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

            <form action="../gapoktan/creat.php" method="post">
                <center>
                    <div class="container">

                        <h2>BPP PEBAYURAN</h2><br>


                        <fieldset>
                            <h3>Data Anggota</h3>

                            <table class="table">
                                <tr>
                                    <th width="20%"><label>Nama Anggota</label> </th>
                                    <td width="1%">:</td>
                                    <td><input type="text" class="form-control" name="nama_anggota" required></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label>Tanggal Lahir</label>
                                    </th>
                                    <td>:</td>
                                    <td><input type="date" class="date" name="lahir" required></td>
                                </tr>
                                <tr>
                                    <th><label>Alamat</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="alamat" required></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label>jenis Kelamin </label>
                                    </th>
                                    <td>:</td>
                                    <td>
                                        <select class=" select" name="jenis_kelamin">
                                            <option value="#">-pilih-</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>

                                        </select>
                                    </td>



                                </tr>
                                <tr>
                                    <th><label>Usia</label></th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="jenjang_usia" required></td>
                                </tr>

                            </table>
                            <h3>Data Gapoktan</h3>
                            <table class="table table-striped table-middle">
                                <tr>
                                    <th width="20%"><label>Nama Gapoktan</label> </th>
                                    <td width="1%">:</td>
                                    <td><input type="text" class="form-control" name="nama_gapoktan" required></td>
                                </tr>
                                <tr>
                                    <th><label>Desa</label> </th>
                                    <td>:</td>
                                    <td><input type="text" class="form-control" name="nama_desa" required></td>
                                </tr>
                                <tr>
                                    <th>
                                        <label>jabatan </label>
                                    </th>
                                    <td>:</td>

                                    <td><select class=" select" name="jabatan">
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


        </body>

        </html>
    <?php
    } else {
        header("Location:../index.php");
        exit();
    }
    ?>