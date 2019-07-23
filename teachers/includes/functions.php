<?php

function ShowGrades(){
    global $connection;

$query = "SELECT * FROM USERS WHERE STATUS = 'STUDENT'";

$send_query = mysqli_query($connection,$query);

if(!$send_query){
    die('Query unsuccessful '. mysqli_error($connection));
}

while($row = mysqli_fetch_array($send_query)){

    $_SESSION['USERNAME'] = $row['USERNAME'];
    $_SESSION['ROLE'] = $row['ROLE'];
    $_SESSION['FNAME']= $row['FNAME'];
    $_SESSION['MNAME'] = $row['MNAME'];
    $_SESSION['LNAME'] = $row['LNAME'];
    $_SESSION['STAGE'] = $row['STAGE'];
 
}


?>
