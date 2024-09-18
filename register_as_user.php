<?php
require_once('db.php');

//$servername = "econergy.test";
//$username = "root";
//$password = "";
//$dbname = "users";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$login = mysqli_real_escape_string($conn, $_POST["login"]);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$repeat_password = mysqli_real_escape_string($conn, $_POST['repeat_password']);

if ($password != $repeat_password){
    echo "Пароли не совпадают";
}

else{
    $sql = "INSERT INTO `users` VALUES ('$login', '$password', '$email')";
    $conn -> query($sql);
}
?>