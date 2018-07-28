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
echo "Connected successfully! ";

function createDatabse()
{
	global $database, $conn;	
	$sql = "CREATE DATABASE ".$database;
	if($conn->query($sql))
	{
		echo "DB Created! ";
		return true;
	}
	return false;
}

function useDatabase()
{
	global $database, $conn;
	$sql = "USE ".$database;
	if($conn->query($sql))
	{
		echo "Using ".$database."! ";
		return true;
	}
	return false;
}

function createMoviesTable()
{
	global $database, $conn;
	$sql = "CREATE TABLE ". $database .".Movies (Name VARCHAR(50) NOT NULL, Genre VARCHAR(20))";
	if($conn->query($sql))
	{
		echo "Created table Movies ";
		return true;
	}
	return false;
}

// Main functionality

if(createDatabse())
{
	useDatabase();
	createMoviesTable();
}
else
{
	if(useDatabase())
	{
		if(createMoviesTable())
		{

		}
		else
		{
			echo "Table exists!";
		}
	}
}
?>