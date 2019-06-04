<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'news');
	$query = mysqli_query($connect, "INSERT INTO news (news_name, news_text, news_img, news_id, news_long_text) VALUES ('" . $_POST['news_name'] . "', '" . $_POST['news_text'] . "', '" . $_FILES['news_img']['name'] . "', '" . $_POST['news_id'] . "', '" . $_POST['news_long_text'] . "')");


	header('Location: http://newfolder/index.php');
?>
