<?php 
if (isset($_GET['id'])) {
	$gallery_id=$_GET['id'];
}

//conection with database
require 'connection/conn.php';
//check if data recived or no 
if (!empty($_POST['name'])) {
	$name = $_POST['name'];
	$the_name = explode(' ' , $name);
	$frist_name = $the_name[0];
	$second_name= $the_name[1];
	$last_name = $the_name[2];
	if (empty($frist_name) || empty($second_name) || empty($last_name)) {
		header("location: add_applicant_gallery.php?msg=empty_data_name&id=$gallery_id");die();
	}

	if (!empty($_POST['age'])) {
		$age = $_POST['age'];
		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
			if (!empty($_POST['mobile'])) {
				$mobile = $_POST['mobile'];
				$academy = $_POST['qualification'];
				$how = $_POST['how'];
				$description = $_POST['description'];
				if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
					header("location: add_applicant_gallery.php?msg=error_email&id=$gallery_id");die();
				}
				


					$query = mysqli_query($connect , "INSERT INTO applicants_gallery VALUES ('' , '$frist_name' , '$second_name'
					,'$last_name' , '$age' , '$email' , '$mobile' , '$academy' , '$gallery_id' , '$how' , '$description') ");


				if ($query) {
					header("location: gallerys.php?msg=inserted");die();
				}

				header("location: add_applicant_gallery.php?msg=error&id=$gallery_id");die();


			}
			else
			{
				header("location: add_applicant_gallery.php?msg=empty_data&id=$gallery_id");die();

			}
		}
		else
		{
			header("location: add_applicant_gallery.php?msg=empty_data&id=$gallery_id");die();

		}
	}
	else
	{
		header("location: add_applicant_gallery.php?msg=empty_data&id=$gallery_id");die();

	}
}
else
{
	header("location: add_applicant_gallery.php?msg=empty_data&id=$gallery_id");die();
}






 ?>