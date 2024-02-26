<?php  
 
 $conn = mysqli_connect("localhost","root","","chatapp");
 if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }

?>