<?php
include './includes/db_connect.php';
include './includes/functions.php';

?>
<?php session_start() ?>
<?php
if(isset($_POST['submit'])){

    ChangePassword();

}



?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Change Password | Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="cp.css" />
    <script src="main.js"></script>
</head>
<body>

<div class="container">
	<div class="formcontainer">
 <h2>Change Password for <?php echo $_SESSION['FNAME'] .' '. $_SESSION['MNAME'] .' '. $_SESSION['LNAME'];?></h2>

 <p>Dear <?php echo $_SESSION['USERNAME'] ?>, follow the instructions below, to change your password.
 </p>

 <form action="./changepassword.php" method= "post">
	
	<label for="uname">Username:</label>
	<input type="text" name="uname" required>

	<label for="oldpassword">Old Password:</label>
	<input type="password" name="password" required>

	<label for="newpassword">New Password:</label>
	<input type = "password" name="newpassword" required>

	<button type="submit">Submit</button>
 </form>

 



</div>
</div>
    







</body>
</html>