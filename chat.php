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
	if($count == 0) {
		$passwordError = true;
	}
	else {
		$rows = mysqli_fetch_assoc($result);
		$image = $rows['image'];
	}



?>

	<!-- Chat body -->
	<div class="chat-container">

		<div class="chat-container-left">
			<div class="chat-container-head">
				<div class="user-image-container">
					<img src="./img/<?php echo $image ?>" alt=" user image">
				</div>
				<div>
					---
				</div>
			</div>
			<form action="" class="search-user">
				<input type="text" name="" placeholder="Search here..." id="">
				<button class="search-button">
					<img src="./img/search.png" alt="search-icon image">
				</button>
			</form>
			

			
			<div class="all-chat-container">
				<div class="chat-item-container">
					<img src="img/atul image.jpeg" alt="friend image">
					<div>
						<h4>Atul Anand</h4>
						<p>Follow this link to join my Whatsapp group</p>
					</div>
				</div>
				<div class="chat-item-container">
					<img src="img/harsh image.jpeg" alt="friend image">
					<div>
						<h4>Harsh Tomar</h4>
						<p>Follow this link to join my Whatsapp group</p>
					</div>
				</div>
		
			</div>
		</div>
		<!-- left chat container ends here -->


		<!-- right chat container starts here -->

		<div class="chat-container-right">
			<div class="chat-container-head">
				<div class="user-image-container">
					<img src="img/harsh image.jpeg" alt="friend image">
					<h4 style="margin-left: 15px">Harsh Tomar</h4>
				</div>
				<div>
					call - video call
				</div>
				
				
			</div>
			<div class="all-text-container" id="text-container">
				<div class="chat-incoming">
					<img src="img/harsh image.jpeg" alt="friend image">
					<div class="chat-sender">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-outgoing">
					<div class="chat-receiver">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-outgoing">
					<div class="chat-receiver">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-outgoing">
					<div class="chat-receiver">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-incoming">
					<img src="img/harsh image.jpeg" alt="friend image">
					<div class="chat-sender">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-outgoing">
					<div class="chat-receiver">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-incoming">
					<img src="img/harsh image.jpeg" alt="friend image">
					<div class="chat-sender">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-outgoing">
					<div class="chat-receiver">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-incoming">
					<img src="img/harsh image.jpeg" alt="friend image">
					<div class="chat-sender">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-outgoing">
					<div class="chat-receiver">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-incoming">
					<img src="img/harsh image.jpeg" alt="friend image">
					<div class="chat-sender">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-outgoing">
					<div class="chat-receiver">
						<p>Lorem ipsum dolor, sit amet consect!</p>
					</div>
				</div>
				<div class="chat-incoming">
					<img src="img/harsh image.jpeg" alt="friend image">
					<div class="chat-sender">
						<p>Lorem ipsum dolor, sit amet consect! Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti officiis sit eveniet natus beatae autem, veritatis totam! Reprehenderit nihil repudiandae asperiores.</p>
					</div>
				</div>
				<div class="chat-outgoing">
					<div class="chat-receiver">
						<p>Lorem ipsum dolor, sit amet consect! Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit eaque ea labore, sunt porro voluptas obcaecati quia beatae. Sapiente doloribus similique atqueporro numquam sit, ad quisquam possimus animi!</p>
					</div>
				</div>
			</div>
			
			
			<form action="" class="type-msg-form">
				<input type="text" placeholder="Type something...">
				<button class="send-button">
					<img style="width: 100%;" src="./img/send.png" alt="">
				</button>

			</form>
		</div>


		
		

	</div>




	<!-- No footer in Chat page -->

    <script src="index.js"></script>
	<script>document.getElementById('text-container').scrollTo(0, document.body.scrollHeight);</script>
</body>
</html>
