<?php
//database name Qwicklearnusers connection
$dbname = 'QwikLearnUsers'; 
//username and password for the database 
$user = 'postgres'; $pass = '1234567890';  
//creating a connection to the database using pgsql_connect() function. If the connection fails, it will display an error message.
//creating a connection object  
$conn = pg_connect("host=localhost port=5432 dbname=$dbname user=$user password=$pass");   
if(!($conn)) { die('Not connected'); } //If not connected, stop loading the page.        
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="styleSheet.css"/>
</head>
<body>
<?php include "header.inc"; ?>
<!--Form to sign up-->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validate()">
	<h1>Sign Up</h1><br/>
	First Name: <input type="text" id="fName" name="firstName" required/><br/>
	Last Name: <input type="text" id="lName" name="lastName" required/><br/>
	Email Address: <input type="email" id="eMail" name="email" required/><br/>
    Password: <input type="password" id="pWord" name="password" pattern=".{8,}" title="Must contain at least 8 characters" required/><br/>
	Password: <input type="password" id="pWord" name="password" pattern=".{8,}" title="Must contain at least 8 characters." required/><br>

    