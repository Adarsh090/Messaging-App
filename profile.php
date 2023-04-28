<?php

include "./partials/header.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

	include "./partials/db_connect.php";
	$email = $_SESSION['email'];
	$sql = "SELECT * FROM `users` WHERE `email` = '$email';";

	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);
	if($count == 1) {
		$rows = mysqli_fetch_assoc($result);
		$image = $rows['image'];
		$fullname = $rows['fullname'];
		$email = $rows['email'];
		$phonenumber = $rows['phonenumber'];
		$status = $rows['status'];
	}








?>


	<div class="profile-cont">
		<div class="profile-container">
			<div class="picture-container">
				<div class="image-container">
					<img src="./img/<?php echo $image; ?>" alt="Profile Picture">
				</div>
				<div class="update-image-button">
					<button type="button" class="btn-primary">Update Image</button>
				</div>
				
				
			</div>
			<form class="info">
				<div id="name" class="info-container">
					<label>Name</label>
					<label><?php echo $fullname; ?></label>
				</div>
				<div id="email" class="info-container">
					<label>Email</label>
					<label><?php echo $email; ?></label>
				</div>
				<div id="number" class="info-container">
					<label>Phone Number</label>
					<label><?php echo $phonenumber; ?></label>
				</div>
				<div id="stat" class="info-container">
					<label>Status</label>
					<label><?php echo $status; ?></label>
				</div>
				<div id="fricount"  class="info-container">
					<label>Friends</label>
					<label>21</label>
				</div>

				<button type="submit" class="btn-primary" onclick="updateProfile()">Update Profile</button>
			</form>
		</div>
	</div>



<?php 

include "./partials/footer.php";

?>