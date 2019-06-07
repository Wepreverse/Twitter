<?php header('Location: http://stm/twitter/index.php');
 $connect=mysqli_connect('127.0.0.1','root','','timur_ch_16');
$query=mysqli_query($connect,'UPDATE tweets SET text="'.$_POST['text'].'", img="images/'.$_FILES['img']['name'].'" WHERE id="'.$_POST['id'].'"'); ?> 