<?php

	$email = $_POST['Email'];
	$passwd = $_POST['Password'];

	include 'dbconnection.php';

	$sql = "SELECT * FROM users WHERE Email = '" . $email . "' AND Password = '" . $passwd . "'";

	echo $sql;

	$result = $conn->query($sql);
	
	foreach ($result as $row) {
		echo "Logged in";
	}
?>