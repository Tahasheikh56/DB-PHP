<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-9">
  <h2 class="fs-1 text-center fw-bold mt-2 pb-2">Signup Form</h2>
  <form action="insert.php" method="post" >
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
    <label for="myfile">Photo link :</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter photo link" name="file">
      </div>

    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
<button type="submit" class="btn btn-primary">Submit</button>
<button class="btn btn-primary"><a href="login.php" class="text-white" style="text-decoration:none;">Log in</a></button>

  </form>
  </div>
  <div class="col-md-3"></div>
  </div>
</div>
<br>
<table class="table  table-striped table-bordered table-hover ">
  <thead class="table-dark">
    <th class="text-center">STUDENT ID</th>
    <th class="text-center">STUDENT NAME</th>
    <th class="text-center">STUDENT EMAIL</th>
    <th class="text-center">STUDENT PASSWORD</th>
    <th class="text-center">STUDENT IMAGE</th>
    <th class="text-center">ACTION</th>
  </thead>
<tbody>

  <?php
include("configure.php");
$q = "select *from student";
$query = mysqli_query($connect,$q);
while($row = mysqli_fetch_assoc($query)){
  ?>

<tr class="text-center">
  <td><?php echo $row["id"];?></td>
  <td><?php echo $row["Name"];?></td>
  <td><?php echo $row["Email"];?></td>
  <td><?php echo $row["Password"];?></td>
  <td><img src="<?php echo $row["image"];?>" alt="" srcset="" width="100px" height="70px"></td>
  <td ><button class="btn btn-success"><a href="update.php?up=<?php echo $row["id"]; ?>" class="text-white">Edit</a></button>
  <button class="btn btn-danger"><a href="delete.php?dlt=<?php echo $row["id"]; ?>" class="text-white">Delete</a></button></td>
</tr>

<?php
}
?>

</tbody>
</table>

</body>
</html>
