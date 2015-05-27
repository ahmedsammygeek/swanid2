<?php 
//session test
require 'check_admin.php';


//conection with database
require '../connection/conn.php';
//get id from link
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
 
// check if inputs empty
if (empty($_POST['title']) || empty($_POST['content']) || empty($_POST['date']) || empty($_POST['address'])) {
	header("location: edit_event.php?msg=empty_data&id=$id"); die();
}
$title = $_POST['title'];
$content = $_POST['content'];
$date = $_POST['date'];
$address = $_POST['address'];
//update eventss
$query = mysqli_query($connect , "UPDATE events SET title='$title',details='$content',`date`='$date',address='$address' WHERE id = '$id'");
if ($query) {
	header("location: events.php?msg=updated");die();
}
header("location: events.php?msg=error&id=$id");die();





 ?>