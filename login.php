<?php

include "./partials/header.php";

$passwordError = false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
	include "./partials/db_connect.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password';";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	if($count == 0) {
		$passwordError = true;
	}
	else {
		$rows = mysqli_fetch_assoc($result);
			
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['email'] = $email;
		$_SESSION['logged'] = time();

		$sql1 = "UPDATE `users` SET `status` = 'Active Now' WHERE `users`.`email` = '$email';";
		$result1 = mysqli_query($conn, $sql1);

		// $_SESSION['fullname'] = $rows['fullname'];
		// $_SESSION['image'] = $rows['image'];
		// $_SESSION['uniqueid'] = $rows['unique_id'];
		// $_SESSION['status'] = "Active now";
		header("Location: ./index.php");
		
	}

}


?>

	<!-- Body section here -->

	<div class="login-section">
		<h1>Login</h1>

		<p class="show-error" id="show-Error">
		<?php 

		if($passwordError) {
			echo "Email or Password is incorrect";
		}

		?>
		</p>


		<form action="" method="post" class="login-form">
			<p>Username</p>
			<input type="email" name="email" placeholder="Email"><br/>
			<p>Password</p>
			<input type="password" name="password" placeholder="Password"><br/>
			<button type="submit">Submit</button><br/>
		</form>
		<p>Do not have an account ? Create one</p>
		<a href="./signup.php">Signup</a>
	</div>


<script>
	if(document.getElementById("show-Error").innerText.length===0) {
		document.getElementById("show-Error").style.display="none";
	}
</script>
<?php 

include "./partials/footer.php";

?>