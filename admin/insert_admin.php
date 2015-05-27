<?php 
//session test
require 'check_admin.php';


//conection with database
require '../connection/conn.php';
//check if data recived or no 
if (!empty($_POST['name'])) {
	$name = $_POST['name'];
	if (!empty($_POST['password'])) {
		$password = $_POST['password'];
		$query=mysqli_query($connect , "INSERT INTO admins VALUES ('' , '$name' , '$password') ");
		if ($query) {
			header("location: admins.php?msg=inserted");die();
		}
		header("location: add_admin.php?msg=error");die();
	}
	else
	{
		header("location: add_admin.php?msg=empty_data");die();		
	}
}
else
{
	header("location: add_admin.php?msg=empty_data");die();
}


?>