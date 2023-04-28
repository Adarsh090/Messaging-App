<?php 

$isLogin = false;
session_start();



if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	$isLogin = true;
	$t=time();
	// echo($t-$_SESSION['logged']);
	if($t - $_SESSION['logged'] > 900) {
		header("location: logout.php");
	}
	else {
		$_SESSION['logged'] = time();
	}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- css file declaration -->
	<link rel="stylesheet" href="style.css" />

	<!-- icon link declaration -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

	<title>Chatters</title>
</head>

<body>
	<!-- Navbar code here -->
	<nav class="navbar">
		<div class="logo">
			<a href="./index.php">
				<img src="./img/logo.jpg" alt="logo image" />
			</a>
		</div>
		<div class="logo-right">
			<div><a href="./index.php">Home</a></div>
			<div><a href="./chat.php">Chat</a></div>
			<div><a href="./friends.php">Friends</a></div>

			<?php 
			if($isLogin == true) {
				?> 
				
				<div class="dropdown">
					<a href="./profile.php">Profile</a>
					<div class="dropdown-content">
						<a href="./logout.php">Logout</a>
					</div>
				</div>
				
				<?php
			}
			else if($isLogin == false) {
				?>
				
				<div><a href="./login.php">Login</a></div>
				
				<?php
			} 
			
			
			?>

			
		</div>
	</nav>