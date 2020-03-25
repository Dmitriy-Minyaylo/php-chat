<!-- подключаем PHP всегда сверху! -->
<?php
/* подключаем базу данных */
include "configs/db.php";

// 1. Дизайн или мокАп - готов
// 2. Сделать отправку формы - готов
// 3. Проверка пользователя по email
// 4. Провка заполнения формы
// 5. если шаги 3.4. в норме, то 
//     - создаем пользователя и добавляем его в базу

/* проверка по email и паролю*/
if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["name"]) && $_POST["name"] !="" && $_POST["email"] !="" && $_POST["password"] != "") {
    // вставляем в таблицу users
    $sql = "INSERT INTO users (name, email, password) VALUES ('" . $_POST["name"] . "', '" . $_POST["email"] . "', '" . $_POST["password"] . "')";
    if (mysqli_query ($connect, $sql)){
        echo "<h2 class=\"cool\">Ура! Вы перешли на черную сторону</h2>";
    } else {
        echo "<h2>Что-то не так ... Попробуйте еще раз</h2>";
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<!-- Здесь впишем шапку с частей чайта -->
<?php
	include "part-site/shapka.php";
?>

<form action="registration.php" id="modalReg" method="POST"> 	
    <h2>Registration</h2>
        <h3 class="name">
            UserName:<br/>
            <input type="text" name="name">
        </h3>
        <h3 class="post" >
            Email-adress:<br/>
            <input  type="text" name="email">
        </h3>
        <h3 class="pass">
            Password:<br/>
            <input type="password" name="password">
		</h3>
        <button class="btnReg" type="submit">Registration</button>
    </form>	

</body>
</html>