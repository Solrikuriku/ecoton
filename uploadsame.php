<?php
require_once('db.php');

$conn = mysqli_connect($servername, $username, $password, $dbname);

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$inn = mysqli_real_escape_string($conn, $_POST["inn"]);
$inn = intval($inn);
$text = mysqli_real_escape_string($conn, $_POST["text"]);

$sql = "INSERT INTO `request` VALUES ('a', '$name', $inn, '$text')";
$conn -> query($sql);

echo "Администрация рассмотрит ваши предложения перед публикацией";
?>
