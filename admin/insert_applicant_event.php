<?php 
require '../connection/conn.php';



foreach ($_POST as $key => $value) {

	if(empty($value)) {
		header('location: add_applicant_event.php?msg=empty_data');
		die();
	}
}

// die();
extract($_POST);


	$the_name = explode(' ' , $name);
	$frist_name = $the_name[0];
	$second_name= $the_name[1];
	$last_name = $the_name[2];
	if (empty($frist_name) || empty($second_name) || empty($last_name)) {
		header("location: add_applicant_event.php?msg=empty_data_name");die();
	}

if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
	header("location: add_applicant_event.php?msg=error_email");die();
}


$query = mysqli_query($connect , "INSERT INTO applicants_events VALUES ('' , '$frist_name' , '$second_name'
	,'$last_name' , '$age' , '$email' , '$mobile' , '$qualification' , '$event_id'  , '$description' , '$card_number') ");


if ($query) {
	header("location: event_applicants.php?msg=inserted");die();
}

header("location: add_applicant_event.php?msg=error");die();

?>