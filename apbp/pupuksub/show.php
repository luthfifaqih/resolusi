<!DOCTYPE html>
<html lang="en">

<head>

    <title>KELOMPOK TANI</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../penyuluh/css/style.css">
</head>

<body>
    <form action="../pupuksub/creat.php " method="post">
        <center>
            <div class="container">
                <h3>Harga Pupuk</h3>
                <table class="table table-striped table-middle">
                    <tr>
                        <th width="20%"><label>Jenis Pupuk</label> </th>
                        <td width="1%">:</td>
                        <td><input type="text" class="form-control" name="jenis_pupuk" required></td>
                    </tr>
                    <tr>
                        <th><label>Kandungan Pupuk</label></th>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="kandungan" required></td>
                    </tr>
                    <tr>
                        <th><label>Harga Pupuk</label> </th>
                        <td>:</td>
                        <td><input type="text" class="form-control" name="harga" required></td>
                    </tr>

                </table>
                <br>
                <a href="../pupuksub/index.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
                <button type="submit" class="bx bxs-save"> Simpan</button>
            </div>
        </center>
        </fieldset>
    </form>

</body>

</html>