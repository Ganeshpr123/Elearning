<?php
include('./admininclude/adminheader.php');
?>
<div class="col-sm-9 mt-5">
            <!-- Table -->
            <p class="bg-dark text-white p-2">List ofCourses</p>
            <table class="table">
              <thead>
                <tr>
                   
                    <th scope="col">Course ID </th>
                    <th scope="col">Name </th>
                    <th scope="col">Author </th>
                    <th scope="col">Action </th>
                </tr>    
              </thead> 
              <tbody>
                    <tr>
                      <th scope="row">22</th> 
                      <td>Learn Guiter</td> 
                      <td>The Grayman</td> 
                        
                      <td><button type="submit" class="btn btn-info mr-3" name="view" value="View"><i class="bi bi-pencil"></i></button>
                      <button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="bi bi-trash3"></i></button>
                     </td> 

                     </tr>
              </tbody>     
            </table>
            <div>
                <a class="btn btn-danger box" href="./addcourse.php">
                <i class="fa fa-plus"></i> </a>   
            </div>
       </div>  
       <!-- div container fluid close here -->






<?php
include('./admininclude/adminfooter.php');
?>