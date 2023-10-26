
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
include("configure.php");

$q = "select *from student";
$query = mysqli_query($connect,$q);
$row = mysqli_fetch_assoc($query);

extract($_POST);
if(isset($_POST["login"])){
  if($_POST["email"] === $row ["Email"] && $_POST["pswd"] === $row ["Password"]){
    echo "<script>alert('well come sir');</script>";
    header("Location:form.php");
  }
  else if($_POST["email"] === $row ["Name"] && $_POST["pswd"] === $row ["Password"]){
    echo "<script>alert('well come sir');</script>";
    header("Location:form.php");
  }
  else{
    echo "<script>alert('you are not our member');</script>";
  }
}
?>

<div class="container mt-5">
  <form action="" method="post">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-6">
  <h2>Login form</h2>
    <div class="mb-3 mt-4">
      <label for="email">Email / Username:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email / username" name="email" >
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="login">Login</button>
    <a href="form.php" class="btn btn-primary">Signup</a>

  </form>
  </div>
  <div class="col-md-4"></div>
  </div>
</div>

</body>
</html>

