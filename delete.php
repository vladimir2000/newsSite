<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'news');
	$query = mysqli_query($connect, "DELETE FROM news WHERE news_id = '" . $_POST['news_id'] . "'");

	header('Location: http://newfolder/index.php?id=' . $_POST['news_id']);
?>