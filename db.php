<?php
$h ="localhost";
$u ="root";
$pass ="";
$db ="Mobile Review";
$con = mysqli_connect($h,$u,$pass,$db);

if(!$con){
    die("Your connection to database have failed.". mysqli_connect_error);
}else {
    echo("Connection established successfully.");
}

?>