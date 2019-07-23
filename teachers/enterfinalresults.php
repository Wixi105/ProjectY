<?php  include './includes/head.php'; ?>
<?php include './includes/db_connect.php'; ?>

<body>
  <!--navbar-->
<nav class="navbar navbar-expand-md navbar-light">

<button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle = "collapse" data-target="#myNavbar">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="myNavbar">
    <div class="container-fluid">
        <div class="row">

        <!-- sidebar -->

        <div class="col-xl-3 col-md-4 col-lg-3 sidebar fixed-top">

            <a href="" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Teacher's Portal</a>

            <div class="bottom-border pb-3">
                <img src="img/uj.jpg" width="50" class="rounded-circle"alt="">
                <a href="" class="text-white">Jon Snow</a>
            </div>

            <ul class="navbar-nav flex-column mt-4">

              <?php include "./includes/navigate.php"; ?>
            </ul>
        </div>
        <!-- end of sidebar -->


        <!-- topnav -->
        <div class="col-xl-9 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2">
            <div class="row align-items-center">
                <div class="col-md-4">
                 <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                </div>
                <div class="col-md-5">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control search-input" placeholder="Search">
                        <button type="button" class="btn btn-white search-button">
                            <i class="fas fa-search text-danger"></i>
                        </button>
                    </div>
                </form>
                </div>
                <div class="col-md-3">
                <ul class="navbar-nav">

                    <li class="nav-item icon-parent"><a href="" class="nav-link icon-bullet">
                    <i class="fas fa-comments text-muted fa-lg"></i></a>
                    </li>


                    <li class="nav-item icon-parent"><a href="" class="nav-link icon-bullet">
                    <i class="fas fa-bell text-muted fa-lg"></i></a>
                    </li>


                   <li class="nav-item ml-md-auto"><a href="../includes/logout.php" class="nav-link" data-toggle="modal" data-target="#sign-out" onclick="javascript: return confirm('Are you sure you want to logout?');">
                    <i class="fas fa-sign-out-alt text-danger fa-lg"></i></a>
                    </li>
                </ul>

                </div>

            </div>
        </div>
        <!-- endof topnav -->
        </div>
    </div>
</div>
</nav>
  <!--END OF NAV-->
  
<!--TABLES-->
<div class="container-fluid">
  <div class="row mb-5">
    <div class="col-lg-9 col-md-8 ml-auto mt-5">
      <div class="row align-items-center">
        <div class="col-12 mb-4 mb-xl-0">

        <form action="" class="resultform">
          <table class='table text-center table-dark'>
             <thead class="thead-default">
              <tr class='text-muted'>
              <th>#</th>
              <th>Name</th>
              <th>Class</th>             
              <th>Score</th>
              <th>Status</th>
              </tr>
            </thead>
            <tbody>
        <?php

              $query = "SELECT * FROM USERS WHERE STATUS = 'STUDENT';";

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
                $db_user_class = $row['STAGE'];
                  
          echo "<tr class='text-muted'>";
          echo "<td>$db_user_id</td>";
          echo "<td>$db_user_fname $db_user_mname $db_user_lname</td>";
          echo "<td>$db_user_class</td>";
          echo "<td><input type='text' class='text-center'></td>";
          echo "<td><button class='btn btn-warning' name='submit'>Submit</button></td>";
          echo "</tr>";
          }
        ?>
          </tbody>
        </table>
        </form>

          <div class="text-center">

           <button class="btn btn-warning justify-content-center" type="submit">Submit All</button>
          
           </div>

</body>
</html>
