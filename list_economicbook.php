<!DOCTYPE html>
<html>
<head>
	<title>economic_book</title>
	<style type="text/css">
		.hot2{
	width: 300px;
	height: 400px;
	
	float: left;
	margin: 55px;
	border: 1px solid black
}
	</style>
</head>
<body>
	<h2>Economic book list</h2>

	<div id="hot1">
					<?php
			$connect=mysqli_connect('localhost','root','','bookshop');
			if(!$connect){
				echo "kết nối k thành công";
			}
			
			$sql="select * from product where category_id=2";
			$result=mysqli_query($connect,$sql);
			while ($row_pro=mysqli_fetch_array($result)) {
				$product_id=$row_pro['product_id'];
				$product_name=$row_pro['name'];
				$product_price=$row_pro['price'];
				$product_suppliers=$row_pro['author'];
				$category_id=$row_pro['category_id'];
				$product_img=$row_pro['img'];

				echo "
			
				<div class='hot2'>

						
						<img style='width: 200px; height: 280px; padding-left: 50px' src='img/$product_img'>
						<h3 align='center'>$product_name</h3>
						<p style='text-align: center'>Price:$product_price</p>
						<a style='padding-left: 50px' href='details.php?product_id=$product_id'>Details</a>
						<a style='float: right ;padding-right: 50px'>
							<input  type='button' name='but' id='button' value='Add to cart'>
						</a>

					</div>

				";

				
				
			}

			?>
					
					
				</div>
</body>
</html>