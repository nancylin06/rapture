<?php
$connect = mysqli_connect('localhost', 'root', '', 'finalproject');
if (!$connect) {
    echo "<h4 style='color:green;'>not connected</h4>";
}
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>log in</title>
    <link href="style.css?v=<?php echo time(); ?>" type="text/css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b311425060.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrap">
        <div class="content">
            <div class="box">
                <div class="logo"><img src="../RAP img/Asset 1.png" alt="logo"></div>
                <a href="../log in/index.php">
                    <div class="log">
                        <h3>log in</h3>
                    </div>
                </a>
                <div class="sign">
                    <h3>sign up</h3>
                </div>
                <form method="POST" action="index.php" id="form">
                    <label id="parta">Name :</label>
                    <div class="boxa">
                        <input type="text" placeholder="Enter your name" name="name" required for="parta" id="username">
                        <i class="fa-solid fa-user enve"></i>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small></small>
                    </div>
                    <label id="two">email :</label>
                    <div class="boxa">
                        <input type="email" placeholder="Enter your e-mail" name="mail" required for="two" id="email">
                        <i class="fa-solid fa-envelope enve"></i>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small></small>
                    </div>
                    <label id="one">Password :</label>
                    <div class="boxa">
                        <input type="password" placeholder="Password" name="pass" required for="one" id="password">
                        <i class="fa-solid fa-unlock enve"></i>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small></small>
                    </div>
                    <label id="partb">Confirm Password :</label>
                    <div class="boxa">
                        <input type="password" placeholder="Confirm Password" name="conf" required for="partb" id="confirm">
                        <i class="fa-solid fa-lock enve"></i>
                        <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <small></small>
                    </div>
                    <button type="submit" name="sub"><b>sign up</b></button>
                </form>
                <?php
                if (isset($_POST['sub'])) {
                    $name = $_POST['name'];
                    $mail = $_POST['mail'];
                    $pass = $_POST['pass'];
                    $conf = $_POST['conf'];

                    $insert = "INSERT INTO `rapture`(`rap_id`, `rap_name`, `rap_email`, `rap_pass`, `rap_conf`, `rap_img`, `rap_phn`, `rap_add`, `rap_subs`) VALUES (NULL,'$name','$mail','$pass','$conf','','','','')";
                    $insert_query = mysqli_query($connect, $insert);

                    if (!$insert_query) {
                        echo "<h4 style='color:green;'>not Inserted</h4>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
<!-- <script src="script.js" type="text/javascript"></script> -->
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</html>