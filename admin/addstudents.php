<?php
include('./admininclude/adminheader.php');
include('../dbconn.php');

if(isset($_POST['newStusubmitBtn'])){
                    //checking for empty fields
 if(($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "") || ($_REQUEST['stu_occ'] == "")){
    $msg= '<div class="alert alert-warning col-sm-6 ml-7 mt-4">Fill All The Fields</div> ';               
   }else{
//        to catch the all fields data

    $student_name = $_REQUEST['stu_name'];
    $student_email = $_REQUEST['stu_email'];
    $student_password = $_REQUEST['stu_pass'];
    $student_occupation = $_REQUEST['stu_occ'];
    
    
 
    $sql="INSERT INTO student (stu_name,stu_email,stu_pass,stu_occ) VALUES('$student_name','$student_email','$student_password','$student_occupation')";

    if($conn->query($sql) == TRUE){
     $msg= '<div class="alert alert-success col-sm-6 ml-7 mt-4">Student Added Successfully</div> ';             
    }else{
    $msg= '<div class="alert alert-danger col-sm-6 ml-7 mt-4">unable to Add Student</div> ';                 
    }

 }
                    

}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
 <h3 class="text-center">Add New Student</h3>  
 <form action="" method="POST" enctype="multipart/form-data">
     <div class="form-group">
        <label for="stu_name">Name</label> 
        <input type="text" class="form-control" id="stu_name" name="stu_name">           
     </div> 
     <div class="form-group">
        <label for="stu_email">Email</label> 
        <textarea class="form-control" name="stu_email" id="stu_email"row=2 ></textarea>          
     </div>  
     <div class="form-group">
        <label for="stu_pass">Password</label> 
        <input type="text" class="form-control" id="stu_pass" name="stu_pass">          
     </div> 
     <div class="form-group">
        <label for="stu_occ">Occupation</label> 
        <input type="text" class="form-control" id="stu_occ" name="stu_occ">          
     </div> 
    
     <div class="text-center">
          <button type="submit" class="btn btn-danger" id="newStusubmitBtn" name="newStusubmitBtn">submit</button> 
          <a href="students.php" class="btn btn-secondary">Close</a>         
        </div>
        <?php if(isset($msg)){echo $msg;} ?>    
 </form> 

</div>


</div>  <!-- div row close from header -->
</div>  <!-- div container-fluid close from header -->



<?php
include('./admininclude/adminfooter.php');
?>