<?php session_start();
if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Bạn chưa đăng nhập admin không có quyền truy cập');location.href='login.php'</script>";
}
 ?>

<!DOCTYPE html>
<html>
<head>
        <title>product</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

       
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

        <div class="header" style="background-color: orange; width: 1250px; height: 70px">
        <h1 align="center" style="color: white"><b><i>ADMIN</i></b></h1>
    </div>
    <div class="menu">
        <a href="../index.php"><button type="button" class="btn btn-secondary">trang chủ</button></a>
        <a href="../category/category.php"><button type="button" class="btn btn-secondary">Category</button></a>
        <a href="quanlisp.php"><button type="button" class="btn btn-secondary">Product managing</button></a>
        
    </div>





       <h2>Product managing</h2>
       <br>
       <a href="add_product.php"><input type="submit" name="add" id="add" value="Add product"></a>
       <br>

      <?php
            $connect=mysqli_connect('localhost','root','','bookshop');
            if(!$connect){
                echo "kết nối k thành công";
            }
            
            $sql="select * from product  ";
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

                        
                        <img style='width: 250px; height: 280px; padding-left: 50px' src='../../img/$product_img'>
                        <h3 align='center'>$product_name</h3>
                        <p style='text-align: center'>Price:$product_price</p>
                        <a style='padding-left: 50px' href='edit_product.php?id=$product_id'><input  type='button' name='but' id='button' value='Edit'></a>
                        <a style='float: right ;padding-right: 50px' href='delete.php?id=$product_id'>
                            <input  type='button' name='but' id='button' value='Delete'>
                        </a>

                    </div>

                ";


                
            }

            ?>
    </body>
</html>