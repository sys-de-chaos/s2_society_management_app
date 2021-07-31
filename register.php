<?php

require_once('db_config.php');

if (!isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['location'])) {
	
	exit('Please complete the registration form!');
}

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])|| empty($_POST['location'])) {

	exit('Please complete the registration form');
}

//checking for duplicate account in the database

if ($stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ?')) {
	if (strlen($_POST['password']) < 5) 
	{
	exit('Password must be between 5 and 20 characters long!');
	}
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'Username exists, please choose another!';
	} else {
		// Username doesnt exists, insert new account
	if ($stmt = $conn->prepare('INSERT INTO users (username, password, email, location) VALUES (?, ?, ?, ?)')) {
	
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$stmt->bind_param('ssss', $_POST['username'], $password, $_POST['email'],$_POST['location']);
	$stmt->execute();
	echo 'You have successfully registered, you can now login!';
} else {
	
	echo 'Could not prepare statement!';
}
	}
	$stmt->close();
} else {
	
	echo 'Could not prepare statement!';
}
$conn->close();
?>

