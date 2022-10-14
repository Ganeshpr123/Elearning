<?php
session_start();
include 'dbconn.php';

#For Student Registration
if(isset($_POST['submit'])){

   $name = $_POST['stuname'];
   $email = $_POST['stuemail'];
   $pass = $_POST['stupass'];

 $query = mysqli_query($conn,"SELECT * FROM `student` WHERE stu_email ='$email'");

   if (mysqli_num_rows($query) > 0 )
   {
      
   echo"
   <script> 
     alert('$email - Email Already Registered, Please Try Another');
     window.location.href='index.php';        
   </script>          
     ";  
     exit();
   }
   else {
   $sql = "INSERT INTO `student`(`stu_name`, `stu_email`, `stu_pass`) VALUES ('$name','$email','$pass')" ;
   if ( mysqli_query ($conn , $sql ) )
   {
    // echo " Data Inerted " ;
   header ( " location : home.php " ) ;
   }
  //  else
  //  {
  //  echo " Data not Inerted " ;
  //  }
  //  }

   // }
   else
   {
                    echo"
                    <script> 
                    alert('Cannot Run Query');
                    window.location.href='index.php';        
                    </script>          
                    ";
   }
 }
}

//    $name = $_POST['stuname'];
//    $email = $_POST['stuemail'];
//    $pass = $_POST['stupass'];
   
//    $sql="INSERT INTO `student`(`stu_name`, `stu_email`, `stu_pass`) VALUES ('$name',' $email',' $pass')";
   
      // mysqli_query($conn, $sql);
//       echo"
//           <script> 
//           alert('Registration Successful');
//           window.location.href='index.php';        
//           </script>          
//         ";
// //         header("Location:home.php");
//         exit();
    
       
//     }else{

//        echo"error";


//     }





?>