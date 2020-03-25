<?php
 // данные для подключения БД
$server = "localhost";
$username = "root";
$password = "";
$dbname = "chat";


// подключение к базе данных Chat
$connect = mysqli_connect ($server, $username, $password, $dbname );
// подключение кодировки, т.к. в самой базе все норм, а при выводе идут ????
mysqli_set_charset($connect, 'utf-8');

// получение списка пользователей 
$sql = "SELECT * FROM users";
/*  ===========================     скрыли вводную ознакомительную инфу  =========================
// mysqli_query - выполнение mysqli запрос
// задается через 2 параметр: 1. подключение базы данных, 2. подключение списка-скрипта с пользователями
$result = mysqli_query ($connect, $sql);

// mysqli_num_rows - получить количество результатов
$col_users = mysqli_num_rows($result);

echo "<pre>";
var_dump($col_users);

//делаем счетчик для вывода пользователей
$i = 0;
while ($i < $col_users) {
    $user = mysqli_fetch_assoc($result);
    $i = $i + 1;
}
===================================================================== */
?>