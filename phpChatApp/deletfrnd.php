<?php

session_start();

include_once "phpChatApp/php/config.php";

$id = $_GET['id'];
$sql = "DELETE FROM `users` WHERE id = $id";
$query = mysqli_query($conn,$sql);
if($query)
{
    echo 'true';
    header('location:phpChatApp/friend.php');
}
else{
    
    header('location:phpChatApp/friend.php');
}

?>