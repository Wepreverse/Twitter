<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php $connect=mysqli_connect('127.0.0.1','root','','timur_ch_16');
	  $query = mysqli_query($connect,'SELECT * FROM users ORDER BY user_email="'.$_POST['email'].'" and user_password="'.$_POST['password'].'"'); 
	  for($i=0;$i<$query->num_rows;$i++){
	  	$obj=$query->fetch_assoc();
	  	if($_POST['email']<>$obj['user_email'] and $_POST['password']<>$obj['user_password']){
	  		mysqli_query($connect,"INSERT INTO users(user_email,user_password) VALUES ('".$_POST['email']."','".$_POST['password']."')");
	  		echo 'регистрация прошла успешно';
	  	}else{
	  		echo 'такая почта уже зарегистрирована';
	  	}
	  } ?>
</body>
</html>