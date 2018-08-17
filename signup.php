<?php

	$name = $_POST['Name'];
	$age = $_POST['Age'];
	$email = $_POST['Email'];
	$passwd = $_POST['Password'];

	include 'dbconnection.php';

	$sql = "INSERT INTO users VALUES('" . $email . "', '" . $passwd . "', '" . $name . "', " . $age . ")";

	echo $sql;

	if($conn->query($sql))
	{
		echo "Added!";
	}
?>