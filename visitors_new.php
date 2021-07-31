<?php

require_once('db_config.php');
if(isset($_POST['add'])) // when click on Update button
{

	if ($stmt = $conn->prepare('INSERT INTO visitors (visitor_name, visitor_destination, visitor_reason, visitor_in_date, visitor_out_date) VALUES (?, ?, ?, ?, ?)')) {
	
	$stmt->bind_param('sssss', $_POST['name'], $_POST['dest'],$_POST['reason'], $_POST['indate'], $_POST['outdate']);
	$stmt->execute();
	echo 'You have successfully added another visit';
	mysqli_close($conn); // Close connection
    header("location:visitors.php"); // redirects to all records page
    exit;
} else {	
	echo 'Could not prepare statement!';
}
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>New Visitor</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="signup-form">

    <form  method="post">
		<h2>Add a new Visit</h2>
		<p>Please fill in the details to be uploaded</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="name" placeholder="Name" required="required">
			</div>
        </div>
  		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-home"></i></span>
				<input type="text" class="form-control" name="dest" placeholder="Destination" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
				<input type="text" class="form-control" name="reason" placeholder="Reason" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
				<input type="datetime-local" class="form-control" name="indate" placeholder="In Date" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
				<input type="datetime-local" class="form-control" name="outdate" placeholder="Out Date" required="required">
			</div>
        </div>
		<div class="form-group">
        </div>
 		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" name="add" value="add">Add</button>
         <button type="submit" class="btn btn-primary btn-lg" name="cancel" value="cancel">Cancel</button>
		</div>
		
    </form>
	
</div>
</body>
</html>

