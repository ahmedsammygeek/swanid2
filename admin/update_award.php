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
if (empty($_POST['title']) || empty($_POST['content']) ) {
	header("location: edit_award.php?id=$id&msg=empty_data"); die();
}
$title = $_POST['title'];
$content = $_POST['content'];
$event_id = $_POST['event_id'];

//update awards
$query = mysqli_query($connect , "UPDATE certification_and_awards SET title='$title',description='$content',event_id='$event_id' WHERE id = '$id'");
if ($query) {
	header("location: awards.php?msg=updated");die();
}
header("location: awards.php?msg=error&id=$id");die();





 ?>