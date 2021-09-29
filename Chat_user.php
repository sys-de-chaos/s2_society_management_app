<?php

include 'Session_users.php';

error_reporting(0);
$receiver = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


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

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Meriton Suites<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="homepage.html">Home</a></li>
          <li><a href="expenses.php">Expenses</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="visitors.php">Visitors</a></li>
          <li><a class="active" href="owners.php">Tennants</a></li>
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

  <br><br><br>
  <div class="ex3">
    <div class="container">
      <?php
      $getReceiver = "SELECT * FROM tennants WHERE tennants_id = '$receiver'";
      $getReceiverStatus = mysqli_query($conn, $getReceiver) or die(mysqli_error($conn));
      $getReceiverRow = mysqli_fetch_assoc($getReceiverStatus);
      $receivSend_byed_by = $getReceiverRow['tennants_name'];
      ?>
      <div class="card mt-4">
        <div class="card-header">

          <h6><strong>Reply to Messages</strong></h6>
        </div>
        <?php
        $getMessage = "SELECT * FROM mesaages WHERE Send_by = '$receiver' AND Recevied_by = '$log_in_user' OR Send_by = '$log_in_user' AND Recevied_by = '$receiver' ORDER BY Created_At asc";
        $getMessageStatus = mysqli_query($conn, $getMessage) or die(mysqli_error($conn));
        if (mysqli_num_rows($getMessageStatus) > 0) {
          while ($getMessageRow = mysqli_fetch_assoc($getMessageStatus)) {
            $message_id = $getMessageRow['id'];
            $Send_by_is = $getMessageRow['Send_by'];
        ?>

            <div class="card-body">
              <?php
              if ($Send_by_is == $log_in_user) { ?>
                <div style="text-align:right;">
                  <div class="message-box ml-2">
                    <h6 style="color: #007bff"><?= $row['username']; ?></h6>
                    <p class=""><?= $getMessageRow['Message'] ?></p>
                    <h10 style="color: grey"><?= $getMessageRow['Created_At']; ?></h10>
                  </div>
                </div>
              <?php
              } else {

              ?>

                <h6 style="color: #007bff"><?= $getReceiverRow['tennants_name']; ?></h6>
                <div class="message-box ml-2">
                  <p class=""><?= $getMessageRow['Message'] ?></p>
                  <h10 style="color: grey"><?= $getMessageRow['Created_At']; ?></h10>
                </div>


                </h6>
              <?php

              }
              ?>




            </div>

          <?php
          }
        } else {
          ?>
          <div class="card-body">
            <p class="text-muted">No messages yet! Say 'Hi'</p>
          </div>
        <?php
        }
        ?>
      </div>
      <div class="card-footer text-center">
        <form action="Send_user.php" method="POST" style="display: inline-block">
          <input type="hidden" name="sent_by" value="<?= $log_in_user ?>" />
          <input type="hidden" name="received_by" value="<?= $receiver ?>" />
          <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                <input type="text" name="message" id="message" class="form-control" placeholder="Type your message here" required />
              </div>
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>