<?php
    /*
        Здесь мы проверяем соответствие логину и паролю, получая их из таблицы users в базе данных.
        Также реализован режим входа в аккаунт администратора.
    */

    require_once('db.php');

    $login = mysqli_real_escape_string($conn, $_POST["login"]);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $checkUser = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    if  ($login === "admin" && $password === "root"){
        include 'adminhome.html';
    }
    else if ($checkUser  === false){
        echo "Пользователь не найден";
    }
    else {
        include 'userhome.html';
    }
?>