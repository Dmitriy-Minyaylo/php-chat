<?php

/* проверка по email и паролю и имени*/
if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["name"]) && // перенесли на следующую строку
        $_POST["name"] !="" && $_POST["email"] !="" && $_POST["password"] != "") {
    // вставляем в таблицу users
    $sql = "SELECT * FROM users WHERE email LIKE '" . $_POST["email"] . "' AND password LIKE '" . $_POST["password"] . "'";
    // задается через 2 параметр: 1. подключение базы данных, 2. подключение списка-скрипта с пользователями
    $result = mysqli_query ($connect, $sql);
    // mysqli_num_rows - получить количество результатов
    $col_users = mysqli_num_rows($result);

    if ($col_users == 1) {
        // mysqli_fetch_assoc - преобразует данные пользователя с БД в массив
        $user = mysqli_fetch_assoc($result);
        //создаем куки для хранения данных пользователя
        setcookie("user_id", $user["id"], time() + 1000);
        // при удачной авторизации мы попадаем на главную
        header("Location: /");
        
    } else {
        echo "<h2> Логин или пароль не верно введены!</h2>";
    }
}; 

// Здесь подключаем проверку для ввода данных в базу с сообщениями

?>
