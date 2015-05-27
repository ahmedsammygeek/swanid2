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
if (empty($_POST['address']) ||empty($_POST['title'])) {
	header("location: edit_gallery.php?msg=empty_data&id=$id"); die();
}
$address = $_POST['address'];
$title = $_POST['title'];
//update gallery
$query = mysqli_query($connect , "UPDATE gallery SET address='$address',title='$title'  WHERE id = '$id'");
if ($query) {
	header("location: gallery.php?msg=updated");die();
}
header("location: gallery.php?msg=error&id=$id");die();





?>