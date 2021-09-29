<?php
session_start();

require_once('db_config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Society Management System</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
  <link rel="stylesheet" href="assets/css/TT%20Commons%20Medium.css">
  <link rel="stylesheet" href="assets/css/TT%20Commons%20Regular.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/Header-Blue.css">
  <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
  <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
  <link rel="stylesheet" href="assets/css/Projects-Horizontal.css">
  <link rel="stylesheet" href="assets/css/Testimonials.css">
</head>

<body>
  <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
    <div class="container"><a class="navbar-brand" href="homepage.php" style="font-family: 'TT Commons Regular';font-size: 18px;">Society Management System</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarResponsive"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse d-xxl-flex align-items-xxl-center" id="navbarResponsive">
        <ul class="navbar-nav ms-auto" style="font-size: 18px;">
          <li class="nav-item"><a class="nav-link" href="homepage.php" style="font-size: 18px;">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="expenses.php" style="font-size: 18px;">Expenses</a></li>
          <li class="nav-item"><a class="nav-link" href="events.php" style="font-size: 18px;">Events</a></li>
          <li class="nav-item"><a class="nav-link" href="visitors.php" style="font-size: 18px;">Visitors</a></li>
          <li class="nav-item"><a class="nav-link" href="owners.php" style="font-size: 18px;">Tenants</a></li>
          <li class="nav-item"><a class="nav-link" href="society.php" style="font-size: 18px;">Society</a></li>
          <li class="nav-item"><a class="nav-link d-xxl-flex align-items-xxl-center" href="logout.php" style="font-family: 'TT Commons Regular';font-size: 18px;color: var(--bs-red);text-align: center;border-style: none;">Log OUT</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="row">
    <div class="col">
      <header class="header-blue" style="padding-bottom: 72px;">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
          <div class="container-fluid"><a class="navbar-brand" href="#">Company Name</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">Dropdown </a>
                  <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                </li>
              </ul>
              <form class="d-flex me-auto navbar-form" target="_self">
                <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
              </form><span class="navbar-text"> <a class="login" href="#">Log In</a></span><a class="btn btn-light action-button" role="button" href="#">Sign Up</a>
            </div>
          </div>
        </nav>
        <div class="container hero">
          <div class="row">
            <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
              <h1 style="font-family: 'TT Commons Regular';">Mobile App is now available!</h1>
              <p>Enjoy instant communication with clients on the go!</p>
            </div>
            <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
              <div class="phone-mockup"><img class="device" src="assets/img/phone.svg">
                <div class="screen" style="background: url(&quot;assets/img/screencapture.png&quot;);background-size: cover;"></div>
              </div>
            </div>
          </div>
        </div>
      </header>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <section class="testimonials-clean">
        <div class="container" style="padding-top: 144px;">
          <div class="intro">
            <h2 class="text-center" style="font-family: 'TT Commons Regular';">Testimonials </h2>
            <p class="text-center">Read what our customers are saying!</p>
          </div>
          <div class="row people" style="padding-bottom: 146px;">
            <div class="col-md-6 col-lg-4 item">
              <div class="box">
                <p class="description">Could be a little better lol.</p>
              </div>
              <div class="author"><img class="rounded-circle" src="assets/img/1.jpg">
                <h5 class="name" style="font-family: 'TT Commons Regular';">Jeff Jefferson</h5>
                <p class="title">Society Management User</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
              <div class="box">
                <p class="description">nice.</p>
              </div>
              <div class="author"><img class="rounded-circle" src="assets/img/3.jpg">
                <h5 class="name" style="font-family: 'TT Commons Regular';">SuperUser909</h5>
                <p class="title">Society Management User<br></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 item">
              <div class="box">
                <p class="description">very good.</p>
              </div>
              <div class="author"><img class="rounded-circle" src="assets/img/2.jpg">
                <h5 class="name" style="font-family: 'TT Commons Regular';">Emily Bimily</h5>
                <p class="title">Society Management User<br></p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <section class="projects-horizontal">
    <div class="container" style="padding-top: 20px;">
      <div class="intro">
        <h2 class="text-center" style="font-family: 'TT Commons Regular';">Features</h2>
        <p class="text-center">Some simple features provided by the Society Management System</p>
      </div>
      <div class="row projects" style="padding-bottom: 124px;">
        <div class="col-sm-6 item">
          <div class="row">
            <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a></div>
            <div class="col">
              <h3 class="name">Expenses Management</h3>
              <p class="description">Manage your society expenses and budget easily from within the system.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 item">
          <div class="row">
            <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a></div>
            <div class="col">
              <h3 class="name">Multiple Towers Management</h3>
              <p class="description">Handle tenants from multiple flats at one time, handle complaints and check on income.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="text-center text-white m-0 small">Copyright&nbsp;© 2021, S2 Society Management Project</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>