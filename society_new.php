<?php

require_once('db_config.php');
if(isset($_POST['add'])) // when click on Update button
{

	if ($stmt = $conn->prepare('INSERT INTO society (society_name, society_address, society_manager, society_population, society_facilities) VALUES (?, ?, ?, ?, ?)')) {
	
	$stmt->bind_param('sssss', $_POST['name'], $_POST['address'],$_POST['manager'], $_POST['population'], $_POST['facilities']);
	$stmt->execute();
	echo 'You have successfully added another society';
	mysqli_close($conn); // Close connection
    header("location:society.php"); // redirects to all records page
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
<title>New Society</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="style2.css">

</head>
<body>
<div class="signup-form">

    <form  method="post">
		<h2>Add a new Society</h2>
		<p>Please fill all the columns</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-home"></i></span>
				<input type="text" class="form-control" name="name"  placeholder="Name" required="required" >
			</div>
        </div>
  		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
				<input type="text" class="form-control" name="address"  placeholder="Address" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="manager"  placeholder="Manager" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-users"></i></span>
				<input type="text" class="form-control" name="population"placeholder="Population">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-futbol-o"></i></span>
				<input type="text" class="form-control" name="facilities"  placeholder="Facilities">
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

