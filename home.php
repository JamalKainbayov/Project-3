<?php
require_once("Index.php");
session_start();
?>

<body>
	<?php
	$user_id= $_SESSION['user_id'];
	if (isset($_POST["btn_add_post"]))
	 {
		$Post_Text = $_POST["post_text"];
		if ($Post_Text != " ")
			$sql = "INSERT INTO posts (user_id,post_content,post_date) VALUES ('$user_id','$Post_Text',now())";
		    $result = mysqli_query($con, $sql);
	}

	?>
	<div class="grid-container">
		<div class="main">
			<p class="page_titel">Home</p>
			<div class="tweet_box tweet_add">
				<div class="tweet_left">
				   <img src="RAlogo.jpeg" alt="">
				</div>
				

				<div class="tweet_body">
				
					<form method="post" enctype="multipart/form-data">
						<textarea name="post_text" id="" cols="100%" rows="3" placeholder="what's happening?"></textarea>

						<div class="tweet_icons-wrapper">
							<div class="tweet_icons-add">
								<a href=""> <i class="fa-regular fa-image"></i></a>
								<i class="fa-regular fa-face-smile"></i>
								
							<button class="button_tweet" type="submit" name="btn_add_post">Tweet</button>
						</div>
					</form>
				</div>
			</div>
	<?php
	
	require_once "tweeten.php";
	
	?>
		</div>
	</div>
	
</body>