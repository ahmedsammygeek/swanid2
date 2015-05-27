<?php 
//session test
require 'check_admin.php';


//conection with database
require '../connection/conn.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
$query = mysqli_query($connect , "DELETE FROM careers WHERE id = '$id'");
if ($query) {
	header("location: jobs.php?msg=deleted");die();
}
header("location: jobs.php?msg=error");die();





 ?>