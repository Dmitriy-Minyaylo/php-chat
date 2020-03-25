<!-- подключаем PHP всегда сверху! -->
<?php
/* подключаем базу данных */
include "configs/db.php";

// 1. Дизайн или мокАп - готов
// 2. Сделать отправку формы - готов
// 3. Проверка данных формы - заполнены ли поля(имя, почта, пароль) - готов
// 4. Проверка на совпадение такого же пользователя в БД
// 5. если нет, то выдаем ошибку
// 6. если все в норме, то авторизация норм!
// подключаем успешную проверку по мылу и паролю и куки
include "cool.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Логин</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- Здесь впишем шапку с частей чайта -->
<?php
	include "part-site/shapka.php";
?>
<!-- Модальное окно входа -->
<div id="modalReg" class="enterField">
    <form action="login.php" method="POST" > 
        <div class="closeEnter">X</div>		
        <h2>Autorization</h2>
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
            <button class="submit" type="submit">Войти</button>
    </form>	
    <a href="registration.php">
        <button class="btnReg" type="submit">Registration</button>
    </a>
</div>
</body>
</html>
