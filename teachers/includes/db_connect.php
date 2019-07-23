<?php

$DB_HOST= "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_NAME = "portaldb";


$connection =  mysqli_connect($DB_HOST,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);

if(!$connection){

    die("Connection to the database failed " . mysqli_error($connection));

}

?>