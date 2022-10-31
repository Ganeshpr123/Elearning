<?php
if(!isset($_SESSION)){
   session_start();
}
?>
<?php
include('./admininclude/adminheader.php');
include('../dbconn.php');

if(isset($_POST['lessonSubmitButton'])){
                    //checking for empty fields
 if(($_REQUEST['lesson_name'] == "") || ($_REQUEST['lesson_desc'] == "") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){
    //msg display if required field missing
    $msg= '<div class="alert alert-warning col-sm-6 ml-7 mt-4">Fill All The Fields</div> ';               
   }else{
//        to catch the all fields data
// asign user value to veroiable

    
    $lesson_name = $_REQUEST['lesson_name'];
    $lesson_desc = $_REQUEST['lesson_desc'];
    $course_id = $_REQUEST['course_id'];
    $course_name = $_REQUEST['course_name'];

    $lesson_link = $_FILES['lesson_link']['name'];
    $temp_name = $_FILES['lesson_link']['tmp_name'];
    $vid_folder = './lessonvid/'.$lesson_link; 
//     next img move to the folder
    move_uploaded_file($temp_name, $vid_folder);


    $sql= "INSERT INTO `lesson`(`lession_name`, `lession_desc`, `lession_link`, `course_id`, `course_name`) VALUES ('$lesson_name','$lesson_desc','$vid_folder','$course_id','$course_name')";

    if($conn->query($sql) == TRUE){
     $msg= '<div class="alert alert-success col-sm-6 ml-7 mt-4">lesson Added Successfully</div> ';             
    }else{
    $msg= '<div class="alert alert-danger col-sm-6 ml-7 mt-4">unable to Add Lesson</div> ';                 
    }

 }
                    

}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
 <h3 class="text-center">Add New Lession</h3>  
 <form action="" method="POST" enctype="multipart/form-data">
     <div class="form-group">
        <label for="course_id">Course ID</label> 
        <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($_SESSION['course_id'])) {echo $_SESSION['course_id'];} ?>" readonly>           
     </div> 
     <div class="form-group">
        <label for="course_name">Course Name</label> 
        <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($_SESSION['course_name'])) {echo $_SESSION['course_name'];} ?>" readonly>           
     </div>
     <div class="form-group">
        <label for="lesson_name">Lesson Name</label> 
        <input type="text" class="form-control" id="lesson_name" name="lesson_name">          
     </div>
     <div class="form-group">
        <label for="lesson_desc">Lesson Description</label> 
        <textarea class="form-control" name="lesson_desc" id="lesson_desc"row=2 ></textarea>          
     </div>  
     <div class="form-group">
        <label for="lesson_link">Lesson Video Link</label> 
        <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">          
     </div> 
     
     <div class="text-center">
          <button type="submit" class="btn btn-danger" id="lessonSubmitButton" name="lessonSubmitButton">submit</button> 
          <a href="lessons.php" class="btn btn-secondary">Close</a>         
        </div>
        <?php if(isset($msg)){echo $msg;} ?>    
 </form> 

</div>


</div>  <!-- div row close from header -->
</div>  <!-- div container-fluid close from header -->



<?php
include('./admininclude/adminfooter.php');
?>