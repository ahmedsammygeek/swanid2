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
	header("location: edit_track.php?msg=empty_date&id=$id"); die();
}
$title = $_POST['title'];
$content = $_POST['content'];
//update careers
$query = mysqli_query($connect , "UPDATE tracks SET name='$title',details='$content' WHERE id = '$id'");
if ($query) {
	header("location: tracks.php?msg=updated");die();
}
header("location: tracks.php?msg=error&id=$id");die();





 ?>