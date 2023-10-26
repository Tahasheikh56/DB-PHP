<?php
    include("config.php");
?>
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

<form action="" method="post">
<div class="input-group">
    <input type="text" class="form-control" name="nama" placeholder="Search">
    <button type="submit" name="search" class="input-group-text btn btn-primary">Search</button>
  </div>
</form>

<form action="" method="post">
<div class="input-group">
   <span class="fs-5">Start</span><input type="date" class="form-control ms-1" name="start" >
   <span class="fs-5 ms-1">End</span><input type="date" class="form-control ms-2" name="end" >
    <button type="submit" name="date" class="input-group-text btn btn-primary">Search</button>
  </div>

</form>

<table class="table text-center table-bordered table-hover">
    <thead class="table table-dark">
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>DATE / TIME</th>
    </thead>

    <tbody>
    <?php
if(isset($_POST["search"])){
    extract($_POST);
    $query = "select *from student INNER JOIN sales where BINARY Name LIKE '%$nama%' OR Email LIKE '%$nama%' OR Password LIKE '%$nama%' ";
    $q = $obj->query($query);
// binary case sensitive k liye agar small h to small bada hai to bada aye name me
}
elseif(isset($_POST["date"])){
    extract($_POST);
    $query = "select *from student INNER JOIN sales where date between '$start' AND '$end' ";
    $q = $obj->query($query);
}
else{
    $query = "select *from student INNER JOIN sales";
    $q = $obj->query($query);
}
while($row=mysqli_fetch_assoc($q)){   
            ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["Name"]; ?></td>
            <td><?php echo $row["Email"]; ?></td>
            <td><?php echo $row["Password"]; ?></td>
            <td><?php echo $row["date"]; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>