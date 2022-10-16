<?php
session_start();
include 'dbconn.php';

#For Login admin
if(isset($_POST['admlogin'])){

  function validate($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
      return $data;
  }
                
   $aemail = validate($_POST['adminLogmail']);
   $apass = validate($_POST['adminLogpass']);
   

 if(empty($email)){
       header("Location:index.php?error= email is required");
      exit();
   }else if(empty($pass)){
       header("Location:index.php?error=password is required");
      exit();
      }else{ 
      
        $sqle= "SELECT * FROM `admin` WHERE admin_email ='$aemail' AND admin_pass='$apass'";
        $result = mysqli_query($conn, $sqle);
                                
                                
                                
         if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_assoc($result);
          
          $_SESSION['email'] = $row['admin_email'];
          $_SESSION['password'] = $row['admin_pass'];
          
          echo"
          <script> 
          alert('Login Successful');
          window.location.href='home.php';        
          </script>          
        ";
          exit();
             }else {
                     header("Location:index.php?error=User Not Found or Incorrect password dddd");
                     exit();
                     }
                      }
                                
                                
                       }else{
                          header("Location:index.php?error=wrong");
                          exit();
         }                 
               
?>

 
