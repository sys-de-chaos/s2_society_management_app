
<?php

require_once('db_config.php');
session_start();

if ( !isset($_POST['username'], $_POST['password']) ) 
{	
	exit('Please fill both the username and password fields!');
}//chicking if the username or password are empty

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $name = mysqli_real_escape_string($conn,$_POST['username']);
   $pass = mysqli_real_escape_string($conn,$_POST['password']);
  

   $sql = "SELECT * FROM users WHERE username = '$name'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $id = $row['id'];
   $username = $row['username'];
   $p = $row['password'];
   $has_row = mysqli_num_rows($result);
   if(password_verify($_POST['password'], $p))
   {
   	$_SESSION['log_in_user'] = $id;
   	$_SESSION['Log_in_user_name'] = $username;
   	header("location: homepage.php");
   }
   else
   {
   	echo("Please Enter Correct Password and Username");
   }
}
?>

