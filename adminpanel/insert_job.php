<?php 
//session test
require 'check_admin.php';


//conection with database
require '../connection/conn.php';
//check if data recived or no 
if (!empty($_POST['title'])) {
	$title = $_POST['title'];
	if (!empty($_POST['content'])) {
		$content = $_POST['content'];
		$query = mysqli_query($connect , "INSERT INTO careers values ('' , '$title' , '$content') ");
		if ($query) {
			header("location: jobs.php?msg=data_inserted");die();
		}
		header("location: add_job.php?msg=error");die();

	}
	else
	{
		header("location: add_job.php?msg=empty_date");die();

	}

}
else
{
	header("location: add_job.php?msg=empty_date");die();
}







?>