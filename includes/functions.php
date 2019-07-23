<?php

include 'db_connect.php';

function RegisterUsers(){
    global $connection;

    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $lastname = $_POST['lname'];
    $sex = $_POST['sex'];
    $dob = $_POST['dob'];
    $stage = $_POST['stage'];
    $email = $_POST['email'];
    $phone = $_POST['contact'];
    $status = $_POST['status'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $password = password_hash($password, B_CRYPT);
    
          //escape strings for special characters that can breach the database;
    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);
    $firstname = mysqli_real_escape_string($connection,$firstname);
    $middlename = mysqli_real_escape_string($connection,$middlename);
    $lastname = mysqli_real_escape_string($connection,$lastname);
    $sex = mysqli_real_escape_string($connection,$sex);   
    $stage = mysqli_real_escape_string($connection,$stage);
    $email = mysqli_real_escape_string($connection,$email);
    $phone = mysqli_real_escape_string($connection,$phone);
    $status = mysqli_real_escape_string($connection,$status);

        
    $query = "INSERT INTO USERS(USERNAME,PASSWORD,FNAME,MNAME,LNAME,SEX,DOB,STAGE,EMAIL,PHONE,STATUS) VALUES('{$username}','{$password}','{$firstname}',
    '{$middlename}','{$lastname}','{$sex}','{$dob}','{$stage}','{$email}','{$phone}','{$status}')";

    $send_query = mysqli_query($connection,$query);

    if (!$send_query) {
        die("Query unsuccessful " . mysqli_error($connection));
    }else{
        header("Location:../index.php?registration=successful");
    }



}

 #USER LOGIN FUNCTION.
function Login(){
         global $connection;


         $username = $_POST['username'];
         $password = $_POST['password'];
     
         $username = mysqli_real_escape_string($connection,$username);
         $password = mysqli_real_escape_string($connection,$password);

         
     
     $query = "SELECT * FROM USERS WHERE USERNAME = '{$username}'";
     
     $send_query = mysqli_query($connection,$query);
     
     if(!$send_query){
         die('Query unsuccessful '. mysqli_error($connection));
     }
     
     
     while($row = mysqli_fetch_array($send_query)){
     
          $db_user_id = $row['USER_ID'];
          $db_username = $row['USERNAME'];
          $db_password = $row['PASSWORD'];
          $db_user_fname = $row['FNAME'];
          $db_user_mname = $row['MNAME'];
          $db_user_lname = $row['LNAME'];
          $db_user_role = $row['ROLE'];
          $db_user_class = $row['STAGE'];
          $db_user_status = $row['STATUS'];
     
          
     
     }
     $passwordVerify = password_verify($password,$db_password);
     
     if($passwordVerify){
         
         $_SESSION['USERNAME'] = $db_username;
         // $_SESSION['PASSWORD'] = $db_password;
         $_SESSION['ROLE'] = $db_user_role;
         $_SESSION['FNAME']= $db_user_fname;
         $_SESSION['MNAME'] = $db_user_mname;
         $_SESSION['LNAME'] = $db_user_lname;
         $_SESSION['STAGE'] = $db_user_class;
         $_SESSION['STATUS'] = $db_user_status;
    

            //check if login is being made by TEACHER
            if ($db_user_status == "TEACHER") {
                
                header("Location:teachers/dashboard.php?login=successful");
            }

            //check if login is being made by STUDENT
            if($db_user_status == "STUDENT"){
     
         header("Location:viewresult.php?login=successful");
     }
     
     } else {
     
         header("Location:index.php");
         
         exit();
     
     }

}

function ForgotPassword(){
   
$username = $_POST['username'];
$email = $_POST['email'];
$dob = $_POST[''];
  
}





























    #FirstWritten
    #26th December 2018.
    #Between 10 and 11pm
    #Thank you Jesus.
    #Eric Nyarko-Sampson Jr.
?>