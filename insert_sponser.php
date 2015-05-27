<?php 



//conection with database
require 'connection/conn.php';
//check if data recived or no 

if (!empty($_POST['sponser_name'])) {
	$sponser_name = $_POST['sponser_name'];
		// var_dump($sponser_name);die();
	if (!empty($_POST['mobile'])) {
		$mobile = $_POST['mobile'];
		if (!empty($_POST['email'])) {
			$email = $_POST['email'];
			$type = $_POST['type'];
			if (empty($_POST['money']) || empty($_POST['card_id'])) {
				header("location: add_sponser.php?msg=empty_data");die();

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
						header("location: add_sponser.php?msg=empty_data_name");die();
					}
					$query = mysqli_query($connect , "INSERT INTO sponsor VALUES ('' , '$sponser_name' , 
					'$money' , '$mobile' , '$email' , '$type' , '$card_id' , '$frist_name' , '$second_name' , '$last_name') ");
				if ($query) {
					header("location: add_sponser.php?msg=inserted");die();
				}
				header("location: add_sponser.php?msg=error");die();
				}
				else
				{
					header("location: add_sponser.php?msg=empty_data");die();
				}
			
			}
			else
			{
				header("location: add_sponser.php?msg=error_email");die();

			}
		}
		else
		{
			header("location: add_sponser.php?msg=empty_data");die();

		}
	}
	else
	{
		header("location: add_sponser.php?msg=empty_data");die();

	}


}
else
{
	header("location: add_sponser.php?msg=empty_data");die();

}










?>