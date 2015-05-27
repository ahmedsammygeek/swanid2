<?php 

//session test
require 'check_admin.php';


//conection with database
require '../connection/conn.php';
//check if data recived or no 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
if (!empty($_POST['name'])) {
	$name = $_POST['name'];
	$the_name = explode(' ' , $name);
	$frist_name = $the_name[0];
	$second_name= $the_name[1];
	$last_name = $the_name[2];
	if (empty($frist_name) || empty($second_name) || empty($last_name)) {
		header("location: add_participant.php?msg=empty_data_name&id=$id");die();
	}

	if (!empty($_POST['age'])) {
		$age = $_POST['age'];
		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
			if (!empty($_POST['mobile'])) {
				$mobile = $_POST['mobile'];
				$academy = $_POST['academic_qualification'];
				if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
					header("location: edit_participant.php?msg=error_email&id=$id");die();
				}
				if (!empty($_POST['date'])) {
					$date = $_POST['date'];


					//update query
				$query = mysqli_query($connect , "UPDATE participants SET frist_name='$frist_name',second_name='$second_name',last_name='$last_name',age='$age',email='$email',mobile='$mobile',academic_qualification='$academy',`date`='$date' WHERE id = '$id' ");
				

                 // query execute
				if ($query) {
					header("location: participants.php?msg=updated");die();
				}
				header("location: edit_participant?msg=error&id=$id");die();


				}
				else
				{
					header("location: edit_participant.php?msg=empty_data&id=$id");die();

				}

			}
			else
			{
				header("location: edit_participant.php?msg=empty_data&id=$id");die();

			}
		}
		else
		{
			header("location: edit_participant.php?msg=empty_data&id=$id");die();

		}
	}
	else
	{
		header("location: edit_participant.php?msg=empty_data&id=$id");die();

	}
}
else
{
	header("location: edit_participant.php?msg=empty_data&id=$id");die();
}


?>