<?php $conn = new mysqli("localhost", "root", "", "idb_bisew"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View</title>
	<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container mt-20 w-85">
		<div class="row">
	<h2 class="text-center">Product View</h2>


	<?php
		$data = $conn->query("SELECT * FROM student_show");
	?>


	<table class="table table-bordered table-bordered table-striped">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Module Name</th>
			<th>Total Marks</th>
		</tr>

		<?php while ($row = $data->fetch_assoc()) { ?>
		    <tr>
		    	<td><?php echo $row['name'];?></td>
		    	<td><?php echo $row['address'];?></td>
		    	<td><?php echo $row['module_name'];?></td>
		    	<td><?php echo $row['totalmarks'];?></td>
		    </tr>
		<?php } ?>
	</table>


</div>
</div>
</body>
</html>