<?php    
/* подключаем базу данных */
include "configs/db.php";
// подключаем стартовые настройки
include "configs/start.php";

// подключаем переменную НЕ равно куки!
$sql = "SELECT * FROM users WHERE id !='" . $_COOKIE["user_id"] . "'";
// задается через 2 параметр: 1. подключение базы данных, 2. подключение списка-скрипта с пользователями
$result = mysqli_query ($connect, $sql);
// mysqli_num_rows - получить количество результатов
$col_users = mysqli_num_rows($result);
?>

<div id="contacts-modal" class="modal"> 
    <div class="closeModal">X</div>    
    <div id="contacts-content">
        <ul>
            <?php 
                $i=0;
                while($i < $col_users) {
                    $user = mysqli_fetch_assoc($result);
                ?>
                    <li>
                        <div class="avatar">
                                <img src=<?php echo $user["photo"]?>> 
                        </div> 
                        <h2><?php echo $user["name"]?></h2>
                        <?php 
                            $sql = "SELECT * FROM friends WHERE
                                 user_1 =" . $user["id"] . " AND user_2=" . $user_id . "
                                    OR user_1 =" . $user_id . " AND user_2=" . $user["id"];

                            $friendsResult = mysqli_query($connect, $sql);
                            $col_friends = mysqli_num_rows($friendsResult);
                          if ($col_friends > 0) {
                            ?>
                            <!-- Кнопка удалить друга -->
                            <a class="del" href="del_friends.php?user_id=<?php echo $user["id"]; ?>">Delete friends -</a>
                            <?php 
                          } else {
                            ?>
                             <!-- Кнопка Добавить друга -->
                            <a href="friends.php?user_id=<?php echo $user["id"]; ?>">Add friends +</a>
                            <?php 
                          } 
                        ?>                
                    </li>
                    <?php 
                    $i++;
                }
            ?>
        </ul>
    </div>
</div>

