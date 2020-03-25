<?php    
/* подключаем базу данных */
include "configs/db.php";
// подключаем стартовые настройки
include "configs/start.php";
?>
<div id="message">
	<div id="sms">
		<ul>
			<?php 
			if (isset($_GET["user"])) {
				// подключаем пользователей с базы данных 
				$sql = "SELECT * FROM messages " .  // Выбераем все сообщения
				"WHERE (user_id_to =" . $_GET["user"] .  // при получении $_GET["user"] получаем кому адресовано
					" AND ot_user_id = " . $_COOKIE["user_id"] . ") " .  // И отправленно от юзера с Id =1 (в данный момент 1)
						" OR (user_id_to =" . $_COOKIE["user_id"] . " AND ot_user_id =" . $_GET["user"] . ")"; /* ИЛИ отправленно от юзера с Id =1  И 
						отправленно от юзера с $_GET["user"] */

				// выполнить sql запрос в базе данных
				$result = mysqli_query($connect, $sql);
				// mysqli_num_rows - получить количество результатов
				$messages = mysqli_num_rows($result);
				$i = 0; // счетчик
				// Если существует запрос с поисковым текстом 
				while($i < $messages) {
					$messages = mysqli_fetch_assoc($result);
						echo "<li>";
						
						?>
						<?php	
						//здесь подключим вывод имени пользователя при получении и отправке смс
						$sql = "SELECT name FROM users WHERE id=" .  $messages["ot_user_id"];
						// выполняем запрос
						$user = mysqli_query($connect, $sql);
						// записываем в переменную массив с данными пользователя
						$userOk = mysqli_fetch_assoc($user);
						?>	
						<?php
							//пример подключения фото с массива					
							echo "<div class=\"avatar\">
								<img src='" . $users["photo"] . "'> 
							</div>"; 
							echo "<h2>" .  $userOk["name"] . "</h2>"; // выводим имя с массива				
							echo "<p>" . $messages["messages"] ."</p>"; // сообщение 
							echo "<div class=\"time\">" . $messages["time"] . "</div>"; // время ввода и отправки смс
						echo "</li>";
					$i = $i + 1; // увеличение счетчика
					}
				} else {
					echo "<h3> <pre> Кто-то ждет Вашего СМС!) </h3>"; 
			};
			if(isset($_POST["message"]) && $_POST["message"] != "") {
				// 
				$sql = "INSERT INTO messages (user_id_to, ot_user_id, messages) VALUES ('" . $_POST["user_id_to"] . "','" . $_POST["ot_user_id"] . "','" . $_POST["message"] . "')";
				// добавляем сообщение в базу messages
				if (mysqli_query ($connect, $sql)){
					echo "<h2>Сообщение успешно отправлено</h2>";
				} else {
					echo "<h2> ... Что-то не так ... </h2>";
				}
			};
	   		?>
    	</ul>
	</div>
