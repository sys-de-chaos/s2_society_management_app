<?php
session_start();
require_once('db_config.php');

if ( !isset($_POST['username'], $_POST['password']) ) 
{	
	exit('Please fill both the username and password fields!');
}//chicking if the username or password are empty

if ($stmt = $conn->prepare('SELECT tennants_id, tennant_password FROM tennants WHERE tennants_name = ?')) {
	
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();	
	$stmt->store_result();
if ($stmt->num_rows > 0) {
	$stmt->bind_result($tennants_id, $tennant_password);
	$stmt->fetch();
	
	if (password_verify($_POST['password'], $tennant_password)) {
		
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
        $username = $_POST['username'];
        $sql = "SELECT * FROM tennants WHERE tennants_name= '$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['tennants_name'] = $row['tennants_name'];   
            $_SESSION['society_id']= $row['society_id'];
            $_SESSION['tennants_id'] = $row['tennants_id'];
            }
        }
		header('Location: tenant_homepage.php');
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

