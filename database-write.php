<?php
	$firstname = Trim(stripslashes($_POST['firstname']));
	$lastname = Trim(stripslashes($_POST['lastname']));
	$email = Trim(stripslashes($_POST['email']));
	$phone = Trim(stripslashes($_POST['phone']));
	$message = Trim(stripslashes($_POST['message']));

	// 1. Create a database connection
	include 'db-info.php';

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$query = "INSERT INTO contacts (first_name, last_name, email, phone, message)
VALUES ('$firstname', '$lastname', '$email', '$phone', '$message')";

	$result = mysqli_query($connection, $query);
	$NumberOfRowsAffected = mysqli_affected_rows($connection);
	if($NumberOfRowsAffected < 1 ) {
	 die('No records were written to the database. Waaaa!');
	} 
	mysqli_close($connection);
	header("Location: database-read.php");
 ?>