<?php
session_start();
	
    		//header ('Location:HomePage.php');  // перенаправление на нужную страницу

	$IIN = $_POST["IIN"];
	$clientname = $_POST["clientname"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$password_confirm = $_POST["password_confirm"];
	$CardNumber = $_POST["CardNumber"];
	$ContactNumber = $_POST["ContactNumber"];

	if (empty($clientname))//check for empty |validation
			{
  				exit ("You must enter your name!");
			}
		elseif (empty($IIN))
			{
				exit ("You must enter your IIN!");
			}
		elseif (empty($email))
			{
				exit ("You must enter your email!");
			}
		elseif (empty($password))
			{
				exit ("You must enter your password!");
			}
		elseif (empty($password_confirm))
			{
				exit ("You must enter your password_confirm!");
			}
		elseif (empty($CardNumber))
			{
				exit ("You must enter your CardNumber!");
			}
		elseif (empty($ContactNumber))
			{
				exit ("You must enter your ContactNumber!");
			}			
				//check for empty end |validation
		if (strlen($password) < 6){//length check| validation
	 		exit ("Your password is too short!");
			}
		elseif (strlen($clientname) >25 ){
			exit ("Your name  is too long!");
			}
		elseif (strlen($CardNumber) !==16 ){
			exit ("Card number is wrong !");
			}
		elseif (strlen($ContactNumber) !== 12 && strlen($ContactNumber) !==11 ){
			exit ("Contact is wrong! ");
			}//length check end| validation

		if ($password !== $password_confirm) //check for password and password confirm similarity
			{
				die ('Passwords do not match'); 
			} 		
	
		include ("connect.php");				
 		$searchIIN = mysqli_query($conn, "SELECT IDclient FROM clients WHERE IIN = '$IIN'");
		$myrow = mysqli_fetch_array($searchIIN) ;
			//searching people in table clients with same IIN |verification

		if (!empty($myrow['IDclient'])) exit('Sorry but your IIN is exists');
			//if found that database contain same value we ouput that this iin registerd 
		$add = "INSERT INTO clients(client_full_name, IIN,email, contact_number, card, client_password)
		VALUES ('$clientname','$IIN','$email','$ContactNumber','$CardNumber','$password')";
			
		if (mysqli_query($conn, $add)) //record adding
			{
    		echo "New record created successfully";
    		$searchIIN = mysqli_query($conn, "SELECT * FROM clients WHERE IIN = '$IIN'");
			$myrow = mysqli_fetch_array($searchIIN) ;
    		$_SESSION['IDclient']=$myrow['IDclient'];
    		$_SESSION['client_full_name']=$clientname;//session enter
   			exit();
			} 
		else //output error if somthing goes wrong 
			{
    		echo "Error: " . $add . "<br>" . mysqli_error($conn);
			};

?>
