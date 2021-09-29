<?php
 require_once('db_config.php');
 session_start();
   
if ( !isset($_POST['tennants_name'], $_POST['password']) ) 
   {	
	  exit('Please fill both the username and password fields!');
   }

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $name = mysqli_real_escape_string($conn,$_POST['tennants_name']);
   $pass = mysqli_real_escape_string($conn,$_POST['password']); 

   $sql = "SELECT * FROM tennants WHERE tennants_name = '$name' and tennant_password = '$pass'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $id = $row['tennants_id'];
   $tennant_name = $row['tennants_name'];
   $has_row = mysqli_num_rows($result);
   echo $id;
   if($has_row == 1)
   {
   	$_SESSION['log_in_tenant'] = $id;
   	$_SESSION['Log_in_tenant_name'] = $tennant_name;
   	
   	header("location: tenant_homepage.php");
   }
   else
   {
   	echo("Please Enter Correct Details");
   }
}
?>

