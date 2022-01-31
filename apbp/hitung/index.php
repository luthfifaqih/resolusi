<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>PERHITUNGAN BIAYA BUDIDAYA PADI</title>
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="../hitung/css/style.css">
    </head>

    <body>
        <center>
            <img src="../asset/kabbekasi.png" width="300px">
            <h3>Perhitungan Biaya (Per Hektar)</h3>
            <tr>

                <input type="" name="lahan" placeholder="masukkan luas lahan /Hektar" id="nilai1" autofocus>

            </tr> <br><br>
            <button type="submit" onclick="jumlah()" class="bx bx-calculator"> Hitung</button>
            <button type="submit" onclick="clear()" class="bx bx-trash" value="hapus"> Hapus</button>

            <p id="isi"></p>


            <script type="text/javascript">
                function jumlah() {

                    var satu = document.getElementById('nilai1').value;

                    var total = parseInt(satu) * parseInt(6780000 + 4695000 + 900000);
                    document.getElementById('isi').innerHTML = " Kalkulasi Biaya " + total;
                }

                function clear() {
                    document.getElementById("nilai1").value = "hapus";
                }
            </script>
        </center>
    </body>
    <center>
        <a href="../dashboard.php"><button type="button" class='bx bx-chevron-left'> kembali</button></a>
        <a href="../hitung/rincian.php"><button type="button" class="bx bxs-book-add"> Rincian</button></a>
    </center>

<?php
} else {
    header("Location:../index.php");
    exit();
}
?>