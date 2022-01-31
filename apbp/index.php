<!DOCTYPE html>
<html>

<head>
    <title>BPP PEBAYURAN</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<h4>BPP PEBAYURAN</h4>

<body>
    <form action="login.php" method="post">
        <img src="../apbp/asset/kabbekasi.png">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>

    </form>
    <form action="regis.php" method="post">

        <a href="regis.php"><span class=""></span>
            <span>Regis</span></a>
    </form>

</body>

</html>