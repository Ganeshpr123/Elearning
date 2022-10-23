<?php
include('./admininclude/adminheader.php');
include('../dbconn.php');
?>
<div class="col-sm-9 mt-5">
            <!-- Table -->
            <p class="bg-dark text-white p-2">List of Students</p>
            <?php
            $sql = "SELECT * FROM student";
            $result = $conn->query($sql);
            if($result->num_rows > 0){

            
            ?>
            <table class="table">
              <thead>
                <tr>
                   
                    <th scope="col">Student ID </th>
                    <th scope="col">Name </th>
                    <th scope="col">Email </th>
                    <th scope="col">Action </th>
                </tr>    
              </thead> 
              <tbody>
                <?php
                while($row = $result->fetch_assoc()){ 
                    echo '<tr>';
                    echo '<th scope="row">'.$row['stu_id'].'</th>';
                     echo '<td>'.$row['stu_name'].'</td>'; 
                     echo '<td>'.$row['stu_email'].'</td>'; 
                        
                     echo'<td>
                     <form action="editstudents.php" method="POST" class="d-inline">
                     <input type="hidden" name="id" value='.$row["stu_id"].'>
                      <button type="submit" class="btn btn-info mr-3" name="view" value="View"><i class="bi bi-pencil"></i>
                      </button>
                      </form>

                      <form action="" method="POST" class="d-inline">
                      <input type="hidden" name="id" value='.$row["stu_id"].'>
                      <button type="submit" class="btn btn-danger" name="delete" value="Delete"><i class="bi bi-trash3"></i>
                      </button>
                      </form>
                      </td>
                     </tr>';
                     } ?>
              </tbody>     
            </table>
            <?php }else{
              echo "0 results";
              }
              
              if(isset($_REQUEST['delete'])){
                $sql = "DELETE FROM student WHERE stu_id = {$_REQUEST['id']}";
                if($conn->query($sql) == TRUE){
                  // for delete and refresh page we use meta tag

                  echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
                }else{
                  echo "Unable to Delete Data";
                }
              }
              
              
              
              
              
              ?>
            <div>
                <a class="btn btn-danger box" href="./addstudents.php">
                <i class="fa fa-plus"></i> </a>   
            </div>
       </div>  
       <!-- div container fluid close here -->
      







<?php
include('./admininclude/adminfooter.php');
?>