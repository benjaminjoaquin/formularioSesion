<?php 
    $conn = new mysqli('localhost','root','','web-php');
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>