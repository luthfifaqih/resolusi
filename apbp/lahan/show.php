<!DOCTYPE html>
<html lang="en">

<head>

    <title>LAHAN</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../gapoktan/css/style.css">
</head>

<body>

    <form action="../lahan/creat.php" method="post">
        <center>
            <div class="container">

                <h2>BPP PEBAYURAN</h2><br>


                <fieldset>
                    <h3>Data Lahan</h3>

                    <table class="table">
                        <tr>
                            <th width="20%"><label>Nama Desa</label> </th>
                            <td width="1%">:</td>
                            <td><input type="text" class="form-control" name="desa" required></td>
                        </tr>
                        <tr>
                            <th><label>Jenis Tanah</label></th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="jenis_tanah" required></td>
                        </tr>
                        <tr>
                            <th><label>Luas Baku Lahan</label></th>
                            <td>:</td>
                            <td><input type="text" class="form-control" name="lbl" required></td>
                        </tr>


                    </table>
                    <br>
                    <a href="../lahan/index.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
                    <button type="submit" class="bx bxs-save"> Simpan</button>
                </fieldset>
            </div>
        </center>
    </form>


</body>

</html>