<?php
require_once('db.php');

$login = mysqli_real_escape_string($conn, $_POST["login"]);
$password = mysqli_real_escape_string($conn, $_POST['password']);

//$sql = "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'";
$checkUser = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if  ($login === "admin" && $password === "rootrights"){
    echo "режим админа";
}
else if ($checkUser  === false){
    echo "Пользователь не найден";
}
else {
    include 'userhome.html';
}

?>