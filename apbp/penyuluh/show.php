<!DOCTYPE html>
<html lang="en">

<head>

    <title>KELOMPOK TANI</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../penyuluh/css/style.css">
</head>

<body>

    <form action="../penyuluh/creat.php " method="post">
        <center>
            <div class="container">
                <h2>BPP PEBAYURAN</h2>
                <fieldset>
                    <h3>Data penyuluh</h3>
                    <table class="table table-striped table-middle">
                        <tr>
                            <th width="20%"><label>Nama Penyuluh</label> </th>
                            <td width="1%">:</td>
                            <td><input type="text" class="form-control" name="nama_penyuluh" required></td>
                        </tr>
                        <tr>
                            <th>
                                <label>Jabatan</label>
                            </th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="jabatan_penyuluh" required></td>
                        </tr>
                        <tr>
                            <th><label>daerah Penyuluhan</label></th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="desa" required></td>
                        </tr>

                        <th><label>Kontak Penyuluh</label> </th>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="kontak" required></td>
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
    </form>

</body>

</html>