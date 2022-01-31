<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>BPP PEBAYURAN</title>
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>

        <div id="Sidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> &times;</a>

            <a href="../apbp/dashboard.php"><span class="bx bxs-book-alt"></span>
                <span>Dashboard</span></a>

            <a href="../apbp/hitung/index.php"><span class="bx bx-calculator"></span>
                <span>Hitung</span></a>

            <a href="../apbp/penyuluh/index.php"><span class="bx bxs-group"></span>
                <span>Penyuluh</span></a>

            <a href="../apbp/gapoktan/index.php"><span class="bx bxs-user-account"></span>
                <span>Kelompok Tani</span></a>

            <a href="../apbp/lahan/index.php"><span class="bx bxs-map-alt"></span>
                <span>Luas Lahan</span></a>

            <a href="../apbp/hama/index.php"><span class="bx bxs-bug"></span>
                <span>Hama</span></a>

            <a href="../apbp/bantuan/index.php"><span class="bx bxs-package"></span>
                <span>Bantuan</span></a>

            <a href="../apbp/pupuksub/index.php"><span class="bx bxs-tree"></span>
                <span>Pupuk Subsidi</span></a>

            <a href="../apbp/nonsub/index.php"><span class="bx bxs-tree"></span>
                <span>Pupuk Nonsubsidi</span></a>


            <a href="logout.php"><span class="bx bx-log-out"></span>
                <span>Logout</span></a>
        </div>

        <div id="main">

            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Dashboard</span>
            <div class="user">

                <?php echo $_SESSION['username']; ?>

            </div><br><br>
            <center>
                <div class="typing">
                    <h2>Selamat Datang Di BPP Pebayuran</h2>
                </div>

                <img src="../apbp/asset/kabbekasi.png" width="500px">

            </center>




            <script>
                function openNav() {
                    document.getElementById("Sidenav").style.width = "250px";
                    document.getElementById("main").style.marginLeft = "250px";
                }

                function closeNav() {
                    document.getElementById("Sidenav").style.width = "0";
                    document.getElementById("main").style.marginLeft = "0";
                }
            </script>


    </body>

    </html>

<?php
} else {
    header("Location: index.php");
    exit();
}
?>