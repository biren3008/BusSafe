<?php

	include 'connection.php';
	
	$e_name = $_POST['name'];
	$e_email = $_POST['email'];
	$e_mobile_number = $_POST['mobile_number'];
	$e_pick_up_date = $_POST['pick_up_date'];
	$e_pick_up_city = $_POST['pick_up_city'];
	$e_pick_up_address = $_POST['pick_up_address'];
	$e_drop_location = $_POST['drop_location'];
	
	if(!$_POST['submit']){
		echo "Please Fill Out The Form";
		header('Location: p_easycabs.php');
	}
	else{
		mysql_query("INSERT INTO `VehicleHire`.`showeasycabs` (`ID` ,`Name` ,`Email` ,`Mobile Number` ,`Pick Up Date` ,`Pick Up City` ,`Pick Up Address` ,`Drop Location`)
		VALUES(NULL,'$e_name','$e_email','$e_mobile_number','$e_pick_up_date','$e_pick_up_city','$e_pick_up_address','$e_drop_location')") or die(mysql_error());
		echo "User has been Added";
		header('Location: show_easycabs.php');
	}

?>