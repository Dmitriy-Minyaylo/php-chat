<?php    
/* подключаем базу данных */
include "configs/db.php";
// подключаем стартовые настройки
include "configs/start.php";
?>

<div id='shapka'>
	<div id='logo'>
		<img src="/img/logo.png"> <span><b>Нет?</b> <i>если</i> <b>Да! </b>
		</span>
	</div>

	<div id='menu'>
        <a href="/" class="main">Главная</a>	
		<a href="#" class="openContacts">Контакты</a>	
		<a href="#">Настройки</a>
		<?php // если существуют куки будет меняться ВОЙТИ на ВЫЙТИ!
			if(isset($_COOKIE["user_id"])) {
				// подключаем пользователей с базы данных что = КУКИ!
					$sql = "SELECT * FROM users WHERE id =" . $_COOKIE["user_id"];
				// выполнить sql запрос в базе данных
					$result = mysqli_query($connect, $sql);
				// mysqli_num_rows - получить количество результатов
					$user = mysqli_fetch_assoc($result);
				
				?>
				<a href="exit.php" class="enter"><?php echo $user["name"];?></a>
				
				<?php
			} else {
				?>
				<a href="login.php" class="enter">Войти</a>	
				<?php
			}
			?>
		
	</div>
</div>