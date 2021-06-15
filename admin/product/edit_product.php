<?php session_start();
if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Bạn chưa đăng nhập admin không có quyền truy cập');location.href='login.php'</script>";
}
 ?>
<?php 
include '../../conect.php';
$id = $_GET['id'];

$sqlcate = "SELECT * FROM category";
$category = $conn->query($sqlcate);

$sqlpro = "SELECT * FROM `product` WHERE `product_id`= $id";
$result = $conn -> query($sqlpro);
	$row = $result -> fetch_assoc();

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
	$name = $_POST['name'];
	$price = $_POST['price'];
	$author = $_POST['author'];
	$quanlity = $_POST['quanlity'];
	$category_id = $_POST['category_id'];



  //Thư mục bạn sẽ lưu file upload
  $target_dir    = $_SERVER['DOCUMENT_ROOT']."/asm1/img/";

  //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
  $target_file   = $target_dir . basename($_FILES["fileupload"]["name"]);
  $name_file = basename($_FILES['fileupload']["name"]);

  $allowUpload   = true;

  //Lấy phần mở rộng của file (jpg, png, ...)
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  // Cỡ lớn nhất được upload (bytes)
  $maxfilesize   = 800000;

  ////Những loại file được phép upload
  $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');


  if(isset($_POST["submit"])) {
      //Kiểm tra xem có phải là ảnh bằng hàm getimagesize
      $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
      if($check !== false)
      {
          echo "Đây là file ảnh - " . $check["mime"] . ".";
          $allowUpload = true;
      }
      else
      {
          echo "Không phải file ảnh.";
          $allowUpload = false;
      }
  }

  // Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
  // Bạn có thể phát triển code để lưu thành một tên file khác
  if (file_exists($target_file))
  {
      echo "<script>alert('Files đã tồn tại trên server');location.href='add_product.php'";
  }

		$mysql = "UPDATE `product` SET `name` = '$name', `price` = '$price', `author` = '$author', `quanlity` = '$quanlity', `category_id` = '$category_id', `img` = '$name_file' WHERE `product`.`product_id` = $id;";
        $edit = $conn->query($mysql);
		if ($edit>0) 
		{
			move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);
			echo "<script>alert('Edit Success !');location.href='quanlisp.php'</script>";
		}
		else
		{
			echo "<script>alert('Edit fail !')</script>;";
		}
 

  }


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
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
	<h1><i>Edit Product</i></h1>
	<h2>Edit Info Product:</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<h3>Name Product:</h3>
	<input type="text" name="name" value="<?php echo $row['name'] ?>">
	<h3>Price:</h3>
	<input type="number" name="price" value="<?php echo $row['price'] ?>">
	<h3>Author:</h3>
	<input type="text" name="author" value="<?php echo $row['author'] ?>">
	<h3>Quanlity:</h3>
	<input type="number" name="quanlity" value="<?php echo $row['quanlity'] ?>">
	<h3>Category:</h3>
	<select name="category_id" id="">
		<?php foreach ($category as $item):?>
		<option value="<?php echo $item[
		'category_id'] ?>"
		<?php if ($row['category_id']==$item['category_id']) 
		{
			echo 'selected="selected"';
		}
		else
		{
			echo '';
		} ?>><?php echo $item['category_name']; ?></option>
	<?php endforeach; ?>
	</select>
	<h3>img:</h3>
	<input type="file" name="fileupload">
	<img src="../../img/<?php echo $row['img'] ?>" style="width: 50px;height: 50px" alt=""> <hr>
	<input type="submit" value="Submit">
	</form>
	
</body>
</html>