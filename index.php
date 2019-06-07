<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<style type="text/css">
		*{
			padding:0px;
			margin:0px;
		}
		.p{
			font-family:Arial;
			font-size: 9px;
		}
	</style>
</head>
<body class='bg-light'>
<div class='header container-fluid' style="height:50px;background: white;text-align:center">
	<a href="#"><img src="images/twitter.png"></a>
</div>
<div class='content container ' style="margin-top:100px">

	<div class='row'>
		<div class="col-3">
			<div class='bg-white' style='border-radius:5px'>
				<div>
					<img src='images/background.jpg' class='w-100' style="border-radius:5px">
				</div>
				<div class='row pl-2'>
					<div class="col-3">
						<img src="images/avatar.jpg" class='rounded-circle'>
					</div>
					<div class="col-9">
						<div>
							<a href="#">MarySmith</a>
						</div>
						<div>
							<a href="#">@MarySmith</a>
						</div>
					</div>
				</div>
				<div class='row pl-2'>
					<div class="col-6">
						<div>
							<h6><a href="#">Твиты</a></h6>
						</div>
						<div>
							<p><a href="#">136</a></p>
						</div>
					</div>
					<div class="col-6">
						<div>
							<h6><a href="#">Читаемые</a></h6>
						</div>
						<div>
							<p><a href="#">136</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- АКТУАЛЬНЫЕ ТЕМЫ ДЛЯ ВАС-->
			<?php $connect = mysqli_connect('127.0.0.1','root','','timur_ch_16');
		  $querycl   = mysqli_query($connect,'SELECT * FROM twitter_col_left');
	?>
			<div class='bg-white mt-2' style="border-radius:5px; padding:5px 10px">
				<h5>Актуальные темы для вас</h5>
				<?php for($i=0;$i<$querycl->num_rows;$i++){ ?>
					<div>
				<a href=<?php $objcl=$querycl->fetch_assoc(); echo $objcl['account_link']?>><?php echo $objcl['account_name'] ?></a>
				<p class='p'><?php echo 'Твитов:'.$objcl['account_tweets_num'] ?></p>
				</div>
				<?php } ?>
			</div>
		</div>
	<!-- ВТОРАЯ КОЛОНКА -->
	<div class="col-6">
		<div style="background:white;border-radius:5px;height:50px;padding:10px 10px">
		<form method="POST" action="p.php" style="display:flex">
			<input class="col-5" type="" name="text" placeholder="text" style="border:none">
			<input class="col-5" type="" name="title" placeholder="title" style="border:none">
			<button class="col-2" style="border:none;font-family:Arial">POST</button>
		</form>
		</div>
		<!-- ПОСТ  -->
		<?php $query   = mysqli_query($connect,'SELECT * FROM tweets ORDER BY id DESC');
	?>
	<?php for($i=0;$i< $query->num_rows;$i++){ ?>
		<div class=' row ' style="margin-top:10px;background:white;border-radius:5px;padding:10px 10px">
			<div class='col-2 bg-white' style="border-radius:5px">
				<a href="#"><?php $obj = $query->fetch_assoc(); echo '<img src="'. $obj['logo'].'" class="rounded-circle">'?></a>
			</div>
			<div class='col-10 bg-white' style="border-radius:5px">
				<div>
					<h5>
						<?php echo $obj['title']?>
					</h5>
				</div>
				<div>
					<?php echo '<p>'.$obj['text'].'</p>'?>
				</div>
				<div>
					<?php echo '<img src="'.$obj['img'].'" class="w-100">'?>
				</div>
				<div class='row'>
					<div class="col-3">
						<a href='#'><img src="images/comment.png"></a>
					</div>
					<div class="col-3">
						<a href='#'><img src="images/retweet.png"></a>
					</div>
					<div class="col-3">
						<a href='#'><img src="images/like.png"></a>
					</div>
					<div class="col-3">
						<a href='#'><img src="images/envelope.png"></a>
					</div>
				</div>
				<form action="update.php" method="POST"style="width:100%; text-align:center">
				<?php  echo '<input type="" style="display: none;" name="id" value="'.$obj['id'].'">'?>
				<?php  echo '<input type="" style="display: none;" name="text" value="'.$obj['text'].'">'?>
				<button style="border:none; padding:10px 20px; color:white">Редактировать</button>
			</form>
			<form method="POST" action="delete.php" style="width:100%; text-align:center">
				<?php echo' <input style="display: none;" type="" name="id" value="'.$obj['id'].'">'?>
				<button style="border:none;background:red;padding:5px 20px; color:white">Удалить</button>
			</form>
			</div>
			
			
		</div>
	<?php } ?>
		<!-- КОНЕЦ ПОСТА  -->
	</div>
	<!-- КОНЕЦ ВТОРОЙ КОЛОНКИ -->
	<!-- ТРЕТЬЯ КОЛОНКА-->
	<div class="col-3" >
		<div class='bg-white pl-2' style="border-radius:5px">
			<div style="padding:5px 10px">
				<h5>Кого читать</h5>
			</div>
			<?php $querycr = mysqli_query($connect,'SELECT * FROM twitter_col_right');?>
			<?php  for($i=0;$i<$querycr->num_rows;$i++){ ?>

			<div>
				<div class='row' style="padding:10px 5px">
					<div class='col-3'>
						<?php $objcr=$querycr->fetch_assoc(); echo'<img src="'. $objcr['account_logo'].'" class="rounded-circle"/>'?>
					</div>
					<div class='col-9'  style="padding-left:50px">
						<p><a href=<?php echo $objcr['account_link'] ?>><?php $objcr['account_name'] ?></a><a href=<?php echo $objcr['account_link'] ?>></a></p>
						<button class='btn btn-outline-primary'>Читать</button>
					</div>
				</div>
				
			</div>
			<?php } ?>
		</div>
		<div class='bg-white mt-2' style="border-radius:5px;padding:5px 10px">
			<p>© Twitter, 2018</p>
			<a href="#">О нас</a>
			<a href="#">Справочный центр</a>
			<a href="#">Условия</a>
			<a href="#">Политика Конфиденциальности</a>
			<a href="#">Файлы cookie</a>
			<a href="#">О рекламе</a>
			<a href="#">Бренд</a>
			<a href="#">Блог</a>
		</div>
		
	</div>
	</div>
	
</div>
</body>
</html>