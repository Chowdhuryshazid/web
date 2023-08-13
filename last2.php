

<?php


	$fname=$_POST['fName'];
	$lname=$_POST['lName'];
	$email=$_POST['eMail'];
	$phone=$_POST['pHone'];
    $tell=$_POST['tell'];


	echo $fname;
	echo $lname;
	echo $email;
	echo $phone;
    echo $tell;




	$link = mysqli_connect("localhost","root", "", "new");

	if($link===false){
		die("ERROR: could not connect." . mysqli_connect_error());
	}

   $sql  = "INSERT INTO now (firstName,lastName,email,phone,tellus) VALUES ('$fname','$lname','$email','$phone','$tell')";

	if(mysqli_query($link, $sql))
	{
		echo "Records added successfully.";
	} else{
		echo "ERROR: could not able to execute $sql." . mysqli_error($link);
	}

	mysqli_close($link);
?>
