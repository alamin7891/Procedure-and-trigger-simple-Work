<?php $conn = new mysqli("localhost", "root", "", "idb_bisew"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inset Data With StoreProcedure</title>
	<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container mt-20 w-85">
		<div class="row">
	<h2>Student Entry Form</h2>

	<?php 

	if (isset($_POST['submit'])) {
		extract($_POST);

		$sql = "CALL student_entry('$name', '$address', '$contact')";
		$conn->query($sql);

		if ($conn->affected_rows>0) {
			echo '<div class="alert alert-primary" role="alert">
  				Entry Successfully!</div>';
		}

	}
	 ?>


	
			<form action="" method="POST">	

  				<div class="mb-3">
    				<label for="" class="form-label">Name</label>
    				<input type="name" name="name" class="form-control" placeholder="Enter Student Name">
  				</div>
  				<div class="mb-3">
    				<label for="" class="form-label">Address</label>
    				<input type="name" name="address" class="form-control" placeholder="Enter Address">
  				</div>
  				<div class="mb-3">
    				<label for="" class="form-label">Mobile</label>
    				<input type="name" name="contact" class="form-control" placeholder="Enter Mobile Number">
  				</div>		


				<input type="submit" class="btn btn-primary" name="submit" value="SAVE">
			</form>
</div>
</div>
</body>
</html>

