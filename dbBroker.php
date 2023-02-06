<?php
$host="localhost";
$user="root";
$pass="";
$database="kolokvijumi";


$conn = new mysqli($host, $user,$pass,$database);
//print_r($conn);
if($conn->connect_errno){

    echo ("NEUSPESNA konekcija:$conn->connect_errno,poruka: $conn->connect_error");
    exit();
}
?>