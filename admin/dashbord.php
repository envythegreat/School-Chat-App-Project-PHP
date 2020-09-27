<?php
session_start();
require_once('../Control/function.php');
if (isset($_POST['logout'])) {
  adminLogOut($_SESSION['username']);
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home Page - ONLINEAPP.NET</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/fc7dee9de7.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="https://raw.githubusercontent.com/l-lin/font-awesome-animation/master/dist/font-awesome-animation.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/admindash.css" type="text/css">
</head>
<body>
    <div>
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                           
                            <li class="dropdown">
                              <form method="post" style="margin:0px;padding:0px;">
                              <button type="submit" class="logoutBtn" name="logout"><i class="fas fa-sign-in-alt"></i> Logout</button>
                             </form>
                            </li>

                        </ul>

                    </div>
                </nav>
            </div>
        </div>
        <!-- wrapper -->
        <div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand"><a>Admin DashBoard</a>  </li>
                    <li><a href="dashbord.php">DashBoard</a></li>
                    <li><a href="addUser.php">Add User</a></li>
                    <li><a href="addAdmin.php">Add Admin</a></li>
                    <li><a href="removeUser.php">Remove User</a></li>
                    <li><a href="removeAdmin.php">Remove Admin</a></li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                
<div class="container-fluid">
    <div class="row">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Overview dashboard </h4>
                        <p class="category">Analytics And Reports</p>
                    </div>
                    <div class="card-content table-responsive">
                     <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                          <div class="offer offer-danger">
                              <div class="shape">
                                  <div class="shape-text">
                                      <span class="glyphicon glyphicon glyphicon-eye-open"></span>							
                                  </div>
                              </div>
                              <div class="offer-content">
                                  <h3 class="lead">
                                  Visitor : <label class="label label-danger"><?php echo CountVisitor();?></label>
                                  </h3>
                                    <br>
                              </div>
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                          <div class="offer offer-success">
                              <div class="shape">
                                  <div class="shape-text">
                                      <span class="glyphicon glyphicon glyphicon-user"></span>							
                                  </div>
                              </div>
                              <div class="offer-content">
                                  <h3 class="lead">
                                       Users : <label class="label label-success"><?php echo CountUsers();?></label>
                                  </h3>
                                  <br>
                              </div>
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                          <div class="offer offer-radius offer-primary">
                              <div class="shape">
                                  <div class="shape-text">
                                      <span class="glyphicon glyphicon-th"></span>							
                                  </div>
                              </div>
                              <div class="offer-content">
                                  <h3 class="lead">
                                      <span style="font-size:17px;">Messages</span> : <label class="label label-primary"><?php echo CountMsg();?></label>
                                  </h3>
                                  <br> 
                              </div>
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                          <div class="offer offer-info">
                              <div class="shape">
                                  <div class="shape-text">
                                      <span class="glyphicon  glyphicon-user"></span>							
                                  </div>
                              </div>
                              <div class="offer-content">
                                  <h3 class="lead">
                                      Staff : <label class="label label-info"><?php echo CountAdmin();?></label>
                                  </h3>
                                  <br>
                              </div>
                          </div>
                      </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Last Registred Users</h4>
                        <p class="category">Analytics And Reports</p>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <tr>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody class="page">
                            <?php foreach($list as $user): ?>
                              <?php if ($user->class !== "Admin"):?>
                                <tr class="user-item">
                                  <td><?php echo $user->name ?></td>
                                  <td><?php echo $user->class ?></td>
                                  <td><?php echo $user->username ?></td>
                                </tr>
                              <?php endif;?>
                            <?php endforeach;?>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
    </div>
 <script src="../js/data.js"></script>
</body>
</html>