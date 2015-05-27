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
if (empty($_POST['title']) || empty($_POST['content'])) {
	header("location: edit_job.php?msg=empty_data&id=$id"); die();
}
$title = $_POST['title'];
$content = $_POST['content'];
//update careers
$query = mysqli_query($connect , "UPDATE careers SET title='$title',content='$content' WHERE id = '$id'");
if ($query) {
	header("location: jobs.php?msg=updated");die();
}
header("location: jobs.php?msg=error&id=$id");die();





 ?>