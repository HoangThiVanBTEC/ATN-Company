<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>Login</title>
    <style type="text/css">

    
    </style>
</head>
<body>
	<div>
<form method="post" action="">
  <fieldset style="border-color: orange ; width: 500px; margin: 0 auto">
    <legend ><h1 style="color: orange; text-align: center;">LOGIN FORM</h1></legend>
    <label for="username"><h3>Username:</h3></label><br>
    <input type="text" id="fname" name="username"><br>
    <label for="password"><h3>Password:</h3></label><br>
    <input type="password" id="lname" name="password" ><br><br>
    
    

    <br><br>
    <input class="cl1" style="width: 60px; height:30px ; " name="login" type="submit" value="Submit"><br>
    <a target="_parent" class="cl1" href="password.html"><b>Do you forget password?</b></a>
    <h3 >Bạn chưa có tài khoản?</h3>
    <a target="_parent" href="signin.php"><b>Register</b></a>

    
  </fieldset>
  <a target="blank" href="../index.php"><h2 style="color: red">Back </h2></a>
</form>
</div>

<?php
//kts nối php với cơ sở dữ liệu
 $connect=mysqli_connect('localhost','root','','bookshop');
      if($connect){
        echo"kết nối thành công";
      }
      else{
        echo "kết nối k thành công ";
      }



if(isset($_POST['login'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from user where username='$username' AND password='$password'";
    $result=mysqli_query($connect,$sql);
    $check_login=mysqli_num_rows($result);
  //  $row_login=mysqli_fetch_array($result);


    if($username=='admin' && $password=='123@'){
        $_SESSION['admin'] = $username;
        echo "<script> alert('You login successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
       
    }else

    if($check_login==0){
        echo "<script>alert('pass and username is incorrect, please try again!')</script>";
        exit();
    }
    if($check_login>0){
        $_SESSION['username'] = $username;
        echo "<script> alert('You login successfully')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
       
    }
}



?>
</body>
</html>