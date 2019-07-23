<?php include './includes/db_connect.php'; ?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register - GMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="register.css">
    <link rel="icon" href="img/uj.jpg" type="img/favicon">
    <script src="test.js"></script>
</head>

<body>
    <div class="wholething">
        <div class="login">
            <div>
                <h1>Register</h1>
                <h3>STUDENT PORTAL SYSTEM</h3>

                <div class="imagediv">
                    <img class="schoollogo" src="img/uj.jpg" height="90px">
                </div>

            </div>



            <form class="formstuff" action="./includes/registration.php" method="POST">


                    <label for="fname">First Name:</label>
                    <input type="text" placeholder="First Name" name="fname"  required autofocus/>
                    <br/>

                    <label for="mname">Middle Name:</label>
                    <input type="text" placeholder="Middle Name" name="mname" autofocus/>
                    <br/>

                    <label for="lname">Last Name:</label>
                    <input type="text" placeholder="Last Name"  name ="lname" required autofocus/>
                    <br/>

                    <label for="sex">Sex:</label>
                    <input type="text"  name = "sex" required autofocus/>
                    <br/>

                    <label for="dob">Date of Birth:</label>
                    <input type="date" name="dob" required autofocus/>
                    <br/>

                    <label for="stage">Stage:</label>
                    <input type="number" min="1" max="3" pattern="[1-3]" name="stage" required autofocus/>
                    <br/>

                    <label for="status">Status:</label>
                    <input type="text" name="status" required autofocus/>
                    <br/>

                    <label for="email">Email:</label>
                    <input type="email" name = "email" required autofocus/>
                    <br/>

                    <label for="phone">Contact Number:</label>
                    <input type="text" name="contact" required autofocus/>
                    <br/>

                    <label for="studentnumber">Username:</label>
                    <input type="text" placeholder="Username" name= "username" required autofocus>
    
                    <label for="password">Password:</label>
                    <input type="password" placeholder='Password' name= "password" required autofocus>
                    <br />
                

                <input type="submit" value="Send" name='submit'>

            </form>

        </div>
    </div>
</body>

</html>
