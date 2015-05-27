<?php 
//session test
require 'check_admin.php';


//conection with database
require '../connection/conn.php';
//check if data recived or no 
if (!empty($_POST['address'])) {
	$address = $_POST['address'];
	if (!empty($_POST['title'])) {
		$title = $_POST['title'];


		$query = mysqli_query($connect , "INSERT INTO gallery values ('' , '$address' , '$title' ) ");
		if ($query) {
			header("location: gallery.php?msg=data_inserted");die();
		}
		header("location: add_gallery.php?msg=error");die();
	}
	else
	{
		header("location: add_gallery.php?msg=empty_date");die();

	}
}
else
{
	header("location: add_gallery.php?msg=empty_date");die();
}







?>