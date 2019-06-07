<?php header('Location: http://stm/twitter/index.php') ?>
<?php $connect = mysqli_connect('127.0.0.1','root','','timur_ch_16');
mysqli_query($connect,"DELETE FROM  tweets WHERE id=". $_POST['id']);

 ?>