<?php
$host = '127.0.0.1';
$Name = 'root';
$Email = "";
$database = "registration_form";
$con = mysqli_connect($host,$Name,$Email,$database);
if(!$con)
{
    die("Database connection failed:".mysqli_error($con));
}
?>