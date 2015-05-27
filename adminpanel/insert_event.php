<?php 
// session test
require 'check_admin.php';
//connection with database
require '../connection/conn.php';

//check if data empty 
if (!empty($_POST['title'])) {
	$title = $_POST['title'];
	if (!empty($_POST['address'])) {
		$address = $_POST['address'];
		if (!empty($_POST['date'])) {
			$date = $_POST['date'];
			if (!empty($_POST['content'])) {
				$content = $_POST['content'];


				$query = mysqli_query($connect , "INSERT INTO events VALUES ('' , '$title' , '$date' , '$address' , '$content') ");
				if ($query) {
					header("location: events.php?msg=data_inserted");die();
				}
				header("location: add_event.php?msg=error");die();

			}
			else
			{
				header("location: add_event.php?msg=empty_data");die();
			}
		}
		else
		{
			header("location: add_event.php?msg=empty_data");die();
		}
	}
	else
	{
		header("location: add_event.php?msg=empty_data");die();
	}
}
else
{
	header("location: add_event.php?msg=empty_data");die();
}








?>