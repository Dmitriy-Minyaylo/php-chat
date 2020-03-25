<?php 


// при старте юзер не имеет ни какого значения
$user_id = null;
// проверка соотвествия с куки
if(isset($_COOKIE["user_id"])) {
    $user_id = $_COOKIE["user_id"];
}

?>