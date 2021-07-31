<?php

include "db_config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from events where event_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['delete'])) // when click on Update button
{
    $edit = mysqli_query($conn,"delete from events where event_id = '$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:events.php"); // redirects to all records page
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
        header("location:events.php"); // redirects to all records page		
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
<title>Event Delete</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="style2.css">
	
</style>
</head>
<body>
<div class="signup-form">

    <form  method="post">
		<h2>Delete an Event</h2>
		<p>Are you sure you want to delete the event: <?php echo $data['event_name'] ?> </p>
		<hr>
 		<div class="form-group">
         <button type="submit" class="btn btn-primary btn-lg" name="delete" value="delete">Delete</button>
         <button type="submit" class="btn btn-primary btn-lg" name="cancel" value="cancel">Cancel</button>
		</div>
		
    </form>
	
</div>
</body>
</html>
