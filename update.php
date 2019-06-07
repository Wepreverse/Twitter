
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<form action="header.php" method="POST" enctype="multipart/form-data">
	<?php echo '<input type="" name="text" value="'.$_POST['text'].'">'?>
	<?php echo '<input type="" style="display:none"name="id" value="'.$_POST['id'].'">'?>
	<input type="file" name="img">
	<button>Сохранить</button>
</form>
</body>
</html>
