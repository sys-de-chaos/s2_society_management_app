<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Expense</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="tenant_homepage.html">Tenant Help Portal<span>.</span></a></h1>
    

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href=""><span>Conversation </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="">Complaints</a></li>
            </ul>
          </li>
          <li><a class="active" href="tenant_expenses.php">Expenses</a></li>
          <li><a href="tenant_events.php">Events</a></li>
          <li><a href="tenant_mydetails.php">MyDetails</a></li>

           
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
	
      <a href="logout.php" class="get-started-btn scrollto">Logout</a>
    </div>
  </header><!-- End Header -->
<br>
<br>
<br><br><br><br>


    <div class="container">
            <div class="row">
                <h3>Expenses for the society</h3>
                <h6>-Expenses highlighted in red are due with-in a fortnight</h6>
                <h6>-Please contact the person in charge for more information</h6>
            </div>
			<br>
            <div class="row">
                <p>
                    <a href="expenses_data.php" class="btn btn-warning">Expenses Data</a>
                    <a href="expenses_report.php" class="btn btn-secondary">Expenses Report</a>
                    <form class="form-inline" method="post" action="expenses_search.php">
                        <input type="text" name="date" class="form-control" placeholder="YYYY--MM-DD">&ensp;
                        <button type="submit" name="save" class="btn btn-primary">Search</button>
                    </form> 
                </p>
                 
                <table class="table table-bordered">
                      <thead>
                        <tr>
						  <th>Number</th>
                          <th>Expense Name</th>
                          <th>Amount</th>
                          <th>Due Date</th>
						  <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       include 'db_config.php';
                       session_start();
                       $society_id= $_SESSION['society_id'];
                       //echo $_SESSION['society_id'];
                       $sql = "SELECT * FROM expense WHERE society_id='$society_id' ORDER BY expense_due_date ASC ";
                       foreach ($conn->query($sql) as $row) {
                            $currentDateTime = date('Y-m-d');
                            $timestamp_rest=$row['expense_due_date'];
                            $date1=date_create($currentDateTime);// Create a DateTime object
                            $date2=date_create($timestamp_rest);// Create a DateTime object
                            $diff=date_diff($date1,$date2);// Determine the difference between the dates and set a variable $diff
                            $result=$diff->format("%R%a");

                            if ($result<15){
                                echo '<tr class="table-danger">';
								echo '<td>'.'EXP'. $row['expense_id'] . '</td>';
                                echo '<td>'. $row['expense_name'] . '</td>';
                                echo '<td>'. '$'. $row['expense_amount'] . '</td>';
                                $timestamp_rest2=substr($row['expense_due_date'],0,-8);
                                echo '<td width="110">'.$timestamp_rest2. '</td>';                                                  
        
                       }else {echo '<td>'.'EXP'. $row['expense_id'] . '</td>';
                                echo '<td>'. $row['expense_name'] . '</td>';
                                echo '<td>'. '$'. $row['expense_amount'] . '</td>';
                                $timestamp_rest2=substr($row['expense_due_date'],0,-8);
                                echo '<td width="170">'.$timestamp_rest2. '</td>';                                                   
                               }
                                echo '<td width=290>';
                                echo '<a class="btn btn-success" href="">Contact Admin/ Suggest Change</a>';
                                echo ' ';
                                echo '</td>';
                                echo '</tr>';
                       }
                      ?>
                      </tbody>
                </table>
        </div>
    </div> <!-- /container -->
 <br><br><br><br><br>
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Tenant Portal<span>.</span></h3>
            <p>
              2120 Sydney Australia <br><br>
              <strong>Phone:</strong> +61 1234 5678 9<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="tenant_homepage.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="tenant_expenses.php">Expenses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="tenant_events.php">Events</a></li>
			  <li><i class="bx bx-chevron-right"></i> <a href="tenant_complaints.php">Complaints</a></li>
              
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>S2: Himanshu</span></strong>. All Rights Reserved
        </div>
       
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

