<?php  
 
 $conn = mysqli_connect("localhost","verceldb","wESRFh8bM9JD","chatapp");
 if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }

?>
