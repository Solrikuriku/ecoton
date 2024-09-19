<?php
    #Пользователь регистрируется, информация о нем заносится в таблицу users.

    require_once('db.php');

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $login = mysqli_real_escape_string($conn, $_POST["login"]);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $repeat_password = mysqli_real_escape_string($conn, $_POST['repeat_password']);

    if ($password != $repeat_password){
        echo "Пароли не совпадают";
    }

    else{
        $sql = "INSERT INTO `users` VALUES (NULL, '$login', '$password', '$email')";
        $conn -> query($sql);
        echo "Пользователь зарегистрирован!";
    }
?>