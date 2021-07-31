<?php

include "db_config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from tennants where tennants_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['delete'])) // when click on Update button
{	
    $edit = mysqli_query($conn,"delete from tennants where tennants_id = '$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:owners.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}

elseif(isset($_POST['cancel'])) 
{
		mysqli_close($conn); // Close connection
        header("location:owners.php"); // redirects to all records page		
        exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Tennant Delete</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	body {
		color: #fff;
		background: #74BDCB;
		font-family: 'Roboto', sans-serif;
	}
	.form-control, .form-control:focus, .input-group-addon {
		border-color: #e1e1e1;
	}
    .form-control, .btn {        
        border-radius: 3px;
    }
	.signup-form {
		width: 450px;
		margin: 0 auto;
		padding: 200px 0;
	}
    .signup-form form {
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }
	.signup-form .form-group {
		margin-bottom: 20px;
	}
	.signup-form label {
		font-weight: normal;
		font-size: 13px;
	}
	.signup-form .form-control {
		min-height: 38px;
		box-shadow: none !important;
	}	
	.signup-form .input-group-addon {
		max-width: 42px;
		text-align: center;
	}
	.signup-form input[type="checkbox"] {
		margin-top: 2px;
	}   
    .signup-form .btn{        
        font-size: 18px;
       
		background: #e03a3c;
		border: none;
		min-width: 140px;
		transition: 0.3s;
    }
	.signup-form .btn:hover, .signup-form .btn:focus {
		background-color:rgba(255, 0, 0, 0.6);
        outline: none;
	}
	.signup-form a {
		color: #fff;	
		text-decoration: underline;
	}
	.signup-form a:hover {
		text-decoration: none;
	}
	.signup-form form a {
		color: #19aa8d;
		text-decoration: none;
	}	
	.signup-form form a:hover {
		text-decoration: underline;
	}
	.signup-form .fa {
		font-size: 21px;
	}
	.signup-form .fa-paper-plane {
		font-size: 18px;
	}
	.signup-form .fa-check {
		color: #fff;
		left: 17px;
		top: 18px;
		font-size: 7px;
		position: absolute;
	}
</style>
</head>
<body>
<div class="signup-form">

    <form  method="post">
		<h2>Delete a Tennant</h2>
		<p>Are you sure you want to delete the Tennant: <?php echo $data['tennants_name'] ?> </p>
		<hr>
 		<div class="form-group">
         <button type="submit" class="btn btn-primary btn-lg" name="delete" value="delete">Delete</button>
         <button type="submit" class="btn btn-primary btn-lg" name="cancel" value="cancel">Cancel</button>
		</div>
		
    </form>
	
</div>
</body>
</html>
