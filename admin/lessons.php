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
?>

<div class="col-sm-9 mt-5 mx-3">
   <form action="" method="get" class="mt-3 form-inline d-print-none">
      <div class="form-group mr-3">
         <label for="checkid">Enter Course ID:</label>
         <input type="text" class="form-control ml-3" id="checkid" name="checkid">
      </div>
      <button type="submit" class="btn btn-danger">Search</button>
   </form>
 <?php

   $sql = "SELECT course_id FROM course";
   $result = $conn->query($sql);
   while($row = $result->fetch_assoc()){
      if(isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['course_id']){
         $sql = "SELECT * FROM course WHERE course_id = {$_REQUEST['checkid']}";
         $result = $conn->query($sql);
         $row = $result->fetch_assoc();
         if(($row['course_id']) == $_REQUEST['checkid']){

            $_SESSION['course_id'] = $row['course_id'];
            $_SESSION['course_name'] = $row['course_name'];
        
            ?>
                <h3 class="mt-5 bg-dark text-white p-2">Course ID:<?php  if(isset($row['course_id'])) { echo $row['course_id'];} ?> Course Name: <?php if(isset($row['course_name'])) { echo $row['course_name'];} ?></h3>

            <?php
            // show all data of search course id's data

           $sql = "SELECT * FROM lesson WHERE course_id = {$_REQUEST['checkid']}";
           $result = $conn->query($sql);
          
          echo '<table class="table">
             <thead>
               <tr>
                  
                   <th scope="col">Lesson ID </th>
                   <th scope="col">Lesson Name </th>
                   <th scope="col">Lesson Link </th>
                   <th scope="col">Action </th>
               </tr>    
             </thead> 
             <tbody>';
              
               while($row = $result->fetch_assoc()){ 
                   echo '<tr>';
                   echo '<th scope="row">'.$row['lession_id'].'</th>';
                    echo '<td>'.$row['lession_name'].'</td>'; 
                    echo '<td>'.$row['lession_link'].'</td>'; 
                       
                    echo'<td>
                    <form action="editlesson.php" method="POST" class="d-inline">
                    <input type="hidden" name="id" value='.$row["lession_id"].'>
                     <button type="submit" class="btn btn-info mr-3" name="view" value="View"><i class="bi bi-pencil"></i>
                     </button>
                     </form>

                     <form action="" method="POST" class="d-inline">
                     <input type="hidden" name="id" value='.$row["lession_id"].'>
                     <button type="submit" class="btn btn-danger" name="delete" value="Delete"><i class="bi bi-trash3"></i>
                     </button>
                     </form>
                     </td>
                    </tr>';
                    } 
             echo'</tbody>     
           </table>';
            }else{
             echo' <div class="alert alert-dark mt-4 role-alert">Course Not Found ! </div>';
             }
             
             if(isset($_REQUEST['delete'])){
               $sql = "DELETE FROM lesson WHERE lession_id = {$_REQUEST['id']}";
               if($conn->query($sql) == TRUE){
                 // for delete and refresh page we use meta tag

                 echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
               }else{
                 echo "Unable to Delete Data";
               }
             }





         }
      }
   


 ?>

</div>
<?php
//  if search any lession id then the plus button available
if(isset($_SESSION['course_id'])){
echo'<div>
<a class="btn btn-danger box" href="./addlesson.php">
<i class="fa fa-plus"></i> </a>   
</div>';
}
?>












<?php
include('./admininclude/adminfooter.php');
?>