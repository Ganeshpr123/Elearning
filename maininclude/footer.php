

<!-- Start Footer -->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright &copy; 2021 || Design By E-Learning || <a href="#Login"  data-toggle="modal" data-target="#adminLoginModelCenter" >Admin Login</a> </small>
</footer>
<!-- End Footer -->
<!-- Start Student Registration -->
       
   

    <!-- Modal -->
      <div class="modal fade" id="stuRegModelCenter" tabindex="-1" role="dialog"                             aria-labelledby="stuRegModelCenterLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="stuRegModelCenterLabel">Student Registration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Start Student Registration Form -->
             <form action="sturegis.php" method="POST">
                  <div class="form-group">
                     <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label><input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname"><br>
                  </div>
                  <div class="form-group">
                     <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
                     
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div><br>
                  <div class="form-group">
                     <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New Password</label><input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass" required="">
                     <span>
                     <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                     </span>
                  </div>

                  <script>
                    var state= false;
                    function toggle(){
                      if(state){
                        document.getElementById("stupass").setAttribute("type","password");
                        state = false;
                        
                      }
                      else{
                        document.getElementById("stupass").setAttribute("type","text");
                        state = true;
                       
                      }
                    }
                  </script>
                  
                
                <!-- End Student Registration Form -->
          </div>
          
          <div class="modal-footer">
          <button type="submit" name="submit" class="btn su btn-primary">Sign Up</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
          </div>
          </form>
        </div>
      </div>
     
    </div>


<!-- End Student Registration -->

<!-- Start Student Login -->

  <!-- Modal -->
    <div class="modal fade" id="stuLoginModelCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModelCenterLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"  id="stuLoginModelCenterLabel">Student Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Start Student Login Form -->
                          <form action="stulogin.php" method="POST">
                 
                  <div class="form-group">
                     <i class="fas fa-envelope"></i><label for="stueLogmail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
                     
                  </div>
                  <div class="form-group">
                     <i class="fas fa-key"></i><label for="stuLogpass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
                  </div>
                  
       
                <!-- End Student Login Form -->
          </div>
          
          <div class="modal-footer">
          <button type="submit" name="login" class="btn btn-primary" id="stuLoginBtn">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            
          </div>
          </form>
        </div>
      </div>
    </div>


<!-- End Student Login Model -->

 <!-- Start Admin Login -->

  <!-- Model -->
  <div class="modal fade" id="adminLoginModelCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModelCenterLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="adminLoginModelCenterLabel">Admin Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Start Admin Login Form -->
            <form action="adminlogin.php" method="POST">      
            <!-- <form id="adminLoginForm"> -->
                 
                  <div class="form-group">
                     <i class="fas fa-envelope"></i><label for="adminLogmail" class="pl-2 font-weight-bold">Email</label><input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
                     
                  </div>
                  <div class="form-group">
                     <i class="fas fa-key"></i><label for="adminLogpass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="stuLogpass">
                  </div>
             
                <!-- End Admin Login Form -->
          </div>
          
          <div class="modal-footer">
          <button type="submit"  name="admlogin" class="btn btn-primary" id="adminLoginBtn">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            
          </div>
                
          </form>
        </div>
      </div>
    </div>


<!-- End Admin Login Model -->

 




       

<!-- jquery and Bootstrap Java script -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<!-- Font Asweme js -->
<script src="js/all.min.js"></script>

<!-- Student Testimonal owl slider JS -->
<script type="text/javascript" src="js/owl.js"></script>
<script type="text/javascript" src="js/testyslider.js"></script>
<script type="text/javascript" src="js/ajaxrequest.js"></script>



</body>
</html>






