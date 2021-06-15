<?php 
session_start();
unset($_SESSION['username']);
echo "<script>alert('Đăng xuất thành công');location.href='index.php'</script>";
 ?>