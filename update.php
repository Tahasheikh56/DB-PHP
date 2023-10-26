<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
include("configure.php");
$id = $_REQUEST["up"];
$tableData = "select *from student where id = '$id'";
$query = mysqli_query($connect,$tableData);
$row = mysqli_fetch_assoc($query);

if(isset($_POST["upd"])){
    extract($_POST);
    $insertData = "UPDATE student SET Name = '$name', Email = '$email', Password = '$pswd', image = '$file' where id = '$id'";
    $query = mysqli_query($connect,$insertData);
    header("Location:form.php");
}

?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-9">
  <h2 class="fs-1 text-center fw-bold mt-2 pb-2">Update Form</h2>
  <form action="" method="post" >
    <div class="mb-3 mt-3">
      <label for="Name">Full Name:</label>
      <input type="text" class="form-control" value="<?php echo $row["Name"] ?>" placeholder="Full Name" name="name">
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" value="<?php echo $row["Email"] ?>" placeholder="Enter email" name="email">
    </div>

    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" value="<?php echo $row["Password"] ?>" placeholder="Enter password" name="pswd">
    </div>

    <div class="mb-3">
    <label for="myfile">Photo link :</label>
      <input type="text" class="form-control" value="<?php echo $row["image"] ?>" placeholder="Enter photo link" name="file">
      </div>

    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
<button type="submit" class="btn btn-success" name="upd">update</button>

  </form>
  </div>
</body>
</html>