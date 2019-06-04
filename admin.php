<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'news');
	$query = mysqli_query($connect, "SELECT * FROM news");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>ADMINsite</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 </head>
 <body>
 	<form method="POST" action="insert.php" enctype="multipart/form-data">
  		<input placeholder="name of your news" name="news_name" id="first_name" type="text" class="validate">
  		<input placeholder="text of your news" name="news_text" id="first_name" type="text" class="validate">
 		<input placeholder="long text of your news" name="news_long_text" id="first_name" type="text" class="validate">
 		<input type="file" name="news_img">
 		<input type="hidden" name="news_id">
  		<button class="btn waves-effect waves-light" type="submit" name="action">
  			Submit
  		</button>
 	</form>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

 	<div>
 		<form method="POST" action="delete.php">
 			<input type="text" name="news_id" placeholder="id of news">
 			<button class="btn waves-effect waves-light" type="submit" name="action">DELETE</button>
 		</form>
 	</div>
 </body>
 </html>
