<?php 

require 'check_admin.php';

//conection with database
require '../connection/conn.php';
//check if data recived or no 
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}

if (!empty($_POST['sponser_name'])) {
	$sponser_name = $_POST['sponser_name'];
		// var_dump($sponser_name);die();
	if (!empty($_POST['mobile'])) {
		$mobile = $_POST['mobile'];
		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
			
			if (empty($_POST['money']) || empty($_POST['card_id'])) {
				header("location: edit_sponser.php?msg=empty_data");die();

			}
			$money = $_POST['money'];
			$card_id = $_POST['card_id'];
			if (filter_var($email , FILTER_VALIDATE_EMAIL)) {
				if (!empty($_POST['third_name'])) {
					$third_name=$_POST['third_name'];
					$the_name = explode(" ", $third_name);
					$frist_name = $the_name[0];
					$second_name = $the_name[1];
					$last_name = $the_name[2];
					if (empty($frist_name) ||empty($second_name) || empty($last_name)) {
						header("location: edit_sponser.php?msg=empty_data_name&id=$id");die();
					}
					$query = mysqli_query($connect , "UPDATE sponsor SET sponsor_name='$sponser_name',`money`='$money',mobile='$mobile',email='$email',card_id='$card_id',
						frist_name='$frist_name',second_name='$second_name',last_name='$last_name' WHERE id='$id' ");
				if ($query) {
					header("location: sponsers.php?msg=updated");die();
				}
				header("location: edit_sponser.php?msg=error&id=$id");die();
				}
				else
				{
					header("location: edit_sponser.php?msg=empty_data&id=$id");die();
				}
			
			}
			else
			{
				header("location: edit_sponser.php?msg=error_email&id=$id");die();

			}
		}
		else
		{
			header("location: edit_sponser.php?msg=empty_data&id=$id");die();

		}
	}
	else
	{
		header("location: edit_sponser.php?msg=empty_data&id=$id");die();

	}


}
else
{
	header("location: edit_sponser.php?msg=empty_data&id=$id");die();

}










?>