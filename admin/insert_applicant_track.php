<?php 

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
		header("location: add_applicant_track.php?msg=empty_data_name&id=$track_id");die();
	}

	if (!empty($_POST['age'])) {
		$age = $_POST['age'];
		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
			if (!empty($_POST['mobile'])) {
				$mobile = $_POST['mobile'];
				$academy = $_POST['qualification'];
				$certification=$_POST['certification'];
				$track_id = $_POST['track_id'];
				if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
					header("location: add_applicant_track.php?msg=error_email&id=$track_id");die();
				}

				if(!isset($_POST['card_number']) || empty($_POST['card_number'])) {
					header("location: add_applicant_career.php?msg=empty_data");die();
				}
				

				$card_number = $_POST['card_number'];
				


					$query = mysqli_query($connect , "INSERT INTO applicants VALUES ('' , '$frist_name' , '$second_name'
					,'$last_name' , '$age' , '$email' , '$mobile' , '$academy' , '$track_id' , '$certification' , '$card_number') ");


				if ($query) {
					header("location: track_applicants.php?msg=inserted");die();
				}

				header("location: add_applicant_track.php?msg=error&id=$track_id");die();


			}
			else
			{
				header("location: add_applicant_track.php?msg=empty_data&id=$track_id");die();

			}
		}
		else
		{
			header("location: add_applicant_track.php?msg=empty_data&id=$track_id");die();

		}
	}
	else
	{
		header("location: add_applicant_track.php?msg=empty_data&id=$track_id");die();

	}
}
else
{
	header("location: add_applicant_track.php?msg=empty_data&id=$track_id");die();
}







 ?>