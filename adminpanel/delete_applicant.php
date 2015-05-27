<?php 
//session test
require 'check_admin.php';


//conection with database
require '../connection/conn.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}


$type = $_GET['type'];

$go_to = '';
switch ($type) {
	case 'career':
		$table_name = 'applicants_careers';
		$go_to = 'career_applicants';
		break;

		case 'track':
		$table_name = 'applicants';
		$go_to = 'track_applicants';

		break;


		case 'event':
		$table_name = 'applicants_events';
		$go_to = 'event_applicants';

		break;


		case 'gallery':
		$table_name = 'applicants_gallery';
		$go_to = 'gallery_applicants';

		break;
	
	default:
		# code...
		break;
}

$query = mysqli_query($connect , "DELETE FROM $table_name WHERE id = '$id'");
if ($query) {
	header("location: ".$go_to.".php?msg=deleted");die();
}
header("location: ".$go_to.".php?msg=error");die();





 ?>