/*
    После того, как пользователь заполняет заявку о мероприятий, она отправляется в таблицу request.
    Ей автоматически присваивается id.
*/
<?php
    require_once('db.php');

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $inn = mysqli_real_escape_string($conn, $_POST["inn"]);
    //Это значение - числовое.
    $inn = intval($inn);
    $text = mysqli_real_escape_string($conn, $_POST["text"]);

    //NULL на местах, где значение задается автоматически черещ auto-increment.
    $sql = "INSERT INTO `request` VALUES (NULL, '$name', $inn, '$text')";
    $conn -> query($sql);

    echo "Администрация рассмотрит ваши предложения перед публикацией";
?>
