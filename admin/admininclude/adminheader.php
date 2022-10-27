
<!DOCTYPE html>
<html lang="en">
<head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Dashboard</title>
                      <!-- Bootstrap css -->
                      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                      <link rel="stylesheet" href="css/bootstrap.min.css">
                      <!-- CDN -->
                      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
                    <!-- Font Awesome css -->
                    <link rel="stylesheet" href="../css/all.min.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                    <!-- Google Font -->
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                   
                    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
                    <!-- --custom css-- -->
                    <link rel="stylesheet" href="../css/adminstyle.css">
</head>
<body>
  <!-- top Navbar -->
<nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php">E-Learning <small class="text-white">Admin Area</small></a>
 
</nav>
<!-- side bar -->
<div class="container-fluid mb-5" style="margin-top:40px;">
 <div class="row">
   <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
     <div class="sidebar-sticky">
          <ul class="nav flex-column">
               <li class="nav-item">
                    <a class="nav-link" href="adminDashboard.php">
                       <i class="bi bi-speedometer"></i> Dashboard                 
                    </a>
               </li> 
               <li class="nav-item">
                    <a class="nav-link" href="courses.php">
                       <i class="bi bi-list-columns"></i> Courses                 
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="#">
                       <i class="bi bi-book-fill"></i> Lessons                 
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="students.php">
                       <i class="bi bi-people-fill"></i> Students                 
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="#">
                       <i class="bi bi-calculator-fill"></i> Sell Report                 
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="#">
                       <i class="bi bi-file-spreadsheet-fill"></i> Payment Status                 
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="#">
                       <i class="bi bi-clipboard2-check-fill"></i> Feedback                 
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="adminchangepass.php">
                       <i class="bi bi-key-fill"></i> Change Password                 
                    </a>
               </li>
               <li class="nav-item">
                    <a class="nav-link" href="#">
                       <i class="fa fa-sign-out" aria-hidden="true"></i> Logout                 
                    </a>
               </li>
          </ul>          
     </div>
     </nav>