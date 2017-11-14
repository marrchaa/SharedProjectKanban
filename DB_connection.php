<?php
//all info about database 
$servername = "localhost";
$username = "root";
$password = "usbw";
$database_in_use ="2160870_sharedproject";
// makes the connection with the database 
$mysqli = new mysqli($servername, $username, $password, $database_in_use);

if ($mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

?>