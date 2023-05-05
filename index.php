<?php
session_start();
$nam = array("Sam Espino", "Shae Smith", "Third Lee");
$ema = array("sam@gmail.com", "shae@gmail.com", "third@gmail.com");
$pas = array("secret1", "secret2", "secret3");

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    for ($x = 0; $x < 3; $x++) {
        if ($email == $ema[$x] && $password == $pas[$x]) {
            header('Location: profile.php?nam=' . $nam[$x]);
            $_SESSION['name'] = $nam[$x];
            exit;
        }
    }
    header('Location: register.html');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyyyAppp</title>

    <link rel="stylesheet" href="style.css">

    <style>
        img {
            height: 150px;
            margin-bottom: 5%;
            text-align: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

    <div class="container">
        <img src="img/robot.png" alt="">
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
            <input type="email" required name="email" placeholder="Email Address" /> <br>
            <input type="password" required name="password" placeholder="Password" /> <br>
            <center>
                <button type="submit" class="btn"> Sign In </button>
                <button type="reset" class="btn">Clear</button>
            </center>
        </form>
    </div>
</body>

</html>