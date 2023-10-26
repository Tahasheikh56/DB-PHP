<?php
    session_start();
    if(isset($_SESSION["name"])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="<?php echo $_SESSION["img"] ?>" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
    <ul>
        <li>
            <a href="logout.php" class="me-end btn btn-primary">Logout</a>
            <a href="chat.php" class="me-end btn btn-warning text-primary">Group Chat</a>  
            <a href="single_chat.php" class="me-end btn btn-outline-secondary text-primary">Single Chat </a>            
        </li>
    </ul>
  </div>
</nav>

<div class="container mt-3">
  <h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="<?php echo $_SESSION["img"] ?>" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"><?php echo $_SESSION["name"] ?></h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  
</body>
</html>
<?php
    }
else{
    header("Location:login.php");
}    
    ?>