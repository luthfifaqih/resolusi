<!DOCTYPE html>
<html>

<head>
    <title>BPP PEBAYURAN</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>


<body>
    <form action="registration.php" method="post">
        <img src="asset/kp.png">
        <h2>registration</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>User Name</label>
        <input type="text" name="username" id="username" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="Password"><br>


        <label>Email</label>
        <input type="tex" name="email" id="email" placeholder="email"><br>




        <button type="submit">Submit</button>

    </form>
    <form action="index.php">

        <a href="index.php"><span class=""></span>
            <span>sudah memiliki akun ?</span></a>
    </form>
</body>

</html>