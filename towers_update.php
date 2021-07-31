<?php

include "db_config.php"; // Using database connection file here

$id = $_GET['towers_id']; // get id through query string

$qry = mysqli_query($conn,"select * from towers where towers_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{	$society_id = $_POST['society_id']; 
    $towers_name = $_POST['name'];
    $towers_address = $_POST['address'];
    $towers_population = $_POST['population'];
	$towers_facilities = $_POST['facilities'];
	
    $edit = mysqli_query($conn,"update towers set towers_name='$towers_name', towers_address='$towers_address', towers_population='$towers_population', towers_facilities='$towers_facilities'  where towers_id='$id'");
	
    if($edit)
    {  
        mysqli_close($conn); // Close connection
        header("location:towers.php?society_id='$society_id'"); // redirects to all records page
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
        header("location:towers.php?society_id='$society_id'"); // redirects to all records page		
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
<title>Tower Update</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="style2.css">

</head>
<body>
<div class="signup-form">

    <form  method="post">
		<h2>Update a Tower</h2>
		<p>Please fill in the details to be updated</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-home"></i></span>
				<input type="text" class="form-control" name="name" value="<?php echo $data['towers_name'] ?>" placeholder="Name" >
			</div>
        </div>
  		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
				<input type="text" class="form-control" name="address" value="<?php echo $data['towers_address'] ?>" placeholder="Address">
			</div>
        </div>
		
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-users"></i></span>
				<input type="text" class="form-control" name="population" value="<?php echo $data['towers_population'] ?>" placeholder="Population">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-cc"></i></span>
				<input type="text" class="form-control" name="society_id" value="<?php echo $data['society_id'] ?>" placeholder="Society Id">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-futbol-o"></i></span>
				<input type="text" class="form-control" name="facilities" value="<?php echo $data['towers_facilities'] ?>" placeholder="Facilities">
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
