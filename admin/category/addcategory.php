<?php session_start();
if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Bạn chưa đăng nhập admin không có quyền truy cập');location.href='login.php'</script>";
}
 ?>
<?php 
include '../../conect.php';
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
	$name = $_POST['name'];
	$mysql = "INSERT INTO `category` (`category_name`) VALUES ('$name')";
	$add=mysqli_query($conn,$mysql);
	if ($add>0) {
		echo "<script>alert('Thêm mới thành công');location.href='category.php'</script>";
	}
	else
	{
		echo "<script>alert('Thêm mới thất bại')</script>;";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Category</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	 <div class="header" style="background-color: orange; width: 1250px; height: 70px">
        <h1 align="center" style="color: white"><b><i>ADMIN</i></b></h1>
    </div>
    <div class="menu">
        <a href="../index.php"><button type="button" class="btn btn-secondary">trang chủ</button></a>
        <a href="category.php"><button type="button" class="btn btn-secondary">Category</button></a>
        <a href="../product/quanlisp.php"><button type="button" class="btn btn-secondary">Product managing</button></a>
        
    </div>
	<h2>Add category:</h2>
	<h3>Input name category:</h3>
	<form method="post">
		<input type="text" name="name">
		<input type="submit" value="Add">
	</form>
	<hr>
	<a href="category.php"><input style="" type="button" name="add" value="BackList"></a>
</body>
</html>