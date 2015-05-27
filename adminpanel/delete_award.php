<?php 
//session test
require 'check_admin.php';
//conection with database
require '../connection/conn.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
$query = mysqli_query($connect , "DELETE FROM certification_and_awards WHERE id = '$id'");
if ($query) {
	header("location: awards.php?msg=deleted");die();
}
header("location: awards.php?msg=error");die();
 ?>