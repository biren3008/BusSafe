<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['email']) || empty($_POST['password'])) {
		//echo 'Email ID or Password is invalid';
		$error = "Please Fill Up Username or Password";
	}
else
{
// Define $username and $password
$Email=$_POST['email'];
$Password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$Email = stripslashes($Email);
$Password = stripslashes($Password);
$Email = mysql_real_escape_string($Email);
$Password = mysql_real_escape_string($Password);
// Selecting Database
$db = mysql_select_db("vehiclehire", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from vhcustomer where Email='$Email' AND Password='$Password'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$Email; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
//echo 'Email ID or Password is invalid';
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
}
?>