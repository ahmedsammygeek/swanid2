<?php 

//session test
require 'check_admin.php';


//conection with database
require '../connection/conn.php';
//check if data recived or no 
if (!empty($_POST['name'])) {
	$name = $_POST['name'];
	$the_name = explode(' ' , $name);
	$frist_name = $the_name[0];
	$second_name= $the_name[1];
	$last_name = $the_name[2];
	if (empty($frist_name) || empty($second_name) || empty($last_name)) {
		header("location: add_participant.php?msg=empty_data_name");die();
	}

	if (!empty($_POST['age'])) {
		$age = $_POST['age'];
		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
			if (!empty($_POST['mobile'])) {
				$mobile = $_POST['mobile'];
				$academy = $_POST['academic_qualification'];
				if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
					header("location: add_participant.php?msg=error_email");die();
				}
				if (!empty($_POST['date'])) {
					$date = $_POST['date'];


					$query = mysqli_query($connect , "INSERT INTO applicants VALUES ('' , '$frist_name' , '$second_name'
					,'$last_name' , '$age' , '$email' , '$mobile' , '$academy' , '$date') ");


				if ($query) {
					header("location: participants.php?msg=inserted");die();
				}

				header("location: add_participant.php?msg=error");die();


				}
				else
				{
					header("location: add_participant.php?msg=empty_data");die();

				}

			}
			else
			{
				header("location: add_participant.php?msg=empty_data");die();

			}
		}
		else
		{
			header("location: add_participant.php?msg=empty_data");die();

		}
	}
	else
	{
		header("location: add_participant.php?msg=empty_data");die();

	}
}
else
{
	header("location: add_participant.php?msg=empty_data");die();
}


?>