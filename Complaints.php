<?php
include 'Session.php';


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
      <h1 class="logo me-auto"><a href="tenant_homepage.php">Tenant Help Portal<span>.</span></a></h1>
    

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href=""><span>Conversation </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="complaints.php">Complaints</a></li>
            </ul>
          </li>
          <li><a href="tenant_expense.php">Expenses</a></li>
          <li><a href="tenant_events.php">Events</a></li>
          <li><a href="tenant_mydetails.php">MyDetails</a></li>

           
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
  
      <a href="logout.php" class="get-started-btn scrollto">Logout</a>
    </div>
  </header><!-- End Header -->


<br><BR><br><br>
    <!-- chats section -->
    <div class="container mt-4">
      <div class="card">
        <div class="card-title text-center">

        <!--  <form class="form-inline mt-4" style = "display : inline-block" method = "POST" action = "scripts/search-users.php">
            <input class="form-control mr-sm-2" type="search" name = "search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>-->
        </div>
        <div class="card-body mb-4">
      <!--    <?php
         //   $lastMessage = "SELECT DISTINCT Send_by FROM mesaages WHERE Recevied_by = '$log_in_tenant'";
          //  $lastMessageStatus = mysqli_query($conn,$lastMessage) or die(mysqli_error($conn));
         //   if(mysqli_num_rows($lastMessageStatus) > 0) {
           //   while($lastMessageRow = mysqli_fetch_assoc($lastMessageStatus)) {
            //    $send_by_id = $lastMessageRow['Send_by'];
             //   $getSender = "SELECT * FROM users WHERE id = '$send_by_id'";
              //  $getSenderStatus = mysqli_query($conn,$getSender) or die(mysqli_error($conn));
               // $getSenderRow = mysqli_fetch_assoc($getSenderStatus);
          ?> -->

          <?php
              $User_Row=$conn->query("SELECT * FROM users`") or die(mysqli_error());
              while($row=$User_Row->fetch_array()){
                $send_by_id = $row['id'];

            ?>
          <div class="card">
            <div class="card-body">
              <h6><strong><?=$row['username'];?></strong><a href="./message.php?receiver=<?=$send_by_id?>" class="btn btn-outline-primary" style = "float:right">Send message</a></h6>
            </div>
          </div><br/>
         <?php
       //     }
          } 
          ?>
        </div>
      </div>
    </div>

    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>