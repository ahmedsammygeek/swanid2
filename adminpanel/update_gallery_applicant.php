<?php 
//session test
require 'check_admin.php';
//get id from link
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}
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
		header("location: edit_gallery_applicant.php?msg=empty_data_name&id=$id");die();
	}
	if (!empty($_POST['age'])) {
		$age = $_POST['age'];
		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
			if (!empty($_POST['mobile'])) {
				$mobile = $_POST['mobile'];
				if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
					header("location: edit_gallery_applicant.php?msg=error_email&id=$id");die();
				}
				$query = mysqli_query($connect , "UPDATE applicants_gallery SET   
						 frist_name='$frist_name' , second_name='$second_name'
	                     ,last_name='$last_name' , age='$age' , emai='$email' , mobile='$mobile' WHERE id = '$id' ");


				if ($query) {
					header("location: gallery_applicants.php?msg=inserted");die();
				}

				header("location: edit_gallery_applicant.php?msg=error&id=$id");die();


			}
			else
			{
				header("location: edit_gallery_applicant.php?msg=empty_data&id=$id");die();

			}
		}
		else
		{
			header("location: edit_gallery_applicant.php?msg=empty_data&id=$id");die();

		}
	}
	else
	{
		header("location:edit_gallery_applicant.php?msg=empty_data&id=$id");die();

	}
}

 ?>