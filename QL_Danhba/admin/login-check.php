<?php 
	if(!isset($_SESSION['login']))
	{
		header('location:'.SITEURL.'admin/login.php');
	}
		
?>