<?php
session_start();
require_once('./Control/function.php');
$_SESSION['remote'] = $_SERVER['REMOTE_ADDR'];
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  if ( isset($_POST['sign_in']) ) {
    $Username = _tr( 'Username' );
    $Password = _tr( 'Password' );
    $_SESSION['Username'] = $Username;
    if ( login($Username, $Password) ){}
    
  }
}
$Ip_Visit = $_SESSION['remote'];
$Browser_Visit = get_browser_name($_SERVER['HTTP_USER_AGENT']);
Get_VisitorCount($Ip_Visit,$Browser_Visit);

?>
<html>
 <head>
  <link rel="stylesheet" href="./css/testcss.css">
  <title>Login To Your Account</title>
</head>
<body>
<div id="wrapper">
  <div id="left">
    <div id="signin">
    <form method="post">
      <div>
        <label>Username</label>
        <input type="text" class="text-input" placeholder="Username" name="Username" required>
      </div>
      <div>
        <label>Password</label>
        <input type="password" class="text-input" placeholder="Password" name="Password" required>
      </div>
      <button type="submit" class="primary-btn"  name="sign_in">Sign In</button>
    </form>
    <div class="links">
      <a href="#">Forgot Password</a>
    </div>
    </div>
    <footer id="main-footer">
      <p>Copyright &copy; 2019, <strong>Envy@Sin</strong> All Rights Reserved</p>
      <div>
        <a href="#">terms of use</a> | <a href="#">Privacy Policy</a>
      </div>
    </footer>
  </div>
  <div id="right">
    <div id="showcase">
      <div class="showcase-content">
        <h1 class="showcase-text">
          Chat With Your Class Mate <strong>Now</strong>
        </h1>
      </div>
    </div>
    </div>
</div>
</body>
</html>