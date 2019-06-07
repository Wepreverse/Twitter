<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php   $connect = mysqli_connect('127.0.0.1','root','','timur_ch_16');
			$query = mysqli_query($connect,'SELECT * FROM users');
	 ?>
	 <form action="login.php" method="POST">
	 	<input type="" name="email" placeholder="Введите email">
	 	<input type="" name="password" placeholder="Введите пароль">
	 	<button>reg</button>
	 </form>
</body>
</html>