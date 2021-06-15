<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>Đăng kí</title>
</head>
<body>
	<div>
<form action="" method="post">
  <fieldset style="border-color: orange ; width: 500px; margin: 0 auto">
    <legend ><h1 style="color: orange; text-align: center;">REGISTRATION FORM</h1></legend>
    <label for="fname"><h3>Firstname:</h3></label><br>
    <input type="text" id="fname" name="fname" ><br>
    <label for="lname"><h3>Lastname:</h3></label><br>
    <input type="text" id="lname" name="lname" ><br><br>
    <label for="user"><h3>Username:</h3></label>
    <input type="text" name="user" id="user">
    <label for="password"><h3>Password:</h3></label>
    <input type="password" name="pass" id="password">
    <label for="num"><h3>Phone-number</h3></label>
    <input type="tel"  name="tel" id="num"><br>
    <label for="gmail"><h3>G-mail:</h3></label>
    <input type="gmail" name="mail" id="gmail">
    <br><br>
    <input class="cl1" style="width: 70px; height:30px ; " name="register" type="submit" value="regist"><br>
    

    
  </fieldset>
  <a target="blank" href="../index.html"><h2 style="color: red">Back </h2></a>
</form>
</div>

<?php
  include '../conect.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {   
   $firstname= $_POST['fname'];
   $lastname = $_POST['lname'];
   $username = $_POST['user'];
   $password = $_POST['pass'];
   $phone = $_POST['tel'];
   $gmail = $_POST['mail'];
   $sql="INSERT INTO `user` ( `firstname`, `lastname`, `username`, `password`, `phone`, `G-mail`) VALUES ( '$firstname', '$lastname', '$username', '$password', '$phone', '$gmail');";
   $result = mysqli_query($conn,$sql);
   if ($result) {
    echo "<script>alert('Account has been created successfully!')</script>";
    echo "<script>window.open('login.php','_self')</script>";
  }
  else{
    echo"<script>alert('Error')</script>";
  }  
}
?>

</body>
</html>