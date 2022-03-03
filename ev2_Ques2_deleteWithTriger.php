<?php $conn = new mysqli("localhost", "root", "", "idb_bisew"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Delete To Delete Result</title>
	<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container mt-20 w-85">
		<div class="row">
	<h2 class="text-center">Student List</h2>

	<?php 

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id = $_POST['student_id'];

		$data = $conn->query("DELETE FROM student WHERE id = '$id'");

		if($conn->affected_rows>0){
			echo '<div class="alert alert-primary" role="alert">
  				Deleted Successfully!</div>';
		}
	}

	 ?>


	<?php
		$data = $conn->query("SELECT * FROM student");
	?>


	
			<form action="" method="POST">
	<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="student_id">
		<option selected>Student ID</option>
		<?php while($row = $data->fetch_object()) { ?>
  			<option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
		<?php } ?>
  	
</select>
<input type="submit" class="btn btn-danger" name="submit" value="DELETE">
</form>
</div>
</div>
</body>
</html>