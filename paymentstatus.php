<!-- Start including Header -->
<?php
include("./maininclude/header.php");
?>
<!-- End including Header -->

<!-- Start Payment Page Banner -->
 <div class="container-fluid bg-dark">
     <div class="row">
         <img src="image/5.jpg" alt="Courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px">           
     </div>
 </div>
 <!-- End Payment Page Banner -->
 <!-- Start Main Content -->
  <div class="container">
     <h2 class="text-center my-4">Payment Status</h2>
     <form action="" method="POST">
     <div class="form-group row">
            <label id="t2" class="offset-sm-3 col-form-label">Order ID:</label>
            <div>
            <input type="text" id="t1" class="form-control mx-3">
            </div>
            <div>
            <input type="submit" id="vw" class="btn btn-primary mx-4" value="view">
            </div>  
        </div>   
     </form>
  </div>
   <!-- End Main Content -->

    <!-- Start Contacts Us -->
  <?php
  include('./contact.php');
  ?>
<!-- End Contacts Us -->
 
 <!-- Start including Footer -->
<?php
include("./maininclude/footer.php");
?>
<!-- End including Footer -->