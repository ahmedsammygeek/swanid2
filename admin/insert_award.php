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
		$event_id=$_POST['event_id'];
		$query = mysqli_query($connect , "INSERT INTO certification_and_awards values ('' , '$title' , '$content' , '$event_id') ");
		if ($query) {
			header("location: awards.php?msg=data_inserted");die();
		}
		header("location: add_award.php?msg=error");die();

	}
	else
	{
		header("location: add_award.php?msg=empty_date");die();

	}

}
else
{
	header("location: add_award.php?msg=empty_date");die();
}







?>