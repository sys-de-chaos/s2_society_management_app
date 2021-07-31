
<?php
session_start();
require_once('db_config.php');

if ( !isset($_POST['username'], $_POST['password']) ) 
{	
	exit('Please fill both the username and password fields!');
}//chicking if the username or password are empty

if ($stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ?')) {
	
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();	
	$stmt->store_result();
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	
	if (password_verify($_POST['password'], $password)) {
		
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		header('Location: homepage.html');
	} else {
		// Incorrect password
		echo 'Incorrect username and/or password!';
	}
} else {
	// Incorrect username
	echo 'Incorrect username and/or password!';
}

	$stmt->close();
}
?>

