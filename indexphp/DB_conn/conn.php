<?php
$hostname= "localhost";
$db_username= "root";
$password= "";
$dbname = "login";
$conn = mysqli_connect($hostname, $db_username, $password, $dbname);
if($conn){
    echo "Connection";
}
else{
    echo "No Connection";
}