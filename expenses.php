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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Meriton Suites<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="homepage.html">Home</a></li>
          <li><a class="active" href="expenses.php">Expenses</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="visitors.php">Visitors</a></li>
		  <li><a href="owners.php">Tennants</a></li>
          <li class="dropdown"><a href="society.php"><span>Society </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="towers.html">Towers</a></li>
              <li><a href="flats.html">Flats</a></li>
            </ul>
          </li>
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
            </div>
			<br>
            <div class="row">
                <p>
                    <a href="expenses_new.php" class="btn btn-success">Create</a>
                </p>
                 
                <table class="table table-striped table-bordered">
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
                      
                       $sql = 'SELECT * FROM expense ORDER BY expense_id ASC ';
                       foreach ($conn->query($sql) as $row) {
                                echo '<tr>';
								echo '<td>'. $row['expense_id'].'.' . '</td>';
                                echo '<td>'. $row['expense_name'] . '</td>';
                                echo '<td>'. '$'. $row['expense_amount'] . '</td>';
                                echo '<td>'. $row['expense_due_date'] . '</td>';
                                echo '<td width=200>';
                                echo '<a class="btn btn-success" href="expenses_update.php?id='.$row['expense_id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="expenses_delete.php?id='.$row['expense_id'].'">Delete</a>';
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
            <h3>Meriton Suites<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New Delhi, 1333001<br>
              India <br><br>
              <strong>Phone:</strong> +91 1234 5678 9<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="homepage.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="expenses.php">Expenses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="events.php">Events</a></li>
			  <li><i class="bx bx-chevron-right"></i> <a href="society.php">Society</a></li>
              
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Meriton Suites Newsletter</h4>
            <p>Access all the information earlier than anyone else</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>S2 Fed Uni</span></strong>. All Rights Reserved
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