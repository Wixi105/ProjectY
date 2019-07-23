<?php include './includes/db_connect.php';?>
<?php  include './includes/functions.php';?>
<?php include './includes/head.php';?>

<?php
if(isset($_POST['login'])){

   Login();

}

?>
<?php //echo $password = password_hash('diablos8', PASSWORD_BCRYPT, array('cost'=> 12));?>
<body class='wholeshow'>
    <div class="wholething">
        <div class="login">
            <div>
                <h2>UNIVERSITY JUNIOR HIGH SCHOOL</h2>
                <h3>STUDENT/TEACHER PORTAL SYSTEM</h3>

                <div class="imagediv">
                    <img class="schoollogo" src="img/uj.jpg" height="90px">
                </div>

            </div>



            <form class="formstuff" action="index.php" method="POST">

                <!-- <label>Username:</label>
<input type="text" placeholder="Enter Username Here" required autofocus maxlength="25">
-->

                <label for="studentnumber">Username:</label>
                <input type="text" placeholder="Index Number" name="username" required autofocus>

                <label for="password">Password:</label>
                <input type="password" name="password" required autofocus>
                <br />
                <span class="password-reset"><a href="">Forgot password?</a></span>
                 <br/>
                <input  class="btn"type="submit" value="Send" name="login">

            </form>

        </div>
    </div>
</body>

</html>
