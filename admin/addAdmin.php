<?php
session_start();
require_once('../Control/function.php');
$id = addID("users", "idUser", "ECO-");
//add_admin($id, $username, $password, $name, $img, $class)
if ( isset($_POST['AddAccount']) ) {
  add_admin($id, $_POST['Username'], $_POST['Password'], $_POST['Name'], $_POST['Profimg'], $_POST['Class']);
}
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
                                    <h4 class="title">User dashboard </h4>
                                    <p class="category">Add user</p>
                                </div>
                                <div class="card-content table-responsive">
                                 <div class="row">
                                  <form class="needs-validation" method="post">
                                    <div class="form-row">
                                      <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Name</label>
                                        <input type="text" class="form-control" id="validationCustom01" name="Name" placeholder="" value="" required>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Username @</label>
                                        <input type="text" class="form-control" id="validationCustom02" name="Username" required>
                                      </div>
                                      <div class="col-md-4 mb-3">
                                        <label for="validationCustomUsername">Class</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control" id="validationCustomUsername" name="Class" required value="Admin">
                                        </div>
                                      </div>
                                      <div class="col-md-4 mb-3" style="margin-top:20px;">
                                        <label for="validationCustom01">Password</label>
                                        <input type="password" class="form-control" id="validationCustom01" name="Password" required>
                                      </div>
                                      <div class="col-md-4 mb-3">
<!--                                        <label for="validationCustom01">Password</label>-->
                                        <input type="hidden" class="form-control" id="validationCustom01" value="https://wowsciencecamp.org/wp-content/uploads/2018/07/dummy-user-img-1.png" required name="Profimg">
                                      </div>
                                    </div>
                                    <div class="col-md-10 mb-7" style="margin-top:20px;">
                                    <button type="reset" class="cancelbtn">Reset</button>
                                    <button type="submit" class="signupbtn" name="AddAccount">Add Admin</button>
                                    </div>
                              </form>  
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Last Registred Admins</h4>
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
                            <tbody>
                               <?php foreach($list as $user): ?>
                               <?php if ($user->class == "Admin"):?>
                                <tr>
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

    <script>
              $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        function openNav() {
            document.getElementById("mySidenav").style.width = "310px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        </script>
 
</body>
</html>