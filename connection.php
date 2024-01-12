<?php

$servername="localhost";
$username="root";
$password="";
$database="templatewebsite";

$conn=mysqli_connect($servername,$username,$password,$database);

if($conn){
    // echo "connection ok";
}else{
    echo "connection failed";
}


?>