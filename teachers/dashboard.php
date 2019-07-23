<?php  include './includes/head.php'; ?>

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
  <!--END-->

  <!--MODAL-->
<div class="modal fade" id="signout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Want to Leave?</h4>
        <button type="button" name="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        Press Logout to Leave.
      </div>
      <div class="modal-footer">
        <button type="button" name="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
        <button type="button" name="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
      </div>
    </div>
  </div>
</div>
  <!--END OF MODAL-->
  <!-- CARDS -->
<section>
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-9 ml-auto">
         <div class="row pt-md-5 mt-md-3 mb-5">

           <div class="col-xl-3 col-xl-6 p-2">
             <div class="card card-common">
               <div class="card-body">
                 <div class="d-flex justify-content-between">
                   <i class="fas fa-child fa-3x text-warning"></i>
                   <div class="text-right text-secondary">
                     <h5>Students In Class</h5>
                     <h3>100</h3>
                   </div>
                 </div>
               </div>
               <div class="card-footer text-secondary">
                 <i class="fas fa-sync mr-3"></i>
                 <span>Update Now</span>
               </div>
             </div>
           </div>
           <div class="col-xl-3 col-xl-6 p-2">
             <div class="card card-common">
               <div class="card-body">
                 <div class="d-flex justify-content-between">
                   <i class="fas fa-money-bill-alt fa-2x text-success"></i>
                   <div class="text-right text-secondary">
                     <h5>Students Owing Fees</h5>
                     <h3>10</h3>
                   </div>
                 </div>
               </div>
               <div class="card-footer text-secondary">
                 <i class="fas fa-sync mr-3"></i>
                 <span>Update Now</span>
               </div>
             </div>
           </div>
           <div class="col-xl-3 col-xl-6 p-2">
             <div class="card card-common">
               <div class="card-body">
                 <div class="d-flex justify-content-between">
                   <i class="fas fa-users cart fa-3x text-info"></i>
                   <div class="text-right text-secondary">
                     <h5>Online Users</h5>
                     <h3>10000</h3>
                   </div>
                 </div>
               </div>
               <div class="card-footer text-secondary">
                 <i class="fas fa-sync mr-3"></i>
                 <span>Update Now</span>
               </div>
             </div>
           </div>
           <div class="col-xl-3 col-xl-6 p-2">
             <div class="card card-common">
               <div class="card-body">
                 <div class="d-flex justify-content-between">
                   <i class="fas fa-chart-line cart fa-3x text-danger"></i>
                   <div class="text-right text-secondary">
                     <h5>Rate of Student Failure</h5>
                     <h3>150%</h3>
                   </div>
                 </div>
               </div>
               <div class="card-footer text-secondary">
                 <i class="fas fa-sync mr-3"></i>
                 <span>Update Now</span>
               </div>
             </div>
           </div>

         </div>
       </div>

     </div>
   </div>
</section>
  <!-- END OF CARDS -->

<!--TABLES-->
<div class="container-fluid">
  <div class="row mb-5">
    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
      <div class="row align-items-center">
        <div class="col-12 mb-4 mb-xl-0">
          <h3 class="text-muted text-center mb-4">Staff Salary</h3>
          <table class="table bg-light text-center">
            <thead>
              <tr class="text-muted">
                <th>#</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Date</th>
                <th>Content</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>John</td>
                <td>$2000</td>
                <td>25 May 2018</td>
                <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
              </tr>
              <tr>
                <th>2</th>
                <td>Emilia</td>
                <td>$9000</td>
                <td>25 May 2018</td>
                <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
              </tr>
              <tr>
                <th>3</th>
                <td>Esi</td>
                <td>$2800</td>
                <td>25 May 2018</td>
                <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
              </tr>
              <tr>
                <th>4</th>
                <td>Jameson</td>
                <td>$6899</td>
                <td>25 May 2018</td>
                <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
              </tr>
              <tr>
                <th>5</th>
                <td>Dotse</td>
                <td>$890</td>
                <td>25 May 2018</td>
                <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
              </tr>
            </tbody>
          </table>
          <!-- pagination -->
          <nav>
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a href="#" class="page-link py-2 px-3" >
                    <span>&laquo;</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link py-2 px-3" >
                    <span>1</span>
                  </a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link py-2 px-3" >
                    <span>2</span>
                  </a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link py-2 px-3" >
                    <span>3</span>
                  </a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link py-2 px-3" >
                    <span>&raquo;</span>
                  </a>
                </li>
              </ul>
          </nav>
          <!-- end of pagination -->
        </div>
        <div class="col-12">
          <h3 class="text-muted text-center mb-3">Suspension List</h3>
          <table class="table text-center table-dark table-hover">
            <thead>
              <tr class="text-muted">
                <th>#</th>
                <th>Name</th>
                <th>Offense</th>
                <th>Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>Dotse</td>
                <td>Rape</td>
                <td>25 May 2018</td>
                <td><span class="badge badge-danger w-75 py-2">Suspended</span></td>
              </tr>
              <tr>
                <th>2</th>
                <td>David</td>
                <td>Sexual Harassment</td>
                <td>25 May 2018</td>
                <td><span class="badge badge-warning w-75 py-2">At Trial</span></td>
              </tr>
              <tr>
                <th>3</th>
                <td>Goliath</td>
                <td>Grand Theft Auto</td>
                <td>25 May 2018</td>
                <td><span class="badge badge-danger w-75 py-2">Suspended</span></td>
              </tr>
              <tr>
                <th>4</th>
                <td>Michael</td>
                <td>Insulting a Teacher</td>
                <td>25 May 2018</td>
                <td><span class="badge badge-success w-75 py-2">Released</span></td>
              </tr>
            </tbody>

          </table>
          <!-- pagination -->
          <nav>
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a href="#" class="page-link py-2 px-3" >
                    <span>Previous</span>
                  </a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link py-2 px-3" >
                    <span>1</span>
                  </a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link py-2 px-3" >
                    <span>2</span>
                  </a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link py-2 px-3" >
                    <span>3</span>
                  </a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link py-2 px-3" >
                    <span>Next</span>
                  </a>
                </li>
              </ul>
          </nav>
          <!-- end of pagination -->

        </div>
      </div>
    </div>
  </div>
</div>
<!-- END OF TABLES -->




</body>
</html>
