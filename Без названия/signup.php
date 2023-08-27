<html>
<head>
     <style>

    body 
          {
  background-image: url('https://klike.net/uploads/posts/2019-11/1572612050_1.jpg');
          }
      </style>
</head>
<body>
 	<form action = "adduser.php" method = "POST">
		<div align="center" class="brd">
		<h2>SignUp </h2>
    <table >
		<tr> 
		    <td class="leftcol">Full Name:</td>
		    <td class="rightcol"><input type="text" id ="username" name="username" ></td>
	    </tr>
      	<tr>
		 	<td class="leftcol">IIN  </td>
		 	<td><input type="text" id ="IIN" name="IIN" ></td>
		</tr>
		<tr>
		 	<td>email</td>
		 	<td><input type = "text" id = "email" name = "email"></td>
		</tr>
		<tr>
		 	<td>Password:</td>
		 	<td><input type="password" id = "password" name="password" ></td>
		</tr>
		<tr>
		 	<td>Password confirm</td>
		 	<td><input type="password" id="password_confirm"name="password_confirm"></td>
		</tr> 
		<tr>
		 	<td>Card Number</td>
		 	<td><input type="text" id = "CardNumber" name="CardNumber" ></td>
		</tr>
		<tr>
		 	<td>Contact Number</td>
		 	<td> <input type="text" id = "ContactNumber" name="ContactNumber" ></td>
		</tr>
		<tr>
		 	<td>Captcha test</td>
		 	<td><input type="text" id ="Captcha" name="Captcha" ></td>
		</tr>
		     </table><br>
		        <input type="submit" name="submit" value="submit">
		        </div>
    </form> 
</body>
</html>