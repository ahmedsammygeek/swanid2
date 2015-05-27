<?php

session_start();
$username=$_POST['username'];
$password=$_POST['password'];


if($username&&$password)
{

	require '../connection/conn.php';


	$query=mysqli_query($connect ,"SELECT * FROM admins where user_name='$username' ");

	$numrows=mysqli_num_rows($query);
//echo $numrows
// check if user exsists in the database 
	if($numrows!=0)
	{
		while( $row=mysqli_fetch_assoc($query))
		{
			$dbusername=$row['user_name'];
			$dbpassword=$row['password'];
		}
//chaeck ti see if username and password entered by the user match the details in the login table

		if($username==$dbusername&&$password==$dbpassword)
		{

			$_SESSION['logged_in'] = true;
			header("location: index.php");die();
		}
		else
		{
			header("location: login.html?msg=error");die();
		}
	}

	else
		header("location: login.html?msg=invalid_data");die();}

	else 
		header("location: login.html?msg=empty_data");die();
	?>