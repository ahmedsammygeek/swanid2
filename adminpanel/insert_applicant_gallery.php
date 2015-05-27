<?php 
require '../connection/conn.php';



foreach ($_POST as $key => $value) {
	if(empty($value)) {
		header('location: add_applicant_gallery.php?msg=empty_data');
	}
}
extract($_POST);


	$the_name = explode(' ' , $name);
	$frist_name = $the_name[0];
	$second_name= $the_name[1];
	$last_name = $the_name[2];
	if (empty($frist_name) || empty($second_name) || empty($last_name)) {
		header("location: add_applicant_gallery.php?msg=empty_data_name");die();
	}

if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
	header("location: add_applicant_gallery.php?msg=error_email");die();
}


$query = mysqli_query($connect , "INSERT INTO applicants_gallery VALUES ('' , '$frist_name' , '$second_name'
	,'$last_name' , '$age' , '$email' , '$mobile' , '$qualification' , '$gallery_id' , '$how' , '$description' , '$card_number') ");


if ($query) {
	header("location: gallery_applicants.php?msg=inserted");die();
}

header("location: add_applicant_gallery.php?msg=error");die();

?>