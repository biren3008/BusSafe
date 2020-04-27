<?php

	include 'connection.php';
	
	$name = $_POST['inputName'];
	$email = $_POST['inputEmail'];
	$password = $_POST['inputPassword'];	
	$gender = $_POST['inputGender'];
	$address = $_POST['inputAddress'];
	$mobilenumber = $_POST['inputMobilenumber'];
	$country = $_POST['inputCountry'];

	
	if(!$_POST['submit']){
		echo "please fill out the form";
		header('Location: form.php');
	}
	else{
		mysql_query("INSERT INTO  `VehicleHire`.`VHCustomer` (`ID` ,`Name` ,`Email` ,`Password`,`Gender`,`Address`,`Mobile_Number`,`Country`)
					VALUES (NULL,'$name','$email','$password','$gender','$address','$mobilenumber','$country')") or die(mysql_error());
		echo "User has been Added";
		header('Location: index.php');
	}

?>