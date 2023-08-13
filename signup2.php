

<?php


	$fname=$_POST['fName'];
	$lname=$_POST['lName'];
	$email=$_POST['eMail'];
	$phone=$_POST['pHone'];

	echo $fname;
	echo $lname;
	echo $email;
	echo $phone;




	$link = mysqli_connect("localhost","root", "", "data");

	if($link===false){
		die("ERROR: could not connect." . mysqli_connect_error());
	}

   $sql  = "INSERT INTO none (firstName,lastName,email,phone) VALUES ('$fname','$lname','$email','$phone')";

	if(mysqli_query($link, $sql))
	{
		echo "Records added successfully.";
	} else{
		echo "ERROR: could not able to execute $sql." . mysqli_error($link);
	}

	mysqli_close($link);
?>
