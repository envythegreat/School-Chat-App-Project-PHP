<?php
session_start();
require_once('../Control/function.php');
if ( isset($_POST['deleteUs']) ) {
  if (deleteUser($_POST['delete'])){
    $good = "<p style='color:green;'>Deleted Successfully</p>";
  } else {
    $error = "<p style='color:red;'>Sorry Something Wrong</p>";
  }
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
       <script src="https://kit.fontawesome.com/fc7dee9de7.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
                                    <div class="card-content table-responsive">
                                        <table class="table table-hover">
                                          <thead class="text-warning">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Class</th>
                                                    <th>Username</th>
                                                    <th>Remove</th>
                                                </tr>
                                          </thead>
                                          <tbody class="page">
                                               <?php foreach($list as $user): ?>
                                               <?php if ($user->class == "Admin"):?>
                                                <tr class="user-item">
                                                    <td><?php echo $user->name ?></td>
                                                    <td><?php echo $user->class ?></td>
                                                    <td><?php echo $user->username ?></td>
                                                    <td><input type="checkbox" name='delete[]' value="<?php echo $user->username ;?>"></td>
                                                </tr>
                                                <?php endif;?>
                                                <?php endforeach;?>
                                          </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-10 mb-7" style="margin-top:20px;">
<!--                                    <button type="reset" class="cancelbtn">Reset</button>-->
                                    <button type="submit" class="signupbtn" name="deleteUs">Delete User</button>
                                    </div>
                              </form>  
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
        </div>
    </div>
    <script src="../js/jquery-3.1.0.min.js"></script>
    <script src="../js/data.js"></script>
    <script>
      
    </script>
</body>
</html>