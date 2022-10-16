
<!DOCTYPE html>
<html lang="en">
<head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <!-- Bootstrap css -->
                    <link rel="stylesheet" href="css/bootstrap.min.css">
                    <!-- Font Awesome css -->
                    <link rel="stylesheet" href="css/all.min.css">
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                    <!-- Google Font -->
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
                    <title>Elearning</title>
                       <!-- Custom CSS -->
                    <link rel="stylesheet" href="css/style.css">
                    <!-- sudent TestimonialOwl slider css -->
                    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
                    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
                    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->


</head>
<body>
<!-- Start Navigation  -->
<nav class="navbar navbar-expand-sm navbar-dark  fixed-top">
  <a class="navbar-brand" href="index.php">E-Learn</a>
  <span class="navbar-text">Learn With Us and Implement YourSelf</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav custom-nav">
     <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
     <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
     <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>
     <?php
      session_start();
      if(isset($_SESSION['is_login'])){
        echo'<li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
        <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
      }else{
        echo' <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#stuLoginModelCenter">Login</a></li>
        <li class="nav-item custom-nav-item"><a href="#" class="nav-link"  data-toggle="modal" data-target="#stuRegModelCenter">Sign Up</a></li>';
      }
     ?>
     
    
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
     <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
    </ul>
  </div>
</nav>
<!-- End Navigation  -->