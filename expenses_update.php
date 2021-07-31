<?php

include "db_config.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from expense where expense_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $expense_name = $_POST['name'];
    $expense_amount = $_POST['amount'];
	$expense_due_date = $_POST['due'];
	
    $edit = mysqli_query($conn,"update expense set expense_name='$expense_name', expense_amount='$expense_amount',expense_due_date='$expense_due_date' where expense_id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:expenses.php"); // redirects to all records page
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
        header("location:expenses.php"); // redirects to all records page		
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
<title>Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="style2.css">
	
</head>
<body>
<div class="signup-form">

    <form  method="post">
		<h2>Update an Expense</h2>
		<p>Please fill in the details to be updated</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-anchor"></i></span>
				<input type="text" class="form-control" name="name" value="<?php echo $data['expense_name'] ?>" placeholder="Name" >
			</div>
        </div>
  		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-money"></i></span>
				<input type="text" class="form-control" name="amount" value="<?php echo $data['expense_amount'] ?>" placeholder="Amount">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
				<input type="text" class="form-control" name="due" value="<?php echo $data['expense_due_date'] ?>" placeholder="Due Date">
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

