<?php

$conn = mysqli_connect("localhost", "root", "", "makos_cms");
$mysqli = new mysqli("localhost", "root", "", "makos_cms");

if(!$conn){
    die("Connection Failed, Please Try Again !!".mysqli_connect_error());
}

?>