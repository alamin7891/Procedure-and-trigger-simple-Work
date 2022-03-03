<?php $conn = new mysqli("localhost", "root", "", "pwadcompany"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container w-50 ">
  <h2 class="text-center mt-45">Login Validation</h2>


<?php 
            

            if (isset($_POST['submit'])) {
              extract($_POST);
              $data = $conn->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
              if ($data->num_rows>0) {
                echo '<div class="alert alert-primary" role="alert">
                    Login Successfully!</div>';
              }else{
              echo '<div class="alert alert-danger" role="alert">
                    Login Failed!</div>';
              }
            }

  ?>


  <form action="" method="POST">
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
