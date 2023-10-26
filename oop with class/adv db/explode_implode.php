<?php
// Include your database connection file (adjust the path accordingly)
include("explode_con.php");

// Check if the form has been submitted
if (isset($_POST["std_submit"])) {
  // Extract form data
  extract($_POST);


  date_default_timezone_set("Asia/Karachi");
  $date = date("Y-m-d h:i:sa");

  $sub = implode(" " , $subjects);

  // Insert data into the database (adjust column names as needed)
  $query = "INSERT INTO student VALUES('','$name','$father','$r_btn','$class','','$section','$group','','$date','$sub')";


  // Execute the database query
  if ($obj->query($query) === true) {
    echo '<script>alert("Data Inserted");</script>';
  } else {
    echo '<script>alert("Data Not Inserted");</script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Class Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    /* Custom CSS styles */
    body {
      background-color: #f7f7f7;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 1300px;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .mb-3 {
      margin-bottom: 20px;
    }

    .btn-primary {
      width: 100%;
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }

    .form-label {
      font-weight: bold;
    }

    select.form-select {
      border-color: #d1d1d1;
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6">
        <h2>Student Details</h2>
        <form action="" method="POST" enctype="multipart/form-data">

          <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" required>
          </div>

          <div class="mb-3 mt-3">
            <label for="parents" class="form-label">Father Name:</label>
            <input type="text" name="father" class="form-control" id="parents" placeholder="Your Father Name" required>
          </div>

          <div class="mb-3 mt-3">
            <label for="gender" class="form-label">Gender:</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio1" name="r_btn" value="Male" checked> Male
              <label class="form-check-label" for="radio1"></label>
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="radio2" name="r_btn" value="Female"> Female
              <label class="form-check-label" for="radio2"></label>
            </div>
          </div>
          <div class="mb-3 mt-3">
            <label for="class" class="form-label">Class:</label>
            <select class="form-select" name="class" id="class" required>
              <option value="" disabled selected>Choose Class</option>
              <option value="1">Class One</option>
              <option value="2">Class Two</option>
              <option value="3">Class Three</option>
              <option value="4">Class Four</option>
              <option value="5">Class Five</option>
            </select>
          </div>

          <div class="mb-3 mt-3">
            <label for="section" class="form-label">Section:</label>
            <select class="form-select" name="section" id="section" required>
              <option value="" disabled selected>Choose Section</option>
              <option value="1">Section A</option>
              <option value="2">Section B</option>
              <option value="3">Section C</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="group" class="form-label">Select Group:</label>
            <select class="form-select" name="group" id="group" required>
              <option value="" disabled selected>Choose Group</option>
              <option value="1">Computer Group</option>
              <option value="2">Science Group</option>
              <option value="3">Arts Group</option>
            </select>
          </div>

          <div class="mb-3">

          <label for="english">English</label>
<input type="checkbox" id="english" name="subjects[]" value="English">

<label for="urdu">Urdu</label>
<input type="checkbox" id="urdu" name="subjects[]" value="Urdu">

<label for="math">Math</label>
<input type="checkbox" id="math" name="subjects[]" value="Math">

</div>

          <button name="std_submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <table class="table">
    <thead>
        <th>name</th>
        <th>subject</th>
    </thead>
    <tbody>
        <?php
     $query = "select * from student";
     $q = $obj->query($query);
     while($row = mysqli_fetch_assoc($q))
{        ?>
        <tr>
            <td><?php echo $row["name"]; ?></td>
            <td>
                <?php 
               $amount = $row["amount"];
               $amounts = explode(",",$amount);
               foreach($amounts as $amount){
               echo $amount;
               }
                ?>
            </td>
        </tr>
        <?php
}
        ?>
    </tbody>
  </table>

</body>

</html>