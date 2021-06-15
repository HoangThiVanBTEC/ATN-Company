<?php session_start();
if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Bạn chưa đăng nhập admin không có quyền truy cập');location.href='login.php'</script>";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
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



	<h2> category managing</h2>
	<table class="table">
  <thead class="thead-light">
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">Action 1</th>
      <th scope="col">Action 2</th>
    </tr>
  </thead>
  <tbody>

    <?php
      $connect=mysqli_connect('localhost','root','','bookshop');
      if(!$connect){
        echo "kết nối k thành công";
      }
      
      $sql="select * from category ";
      $result=mysqli_query($connect,$sql);
      while ($row_pro=mysqli_fetch_array($result)) {
        $category_id=$row_pro['category_id'];
        $category_name=$row_pro['category_name'];
        
      

        echo "
        <tr>
      
      <td>$category_name</td>
      <td><a href='edit_category.php?id=$category_id'><input type='submit' name='sửa' value='Edit'></a></td>
      <td><a href='delete.php?id=$category_id'><input type='submit' name='xóa ' value='Delete'></a></td>
       </tr>
      
        
        ";


        
      }

      ?>
  </tbody>
</table>
<h2>Do you want to add category?</h2>
<a href="addcategory.php"><input style="margin-left: 30px" type="submit"  value="Add"></a>
</body>
</html>