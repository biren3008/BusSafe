<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("vehiclehire", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select Email from vhcustomer where Email='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['Email'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: home.php'); // Redirecting To Home Page
}
?>





