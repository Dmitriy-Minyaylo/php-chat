<?php
/* подключаем базу данных в html*/
include "configs/db.php";
// подкючение условия только для авторизировных
include "configs/start.php";
// всегда стартовая ЛОГИН, если не авторизован
if($user_id == null) {
	header("Location: /login.php");
// подключаем успешную проверку по мылу и паролю и куки
include "cool.php";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Чатик</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- Здесь впишем шапку с частей чайта -->
<?php
	include "part-site/shapka.php";
?>

<div id="content">
	<div id='users'>
		<form action="index.php" method="GET" id='poisk' >
		
			<input type="text" name="poisk-text">
		
			<button>
				<img src="/img/Interface_Search-128.png">
			</button>
		</form>
	<!-- Здесь мы подключим фаил php, который создаст div - spisok -->
	<?php
		include "modules/spisok.php";
	?>
	<!-- успешно подключили =) -->
	</div>
	<!-- Здесь мы подключим фаил php, который создаст div - message -->
	<?php
		include "modules/messages.php";
	?>
	<!-- успешно подключили =) -->
	
	<?php
	// Проверка отправки сообщений после авторизации
		if(isset($_COOKIE["user_id"]) && isset($_GET["user"])) {

			echo "<form id=\"form-sms\" method=\"POST\">";
			echo "<input type=\"hidden\" name=\"user_id_to\" value='" . $_GET["user"] . "'>";
			echo "<input type=\"hidden\" name=\"ot_user_id\" value='" . $_COOKIE["user_id"] . "'>";
			echo "<textarea name=\"message\"></textarea>";
			echo "<button type=\"submit\"><img src=\"img/send.png\"></button>";
			echo "</form>";
			
		} else {
			echo "<h2 class=\"warning\"> Приветствую!!! <pre> Кому Вы бы хотели написать? ;) </h2>";	
		};
		?>
			
	</div>
</div>

	<!-- Здесь мы подключим фаил php, который создаст модалку контактов -->
		<?php
			include "modules/contacts.php";
		?> -->


</body>
<script src="script.js"></script>
</html>