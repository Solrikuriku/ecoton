<?php 
    #В этом файле администратор после принятия решения получает запись в БД, где видно id заявки и ее статус.
    require 'db.php';

    $status = $_POST['status_btn'];
    $id_request = mysqli_real_escape_string($conn, $_POST['id_request']);
    $id_request = intval($id_request);

    $sql = "INSERT INTO `request_status` VALUES (NULL, $id_request, '$status')";
    $conn -> query($sql);
    echo "Данные обновлены";
?>