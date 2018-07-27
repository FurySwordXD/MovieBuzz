<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "MovieBuzz";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "CREATE DATABASE ".$database;

if($conn->query($sql))
{
	echo "DB Created!";
	$sql = "CREATE TABLE ". $database .".Movies (Name VARCHAR(50) NOT NULL, Genre VARCHAR(20))";
	if($conn->query($sql))
	{
		echo "Created Table";
	}
}
else
{
	$sql = "USE ".$database;
	if($conn->query($sql))
	{
		echo "Using ".$database;


	}
}
?>