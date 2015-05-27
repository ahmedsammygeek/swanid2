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
		header("location: add_applicant_career.php?msg=empty_data_name");die();
	}

	if (!empty($_POST['age'])) {
		$age = $_POST['age'];
		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
			if (!empty($_POST['mobile'])) {
				$mobile = $_POST['mobile'];
				$academy = $_POST['qualification'];
				
				$career_id = $_POST['career_id'];
				if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
					header("location: add_applicant_career.php?msg=error_email");die();
				}

				if(!isset($_POST['card_number']) || empty($_POST['card_number'])) {
					header("location: add_applicant_career.php?msg=empty_data");die();
				}
				

				$card_number = $_POST['card_number'];
				$query = mysqli_query($connect , "INSERT INTO applicants_careers VALUES ('' , '$frist_name' , '$second_name'
					,'$last_name' , '$age' , '$email' , '$mobile' , '$academy' , '$career_id' , '$card_number') ");


				if ($query) {
					header("location: career_applicants.php?msg=inserted");die();
				}

				header("location: add_applicant_career.php?msg=error");die();


			}
			else
			{
				header("location: add_applicant_career.php?msg=empty_data");die();

			}
		}
		else
		{
			header("location: add_applicant_career.php?msg=empty_data");die();

		}
	}
	else
	{
		header("location: add_applicant_career.php?msg=empty_data");die();

	}
}
else
{
	header("location: add_applicant_career.php?msg=empty_data");die();
}







?>