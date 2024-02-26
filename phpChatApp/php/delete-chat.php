<?php
include("php/config.php");
$chat=$_POST['msg_id'];
print_r($chat);
$sql='DELETE FROM `messages` WHERE  msg_id="$chat"';
$result=mysqli_query($conn,$sql);
if($result){
    echo "Deleted Successfully";
}
else{
    echo "something went wrong";
}


?>