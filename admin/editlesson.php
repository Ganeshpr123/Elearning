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
//update
if(isset($_POST['requpdate'])){
//checking for empty fields
 if(($_REQUEST['lession_id'] == "")||($_REQUEST['lession_name'] == "") || ($_REQUEST['lession_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){
                    //msg display if empty field missing
    $msg= '<div class="alert alert-warning col-sm-6 ml-7 mt-4" role="alert">Fill All The Fields</div> ';               
   }else{
                    // assigning user value to variable

   $lid = $_REQUEST['lession_id'];
   $lname = $_REQUEST['lession_name'];
   $ldesc = $_REQUEST['lession_desc'];
   $cid = $_REQUEST['course_id'];
   $cname = $_REQUEST['course_name'];
   $llink = './lessonvid/'.$_FILES['lesson_link']['name'];

   $sql = "UPDATE lesson SET lession_id='$lid',lession_name = '$lname',lession_desc = '$ldesc',lession_link = '$llink' WHERE lession_id = '$lid'";
  if($conn->query($sql) == TRUE){
    $msg= '<div class="alert alert-success col-sm-6 ml-7 mt-4" role="alert">Updated Successfully</div> ';               
  }else{
      $msg= '<div class="alert alert-warning col-sm-6 ml-7 mt-4" role="alert">Unable to Update</div> ';                
  }

   }
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
 <h3 class="text-center">Update Lesson  Details</h3> 
 <?php
 if(isset($_REQUEST['view'])){
      $sql = "SELECT * FROM lesson WHERE lession_id = {$_REQUEST['id']}";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();              
 }
 ?>
 <form action="" method="POST" enctype="multipart/form-data">
 <div class="form-group">
        <label for="lession_id">Lesson ID</label> 
        <input type="text" class="form-control" id="lession_id" name="lession_id" value="<?php if(isset($row['lession_id'])) {echo $row['lession_id'];} ?>" readonly>           
     </div> 
 
     <div class="form-group">
        <label for="lession_name">Lesson Name</label> 
        <input type="text" class="form-control" id="lession_name" name="lession_name" value="<?php if(isset($row['lession_name'])) {echo $row['lession_name'];} ?>">           
     </div> 
     <div class="form-group">
        <label for="lession_desc">Lesson Description</label> 
        <textarea class="form-control" name="lession_desc" id="lession_desc"row=2 ><?php if(isset($row['lession_desc'])) {echo $row['lession_desc'];} ?></textarea>          
     </div> 
     
     <div class="form-group">
        <label for="course_id">Course ID</label> 
        <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($row['course_id'])) {echo $row['course_id'];} ?>">           
     </div>
     <div class="form-group">
        <label for="course_name">Course Name</label> 
        <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($row['course_name'])) {echo $row['course_name'];} ?>">           
     </div> 
     <div class="form-group">
        <label for="lession_link">Lesson Link</label> 
        <div class="embed-responsive embed-responsive-16by9">
        <iframe  class="embed-responsive-item" src="<?php if(isset($row['lession_link'])) {echo $row['lession_link'];} ?>" allowfullscreen></iframe>          
     </div> 
     <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
</div>
     
     <div class="text-center">
          <button type="submit" class="btn btn-primary" id="requpdate" name="requpdate">Update</button> 
          <a href="courses.php" class="btn btn-secondary">Close</a>         
        </div>
        <?php if(isset($msg)){echo $msg;} ?>    
 </form> 

</div>










<?php
include('./admininclude/adminfooter.php');
?>