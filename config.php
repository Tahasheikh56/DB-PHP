<?php

$host = "localhost";
$un = "root";
$pass = "";
$db = "rgistration";
$connect = mysqli_connect($host,$un,$pass,$db);

if(isset($connect)){
    echo "Database is connect";
    echo "</br>";
}

else{
    echo mysqli_errno;
}

?>