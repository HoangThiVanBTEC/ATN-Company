<?php 
session_start();
unset($_SESSION['admin']);
echo "<script>alert('Đăng xuất thành công');location.href='login.php'</script>";
 ?>