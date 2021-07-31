<?php

include "db_config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from visitors where visitor_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $visitor_name = $_POST['name'];
    $visitor_dest = $_POST['dest'];
	$visitor_reason = $_POST['reason'];
    $visitor_indate = $_POST['indate'];
	$visitor_outdate = $_POST['outdate'];
	
    $edit = mysqli_query($conn,"update visitors set visitor_name='$visitor_name', visitor_destination='$visitor_dest', visitor_reason='$visitor_reason', visitor_in_date='$visitor_indate', visitor_out_date='$visitor_outdate'  where visitor_id='$id'");
	
    if($edit)
    {
       	mysqli_close($conn); // Close connection
        header("location:visitors.php"); // redirects to all records page		
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
        header("location:visitors.php"); // redirects to all records page		
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
<title>Visitors Update</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="signup-form">

    <form  method="post">
		<h2>Update a Visitor</h2>
		<p>Please fill in the details to be updated</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="name" value="<?php echo $data['visitor_name'] ?>" placeholder="Name" >
			</div>
        </div>
  		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-home"></i></span>
				<input type="text" class="form-control" name="dest" value="<?php echo $data['visitor_destination'] ?>" placeholder="Destination">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
				<input type="text" class="form-control" name="reason" value="<?php echo $data['visitor_reason'] ?>" placeholder="Reason">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
				<input type="text" class="form-control" name="indate" value="<?php echo $data['visitor_in_date'] ?>" placeholder="In Date">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
				<input type="text" class="form-control" name="outdate" value="<?php echo $data['visitor_out_date'] ?>" placeholder="Out Date">
			</div>
        </div>
		<div class="form-group">
        </div>
 		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" name="update" value="Update">Update</button>
         <button type="submit" class="btn btn-primary btn-lg" name="cancel" value="cancel">Cancel</button>
		</div>
		
    </form>
	
</div>
</body>
</html>

