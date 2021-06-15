
<?php include 'conect.php';

if (isset($_GET['product_id'])) 
{
	$id = intval($_GET['product_id']);

	$mysql = "SELECT * FROM product WHERE product_id LIKE $id";
	$detail = $conn->query($mysql);
}


 ?>

<html>
	<head>
		<title>Detail Product</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<h2>Detail </h2>
			
			<div class="shadow p-3 mb-5 bg-white rounded">
				<?php foreach ($detail as $item): ?>
					<div><img  src="img/<?php echo $item['img']; ?>" style="width: 380px; height: 500px" alt=""></div>
			      <div >Name: <?php echo $item['name']; ?></div>
			      <div>Price: <?php echo $item['price']; ?></div>
			      <div>Author: <?php echo $item['author']; ?></div>
			      <div>Still available: <?php echo $item['quanlity']; ?></div>
			      <input type="button" class="btn btn-success" value="Add Card">
			      
			  <?php endforeach; ?>
			</div>
		</div>
	</body>
</html>