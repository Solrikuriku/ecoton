<?php
    #Общий файл для подключения к базе данных на локальном (пока что) сервере.
    $servername = "econergy.test";
    $username = "root";
    $password = "";
    $dbname = "econergy";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Не удалось зарегистрироваться". mysqli_connect_error());
    }
?>