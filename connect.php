<?php
$conn = new mysqli("localhost","root","","fees");
if($conn->connect_error){
    die("connection faild".$conn->connect_error);
}

?>