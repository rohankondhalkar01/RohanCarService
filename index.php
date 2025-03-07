<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>Rohan Car Services</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Rohan Car Services</a>
    <span class="navbar-text">Customer's Happiness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/baner2.png);">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase text-danger font-weight-bold">Welcome to Rohan Car Services</h1>
      <p class="font-italic">Customer's Happiness is our Aim</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">Car Services</h3>
      <p>
        Car Services is India’s leading chain of service
        workshops offering
        wide array of services. We focus on enhancing your uses experience by offering world-class
        Services
        . Our sole mission is “To provide an excellent
        services to
        keep the car fit and healthy and customers happy and smiling”.

         Now you
        can book
        your service online by doing Registration.
      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-tools fa-8x text-success"></i></a>
        <h4 class="mt-4">Spare parts</h4>
      </div>
      <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-wrench fa-8x text-primary"></i></a>
        <h4 class="mt-4">Preventive Maintenance</h4>
      </div>
      <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-car-crash fa-8x text-info"></i></a>
        <h4 class="mt-4">Fault Repair</h4>
      </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->

  <!-- Start Happy Customer Section -->
<div class="jumbotron bg-danger py-5" id="Customer">
  <div class="container">
    <h2 class="text-center text-white mb-4">Happy Customers</h2>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-3">
        <div class="card shadow-lg mb-4 text-center d-flex flex-column align-items-center p-3">
          <img src="images/Soham.jpeg" class="img-fluid rounded-circle mb-3" width="100">
          <h4 class="card-title" style="min-height: 50px;">Soham Subakade</h4>
          <p class="card-text">Excellent service! My car feels brand new after servicing. Highly recommended!</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card shadow-lg mb-4 text-center d-flex flex-column align-items-center p-3">
          <img src="images/Prasad.jpeg" class="img-fluid rounded-circle mb-3" width="100">
          <h4 class="card-title" style="min-height: 50px;">Prasad Gawade</h4>
          <p class="card-text">Professional and quick service. The staff is very friendly and knowledgeable.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card shadow-lg mb-4 text-center d-flex flex-column align-items-center p-3">
          <img src="images/Sandesh.jpeg" class="img-fluid rounded-circle mb-3" width="100">
          <h4 class="card-title" style="min-height: 50px;">Sandesh Gholve</h4>
          <p class="card-text">Great experience! Affordable prices and top-notch quality work.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card shadow-lg mb-4 text-center d-flex flex-column align-items-center p-3">
          <img src="images/Dhruv.jpeg" class="img-fluid rounded-circle mb-3" width="100">
          <h4 class="card-title" style="min-height: 50px;">Dhruv Burle</h4>
          <p class="card-text">Reliable and efficient. My go-to place for car maintenance and servicing.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Happy Customer Section -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        Rohan Car Services Pvt Ltd, <br>
        Pune,ShivajiNagar <br>
        Pune - 411005 <br>
        Phone: +918806404207<br>
        <a href="#" target="_blank">www.Rohan Car Services.com</a> <br>

        <br><br>
        <strong>Delhi Branch:</strong> <br>
        Rohan Car Services Pvt Ltd, <br>
        Ashok Nagar, Delhi <br>
        Delhi - 804002 <br>
        Phone: +9657962773 <br>
        <a href="#" target="_blank">www.Rohan Car Services.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="https://github.com/rohankondhalkar01" target="_blank" class="pr-2 fi-color">
    <i class="fab fa-github"></i>
</a>
<a href="https://www.linkedin.com/in/rohan-kondhalkar-b1104530b/" target="_blank" class="pr-2 fi-color">
    <i class="fab fa-linkedin"></i>
</a>
<a href="https://www.instagram.com/rohank0011/" target="_blank" class="pr-2 fi-color">
    <i class="fab fa-instagram"></i>
</a>
<a href="mailto:rkondhalkars111@gmail.com" target="_blank" class="pr-2 fi-color">
    <i class="fas fa-envelope"></i>
</a>
<a href="#" target="_blank" class="pr-2 fi-color">
    <i class="fas fa-rss"></i>
</a>

        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Rohan &copy; 2023.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>
