<?php
session_start();
include 'dbconn.php';

#For Login
if(isset($_POST['login'])){

  function validate($data){
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
      return $data;
  }
                
   $email = validate($_POST['stuLogemail']);
   $pass = validate($_POST['stuLogpass']);

 if(empty($email)){
       header("Location:index.php?error= email is required");
      exit();
   }else if(empty($pass)){
       header("Location:index.php?error=password is required");
      exit();
      }else{ 
      
        $sqle= "SELECT * FROM student WHERE stu_email ='$email' AND stu_pass='$pass'";
        $result = mysqli_query($conn, $sqle);
                                
                                
                                
         if(mysqli_num_rows($result) == 1){
          $row = mysqli_fetch_assoc($result);
          $_SESSION['is_loginn']= true;
          $_SESSION['email'] = $row['stu_email'];
          $_SESSION['password'] = $row['stu_pass'];
          
          echo"
          <script> 
          alert('Login Successful');
          window.location.href='./index.php';        
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

 
