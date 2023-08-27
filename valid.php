<?php
	session_start();
	$IIN = $_POST["IIN"];
	$password = $_POST["password"];
	if (empty($IIN))//empty check,  if IIN input empty will output text below||validation
				{
					exit ("You must enter your IIN!");
				}
	elseif (empty($password))//empty check,  if password input empty will output text below||validatio
			{
				exit ("You must enter your password!");	

	include("connect.php");

	$searchIIN = mysqli_query($conn, "SELECT IDclient FROM clients WHERE IIN = '$IIN' && password = '$password' ");//searching same IIN and password in database
	$num=mysqli_num_rows($searchIIN);

	if ($num==1){//if it found it opens home page
		header('Location:HomePage.php');
	}
	else{//if it is not found it redirect to login
		header('Location:login.php');
	}
}

?>