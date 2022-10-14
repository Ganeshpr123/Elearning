<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "elearn";
//Craete Connection
$conn =mysqli_connect($db_host,$db_user,$db_pass,$db_name);

// Check Connection
if(!$conn){
      echo"connection failed";              
}
// else{
//      echo "connected";               
// }
?>