<?php    
/* подключаем базу данных */
include "configs/db.php";
// подключаем стартовые настройки
include "configs/start.php";


if(isset($_GET["user_id"])) {
    // создаем таблицу friends 
        $sql ="DELETE FROM `friends` WHERE `friends`.`user_1` = '" . $user_id . "' AND `friends`.`user_2` = '" . $_GET["user_id"] . "'";
        var_dump($sql);
        // задается через 2 параметр: 1. подключение базы данных, 2. подключение списка-скрипта с пользователями
            if(mysqli_query($connect, $sql)) {
                header ("Location: / ");
            } else {
                echo "<h2 class=\"cool\"></h2>";
            }
        }

?>