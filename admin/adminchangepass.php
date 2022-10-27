<?php
if(!isset($_SESSION)){
   session_start();                
}
include('./admininclude/adminheader.php');
include('../dbconn.php');


if(isset($_SESSION['emaill'])){
    $adminEmail = $_SESSION['emaill'];                
}else{
   echo "<script>location.href='../index.php'; </script>";   
            
}
$adminEmail = $_SESSION['emaill'];  
   if(isset($_REQUEST['adminPassUpdatebtn'])){
       if(($_REQUEST['adminPass'] == "")){
          $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fielld First</div>';          
       }else{
         $sql = "SELECT * FROM admin WHERE admin_email='$adminEmail'";
         $result = $conn->query($sql);
         if($result-> num_rows == 1){
            $adminPass =  $_REQUEST['adminPass'];
            $sql = "UPDATE admin SET admin_pass = '$adminPass' WHERE admin_email = '$adminEmail'";
            if($conn->query($sql) == TRUE){
                    // below msg display from submit success
                    $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Sucessfully </div>'; 
                    echo "<script>location.href='../index.php'; </script>";   
            }else{
                 // below msg display from submit failed
                 $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fielld First</div>';    
            }
         }           
       }
     }
?>


<div class="col-sm-6 mt-5">
 <div class="row"> 
   <div class="col-sm-6">             
 <form class="mt-5 mx-5">
     <div class="form-group">
        <label for="inputEmail">Email</label> 
        <input type="email"  placeholder="Email" class="form-control" id="inputEmail" value="<?php echo $adminEmail ?>">           
     </div> 
     <div class="form-group">
        <label for="inputnewpasswprd">New Password</label> 
        <input type="text" class="form-control" id="inputnewpasswprd" name="adminPass" placeholder="New Password" value="" >           
     </div>  
     
    
     <div class="text-center">
          <button type="submit" class="btn btn-danger mr-4 mt-4" id="adminPassUpdatebtn" name="adminPassUpdatebtn">Update</button> 
          <button type="reset" class="btn btn-secondary mt-4">Reset</button>        
        </div>
        <?php if(isset($passmsg)){echo $passmsg;} ?>    
   </form> 

      </div>
   </div>    
</div>


<?php
include('./admininclude/adminfooter.php');
?>