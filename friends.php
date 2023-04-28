<?php 

include "./partials/header.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}




?>

	<!-- Friends section starts here -->
	<div class="friend-section-container">
		<div class="friend-section-head">
			<div class="friend-section-tab" onclick="userList()" id="user-list1" 
				style=" background-color: #416ac3; color: #fff;">
				<p>Users</p>
			</div>
			<div class="friend-section-tab" onclick="friendList()" id="friend-list1">
				<p>Friends</p>
			</div>
			<div class="friend-section-tab" onclick="requestList()" id="request-list1">
				<p>Requests</p>
			</div>
		</div>


		<!------------------------------- User List ------------------------------->
		<div class="friend-section-result" style="display: block;" id="user-list">
			<div class="user-container">
				<div class="user-container-item">
					<div class="user-container-item1">
						<img src="./img/manishIMG.jpg" alt="user-image">
						<p>Manish Kumar</p>
					</div>
					<div class="user-container-item2">
						<button class="btn-success">Accept</button>
						<button class="btn-danger">Decline</button>
						<button class="btn-primary">Send request</button>
						<button class="btn-primary">View profile</button>
					</div>
				</div>
			</div>
			<div class="user-container">
				<div class="user-container-item">
					<div class="user-container-item1">
						<img src="./img/manishIMG.jpg" alt="user-image">
						<p>Manish Kumar</p>
					</div>
					<div class="user-container-item2">
						<button class="btn-success">Accept</button>
						<button class="btn-danger">Decline</button>
						<button class="btn-primary">Send request</button>
						<button class="btn-primary">View profile</button>
					</div>
				</div>
			</div>
			
			
			
		</div>


		<!------------------------------- Friend List ------------------------------->
		<div class="friend-section-result" id="friend-list">
			<div class="user-container">
				<div class="user-container-item">
					<div class="user-container-item1">
						<img src="./img/manishIMG.jpg" alt="user-image">
						<p>Manish Kumar</p>
					</div>
					<div class="user-container-item2">
						<button class="btn-danger">Remove friend</button>
						<button class="btn-primary">View profile</button>
					</div>
				</div>
			</div>
			
			
			<div class="user-container">
				<div class="user-container-item">
					<div class="user-container-item1">
						<img src="./img/manishIMG.jpg" alt="user-image">
						<p>Manish Kumar</p>
					</div>
					<div class="user-container-item2">
						<button class="btn-danger">Remove friend</button>
						<button class="btn-primary">View profile</button>
					</div>
				</div>
			</div>
		</div>

		<!------------------------------- Request list ------------------------------->
		<div class="friend-section-result" id="request-list">
			<div class="user-container">
				<div class="user-container-item">
					<div class="user-container-item1">
						<img src="./img/manishIMG.jpg" alt="user-image">
						<p>Manish Kumar</p>
					</div>
					<div class="user-container-item2">
						<button class="btn-success">Accept</button>
						<button class="btn-danger">Decline</button>
						<button class="btn-primary">View profile</button>
					</div>
				</div>
			</div>
			
			
			
			
			<div class="user-container">
				<div class="user-container-item">
					<div class="user-container-item1">
						<img src="./img/manishIMG.jpg" alt="user-image">
						<p>Manish Kumar</p>
					</div>
					<div class="user-container-item2">
						<button class="btn-success">Accept</button>
						<button class="btn-danger">Decline</button>
						<button class="btn-primary">View profile</button>
					</div>
				</div>
			</div>
		</div>




	</div>


<?php 

include "./partials/footer.php";

?>