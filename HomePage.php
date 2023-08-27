<?php

	session_start();

?>

<html>
	<head>
		<title>Home Page</title>
	</head>
	<body>
		
		<?php  
 
	echo "You are entered to the system as " . $_SESSION['client_full_name'];
	echo '<a href="LOGOUT.php"> logout</a>';// logout system
	echo '<a href="output.php"> client</a>';//output client data
 
?>
	</body>
</html>