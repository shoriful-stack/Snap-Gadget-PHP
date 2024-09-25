<?php 
include "../Class/adminLogin.php";
$obj = new AdminLogin();
if($_SERVER['REQUEST_METHOD'] == $_POST){
	$adminUsername = $_POST['adminUsername'];
	$adminPass = $_POST['adminPass'];

    $checkAdmin = $obj->adminLogin($adminUsername, $adminPass);
}

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="adminUsername"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="adminPass"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Training with live project</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>