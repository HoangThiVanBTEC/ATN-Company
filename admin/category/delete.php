<?php 
include '../../conect.php';
$id = $_GET['id'];
if (isset($id)) 
{
	$sql = "DELETE FROM `category` WHERE `category`.`category_id` = $id";
	$delete = $conn->query($sql);
	if ($delete>0) 
	{
		echo "<script>alert('Delete successfully!');location.href='category.php'</script>";
	}
	else
	{
		echo "<script>alert('Delete únuccessfully');location.href='category.php'</script>";
	}
}


 ?>