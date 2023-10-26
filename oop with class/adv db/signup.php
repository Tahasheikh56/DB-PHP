<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
include("config.php");
if(isset($_POST["submit"])){

// file choosen move uploaded file code here
$dir = "images/";
$file = $dir.basename($_FILES["img"]["name"]);
move_uploaded_file($_FILES["img"]["tmp_name"],$file);
// end here

  extract($_POST);
  $query = "INSERT INTO student VALUES ('','$name','$email','$pswd','$file')";

  if($obj->query($query) === TRUE){
    echo "<div class='alert alert-success'>Data inserted successfully</div>";
  }
  else{
    echo "<div class='alert alert-danger'>Data not inserted</div>";
}
}
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-9">
  <h2 class="fs-1 text-center fw-bold mt-2 pb-2">Signup Form</h2>
  <form action="#" enctype="multipart/form-data" method="post" >
    <div class="mb-3 mt-3">
      <label for="Name">Full Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Full Name" name="name">
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>

    <div class="mb-3">
    <label for="myfile">File choosen :</label>
      <input type="file" class="form-control" id="pwd" name="img">
      </div>

    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<a type="submit" class="btn btn-primary" href="login.php">Login</a>

  </form>
  </div>
  <div class="col-md-3"></div>
  </div>
</div>
</body>
</html>