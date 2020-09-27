
<?php
session_start();
require_once('../Control/function.php');
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  if ( isset($_POST['sign_in']) ) {
    $Username = _tr( 'Username' );
    $Password = _tr( 'Password' );
    if ( strlen($Password)<8 ) {
      echo "<script>alert('Your Password should have at least 8 characters')</script>"; 
    }
    if ( loginAdmin($Username, $Password) ){}
      $_SESSION['username'] = $Username;
  }
}

?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Login Ty Your Account</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="../css/signin.css" type="text/css" media="all" />
<!--	<link href="./css/font-awesome.min.css" rel="stylesheet">-->
	<!-- Font-Awesome-Icons-CSS -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
	<style>
      *{
        overflow: hidden
      }
  
    </style>
</head>

<body>
	<div class="main-bg">
		<!-- title -->
		<!-- <h1>Latest Login Form</h1> -->
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<img src="http://cdn.onlinewebfonts.com/svg/img_569204.png" alt="" style="width:100px;">
				</div>
				<form action="" method="POST">
					<p class="legend">Login Here<span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<input type="text" placeholder="Username" name="Username" required />
						<span class="fa fa-envelope"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Password" name="Password" required />
						<span class="fa fa-unlock"></span>
					</div>
					<button type="submit" class="btn submit" name="sign_in">
						<span class="fas fa-sign-in-alt"></span>
					</button>
				</form>
				<a href="#" class="bottom-text-w3ls">Forgot Password?</a>
			</div>
		</div>
	</div>
</body>

</html>