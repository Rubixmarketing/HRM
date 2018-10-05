<?php

$conn = mysqli_connect("localhost", "root", "","rubix_hrm");

if(!$conn){
    echo "Database connection failed...";
}


$db = new pdo('mysql:host=localhost;dbname=rubix_hrm','root','');

?>