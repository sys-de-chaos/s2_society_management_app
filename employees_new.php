<?php

require_once('db_config.php');
if(isset($_POST['add'])) // when click on Update button
{

	if ($stmt = $conn->prepare('INSERT INTO employees (employees_name, employees_age, employees_occupation, employees_hourly_rate, society_id ) VALUES (?, ?, ?, ?, ?)')) {
	
	$stmt->bind_param('sssss', $_POST['name'], $_POST['age'],$_POST['occupation'], $_POST['rate'], $_POST['society_id']);
	$stmt->execute();
	echo 'You have successfully added another Employee';
	mysqli_close($conn); // Close connection
    header("location:employees.php"); // redirects to all records page
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
<title>New Employee</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="style2.css">

</head>
<body>
<div class="signup-form">

    <form  method="post">
		<h2>Add a new Employee</h2>
		<p>Please fill all the columns</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="name"  placeholder="Name" required="required" >
			</div>
        </div>
  		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-male"></i></span>
				<input type="text" class="form-control" name="age"  placeholder="Age" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
				<input type="text" class="form-control" name="occupation"  placeholder="Occupation" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-money"></i></span>
				<input type="text" class="form-control" name="rate"placeholder="Hourly Rate">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-home"></i></span>
				<input type="text" class="form-control" name="society_id"  placeholder="Society(s) Responsible">
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
