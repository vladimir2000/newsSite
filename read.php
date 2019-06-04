<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'news');
	$query = mysqli_query($connect, "SELECT * FROM news WHERE news_id = " . $_POST['news_id'] . "");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>News</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">
  <div class="container-fluid bg-primary">
	<a href="index.php" class="text-white">Back to main</a>	 
  </div>
<div>
<?php 
	for ($i=0; $i < $query->num_rows; $i++) { 
  $hello = $query->fetch_assoc();
?>
	<div class="col-8 mx-auto bg-light">
		    <div><?php echo '<img  class="w-200 p-3 img-fluid" src="' . $hello['news_img'] . '">'; ?></div>
		    <h2><?php echo $hello['news_name'] ?></h2>
            <h4><?php echo $hello['news_long_text'] ?></h4>
	</div>
  <?php 
    }
   ?>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<div>Это сделал тоже Володя в 2019 году</div>
</body>
</html>