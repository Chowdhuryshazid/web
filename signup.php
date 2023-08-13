<!DOCTYPE html>
<html>
<head>
	<title> Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet"  href="signup1.css"/>
</head>
<body>
	<br>

<a href="home.php"><button class="Home" type="button"><h3>Home</h3></button></a>
 
  
	<h2 align="center"> Registration Form </h2> <br>
	<form action="signup2.php" method="POST">First name:


		<input type="text" name="fName"> <br> <br> <br>Last name:
		<input type="text" name="lName"> <br> <br> <br>

		Email:
		<input type="text" name="eMail"> <br> <br> <br>

	    Phone:
		<input type="text" name="pHone"> <br> <br> <br>



		


		<input type="hidden" name="form_submitted">
		<input type="submit" value="submit">
	</form>


</body>
</html>

