<?php 
include '../../conect.php';
$id = $_GET['id'];
if (isset($id)) 
{
	$sql = "DELETE FROM `product` WHERE `product`.`product_id` = $id";
	$delete = $conn->query($sql);
	if ($delete>0) 
	{
		echo "<script>alert('Edit successfully!');location.href='quanlisp.php'</script>";
	}
	else
	{
		echo "<script>alert('Xóa thất bại');location.href='quanlisp.php'</script>";
	}
}


 ?>