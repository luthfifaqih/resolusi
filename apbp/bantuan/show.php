<!DOCTYPE html>
<html lang="en">

<head>

    <title>KELOMPOK TANI</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../penyuluh/css/style.css">
</head>

<body>

    <form action="../bantuan/creat.php " method="post">
        <center>
            <div class="container">
                <h2>BPP PEBAYURAN</h2>
                <fieldset>
                    <h3>Data Bantuan</h3>
                    <table class="table table-striped table-middle">
                        <tr>
                            <th width="20%"><label>Nama Kelurahan</label> </th>
                            <td width="1%">:</td>
                            <td><input type="text" class="form-control" name="nama_kel" required></td>
                        </tr>
                        <tr>
                            <th>
                                <label>Alamat</label>
                            </th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="alamat" required></td>
                        </tr>
                        <tr>
                            <th><label>Jenis Bantuan</label></th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="jenis_bantuan" required></td>
                        </tr>

                        <th><label>Priode Penerimaan</label> </th>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="priode" required></td>
                        </tr>
                        <th><label>Keterangan</label> </th>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="keterangan" required></td>
                        </tr>

                    </table>
                    <br>
                    <center>
                        <a href="../bantuan/index.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
                        <button type="submit" class="bx bxs-save"> Simpan</button>
                    </center>
            </div>
        </center>
        </fieldset>
    </form>

</body>

</html>