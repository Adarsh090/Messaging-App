<?php 

include "./partials/header.php";

//for showing error
$emailError = false;
$passwordError = false;
$sizeError = false;
$extError = false;
$somethingError = false;


// checking for details entered by the user, if correct then create account

if($_SERVER["REQUEST_METHOD"] == "POST") {
	include "./partials/db_connect.php";

	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	$phoneNumber = $_POST['phonenumber'];
    $last_id = mysqli_insert_id($conn);
	$unique_id = "user_".rand(100000,999999)."_".$last_id;
	
	//image details
	$file = $_FILES['userimage'];
	$imageName = $_FILES['userimage']['name'];
	$tmpLocation = $file['tmp_name'];
	$imageSize = $file['size'];


	$fileExt = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
	$allowedExt = array('jpg', 'jpeg', 'png');

	$sql = "SELECT * FROM users WHERE email = '$email'";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	if($count>0) {
		$emailError = true;
	}
	else {
		if($password != $cpassword) {
			$passwordError = true;
		}
		else {
			//if email is new and password is also correct
			if(in_array($fileExt, $allowedExt)) {
				if($imageSize > 5000000) {
					$sizeError = true;
				}
				else {
					$dest = './img/'.$imageName;
            		move_uploaded_file($tmpLocation, $dest);

					$sql = "INSERT INTO `users` (`unique_id`, `fullname`, `password`, `phoneNumber`, `image`, `email`, `date`, `status`) VALUES ('$unique_id', '$fullname', '$password', '$phoneNumber', '$imageName', '$email', current_timestamp(), 'Active now');";
					$result = mysqli_query($conn, $sql);
					if($result) {
						session_start();
						$_SESSION['loggedin'] = true;
						$_SESSION['email'] = $email;
						$_SESSION['logged'] = time();
						
						// $_SESSION['fullname'] = $fullname;
						// $_SESSION['image'] = $imageName;
						// $_SESSION['uniqueid'] = $unique_id;
						// $_SESSION['status'] = "Active now";
						header("Location: ./index.php");

					}
					else {
						$somethingError = true;
					}
				}
			}
			else {
				$extError = true;
			}
		}
	}
}










?>

	<!-- Signup Section starts here -->


	<div class="signup-section">
		<h1>Signup</h1>
		
		<!-- Below line is for showing error -->
		<p class="show-error" id="showError">
			<?php

			if($emailError) {
				echo "This email is already used ! Please enter a unique email";
			}
			else if($passwordError) {
				echo "Please enter same password";
			}
			else if($extError) {
				echo "Please submit image file having extention as JPG, JPEG and PNG only";
			}
			else if($sizeError) {
				echo "Please select image below 5 MB";
			}
			else if($somethingError) {
				echo "505! Internal server error! Please try after sometime";
			}
			
			?>
			
		</p>

		
		<form action="signup.php" method="post" class="signup-form" enctype="multipart/form-data">
			<p>Full Name</p>
			<input type="text" name="fullname" placeholder="Full Name"  minlength="4" required><br/>
			<p>Email</p>
			<input type="email" name="email" placeholder="Email"  minlength="6" required><br/>
			<p>Phone Number</p>
			<input type="number" name="phonenumber" placeholder="Phone Number" minlength="10" maxlength="10" required><br/>
			
			<p>Password</p>
			<input type="password" name="password" placeholder="Password" minlength="6" required><br/>
			<p>Confirm password</p>
			<input type="password" name="cpassword" placeholder="Confirm Password" minlength="6" required><br/>
			<p>Choose your image</p>
			<input type="file" name="userimage" id="image" style="padding: 5px 6px 5px 0" required><br/>
			<button type="submit">Submit</button><br/>
		</form>
		<p>Already have an account ?</p>
		<a href="./login.php">Login</a>
	</div>
	
	<!-- Signup Section ends here -->
    

<script>
	if(document.getElementById("showError").innerText.length===0) {
		document.getElementById("showError").style.display="none";
	}
</script>
<?php 

include "./partials/footer.php";

?>
