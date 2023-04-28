<?php 

session_start();



include "./partials/db_connect.php";
$email = $_SESSION['email'];
$sql = "UPDATE `users` SET `status` = 'Offline Now' WHERE `users`.`email` = '$email';";
$result = mysqli_query($conn, $sql);

session_unset();
session_destroy();
header("Location: ./index.php");

?>