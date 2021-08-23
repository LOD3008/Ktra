<?php
	include("../config/constants.php");
	$id = $_GET['id'];
	$sql = "DELETE FROM tbl_canbo WHERE id=$id ";
	$result = mysqli_query($conn, $sql);
	if($result==TRUE)
	{
		header('location:http://localhost/QL_Danhba/admin/index.php ');
	}
	else
	{
		echo "Failed to Delete";
	}
 ?>