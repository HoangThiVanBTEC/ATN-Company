<!DOCTYPE html>
<html>
<head>
	<title>chitietsp</title>
</head>
<body>
	<div>
		<div>
			<?php
			include("connect.php");
			if(isset($_GET['product_id'])){

				$product_id=$_GET["product_id"];
				$sql="SELECT * FROM product where product.product_id={$product_id}";
				$result=mysqli_query($connect,$sql);
				while($row_pro=mysqli_fetch_assoc($result)){

				$product_name=$row_pro['name'];
				$product_price=$row_pro['price'];
				$product_suppliers=$row_pro['author'];
				$category_id=$row_pro['category_id'];
				$product_img=$row_pro['img'];
				}

				echo"
				<div class='hot2'>

						
						<img style='width: 200px; height: 280px; padding-left: 50px' src='$product_img'>
						<h3>$product_name</h3>
						<p style='text-align: center'>Price:$product_price</p>
						
						<a style='float: right ;padding-right: 50px'>
							<input  type='button' name='but' id='button' value='Add to cart'>
						</a>

					</div>
				"
			}
			?>
		</div>
	</div>
</body>
</html>