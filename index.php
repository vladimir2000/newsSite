<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'news');
	$query = mysqli_query($connect, "SELECT * FROM news ORDER BY news_id DESC");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>World News</title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">
  <div class="container-fluid bg-dark text-white">
    <h2>Main</h2>
  </div>
<?php 
  for ($i=0; $i < $query->num_rows; $i++) { 
  $hello = $query->fetch_assoc();
?>
<div class="col-8 mx-auto">

  <div class="card bg-white">
        <div class="card-content white-text">
            <h2><?php echo $hello['news_name'] ?></h2>
            <div><?php echo '<img  class="p-3 w-100" src="' . $hello['news_img'] . '">'; ?></div>
            <?php echo $hello['news_text'] ?>
        </div>

        <div class="card-action">
          <form method="POST" action="read.php">
            <?php echo '<input type="hidden" name="news_id" value="' . $hello['news_id'] . '">' ?>
            <button class="btn btn-light">Read</button>
          </form>
        </div>
  </div>
  </div>
  <?php 
    }
   ?>
   <div><p>Это делал Володя в 2019 году.</p></div>
</body>
</html>


