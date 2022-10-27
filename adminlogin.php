<?php
session_start();
include 'dbconn.php';

#For Login admin
if(isset($_POST['admlogin'])){
  // if(isset($_POST['adminlogemail']) && isset($_POST['adminlogpass'])){
// console.log("Button Clicked");
           
    
    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
         return $data;
     }
                   
      $adminemail = validate($_POST['adminLogmail']);
      $adminpass = validate($_POST['adminLogpass']);


   


      
        $sqle= "SELECT * FROM admin WHERE  admin_email='$adminemail' AND admin_pass='$adminpass'";
        $result = mysqli_query($conn, $sqle);
                                
                                
                                
         if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_assoc($result);
          
          $_SESSION['emaill'] = $row['admin_email'];
          $_SESSION['password'] = $row['admin_pass'];

          
          
          echo"
          <script> 
          alert('Login Successful');
          window.location.href='admin/adminDashboard.php';        
          </script>          
        ";
          exit();
             }else {
                     header("Location:index.php?error=User Not Found or Incorrect password dddd");
                     exit();
                     }
                      
                                
                                
                       }else{
                          header("Location:index.php?error=wrong");
                          exit();
         }                 
               
?>

 
