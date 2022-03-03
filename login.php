<?php $conn = new mysqli("localhost", "root", "", "idb_bisew"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Question 1</title>
</head>
<body>
	<!-- <?php 

	if(isset($_POST['submit'])){
		extract($_POST);

		$data = $conn->query("SELECT * FROM users WHERE username = '$username' AND password = '$password' ");

		if ($data->num_rows>0) {
			echo "<h2>Valid User!</h2>";
		}else {
			echo "<h2>Inalid User!</h2>";
		}
	}

	 ?> -->


	 <?php 

	 	if (isset($_POST['submit'])) {
	 		extract($_POST);
	 	$data = $conn->query("SELECT * FROM user WHERE email = '$email' AND password = '$password' ");

	 	if ($data->num_rows>0) {
	 		echo "<h2>Valid User!</h2>";
		}else {
			echo "<h2>Inalid User!</h2>";
	 	}
	 	}

	  ?>




	<form action="" method="post">
		<input type="email" name="email" placeholder="Enter your UserName">
		<input type="password" name="password" placeholder="Enter your Password">
		<input type="submit" name="submit" value="LOGIN">
	</form>
</body>
</html>