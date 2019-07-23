<?php include 'functions.php'; ?>
<header>

    <ul class="details-list">



        <li><img src = "img/uj.jpg" width="90px" height="100px" alt= "user"/>
        <li>User: <?php echo $_SESSION['FNAME'] .' '. $_SESSION['MNAME'] .' '. $_SESSION['LNAME']; ?> </li>
        <li>Class: 
        <?php 
        
        if(!isset($_SESSION['STAGE'])){
            
            echo "Class Unknown";

        }else{
            
            echo $_SESSION['STAGE'];
        } 
        
        ?> </li>

        <li>Account Type: <?php echo $_SESSION['STATUS']; ?> </li>

        <li><a href="changepassword.php" target="_blank">Change Password </a></li>

    </ul>

    </header>
