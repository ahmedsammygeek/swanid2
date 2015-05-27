<?php 
//session test
require 'check_admin.php';


//conection with database
require '../connection/conn.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
$query = mysqli_query($connect , "DELETE FROM events WHERE id = '$id'");
if ($query) {
	header("location: events.php?msg=deleted");die();
}
header("location: events.php?msg=error");die();





 ?>