<?php
session_start();
if(isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
}else{
    header('Location: index.php');
}
?>

<h3 style="text-align: end"> Welcome!, <?= $name ?></h3>
<h1> Profile Page </h1>
<a href="product.php"> Product</a>
<a href="log.php"> Log Out</a>