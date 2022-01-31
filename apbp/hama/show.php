<!DOCTYPE html>
<html lang="en">

<head>

    <title>KELOMPOK TANI</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../penyuluh/css/style.css">
</head>

<body>

    <form action="../hama/creat.php " method="post">
        <center>
            <div class="container">
                <h2>BPP PEBAYURAN</h2>
                <fieldset>
                    <h3>Data Bantuan</h3>
                    <table class="table table-striped table-middle">
                        <tr>
                            <th width="20%"><label>Nama Hama</label> </th>
                            <td width="1%">:</td>
                            <td><input type="text" class="form-control" name="nama_hama" required></td>
                        </tr>
                        <tr>
                            <th>
                                <label>Jenis Hama</label>
                            </th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="jenis_hama" required></td>
                        </tr>
                        <tr>
                            <th><label>Penanganan</label></th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="penanganan" required></td>
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
    </form>

</body>

</html>