<?php
include("config.php");
if(!empty($_POST["textenter"])){
	extract($_POST);
	$usrid = $_SESSION["id"];
    $rcvid = $_REQUEST["rcvid"];
	date_default_timezone_set("Asia/Karachi");
	$date = date("Y-m-d h-i-s");
	$query = "INSERT INTO chat VALUE('','$textenter','$usrid','$rcvid','$date')";
	$obj->query($query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
	background-color: #fff;
}
::-webkit-scrollbar {
  width: 10px;
}
/* Track */
::-webkit-scrollbar-track {
  background: #eee; 
}
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}
/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
.wrapper{
   
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #651FFF;

}
.main{
	background-color: #eee;
	width: 340px;
	position: relative;
	border-radius: 8px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	padding: 6px 0px 0px 0px;
}
.scroll{
	overflow-y: scroll;
	scroll-behavior: smooth;
	    height: 365px;
}
.img1{
	border-radius: 50%;
	background-color: #66BB6A;
}
.name{
	font-size: 11px;
	font-weight:bold;
}
.name1{
	font-size: 9px;
    margin-left: 120px;
    font-weight: bold;
    margin: space-between;
}
.name2{
	font-size: 20px;
    margin-left: 83px;
}
.name3{
	font-size: 15px;
    margin-left: 5px;
}
.msg{
	background-color: #fff;
	font-size: 11px;
	padding: 5px;
	border-radius: 5px;
	font-weight: 500;
	color: #3e3c3c;
}
.between{
	font-size: 8px;
	font-weight: 500;
	color: #a09e9e;
}
.navbar{
	border-bottom-left-radius: 8px;
	border-bottom-right-radius: 8px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.form-control{
	font-size: 12px;
	font-weight: 400;
	width: 230px;
	height: 30px;
	border: none;

}
form-control: focus{
	box-shadow: none;
	overflow: hidden;
	border: none;
}
.form-control:focus{
	box-shadow: none !important;
}
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3 main ms-1">
            <h3 class="text-center">Friends</h3>
         <ul class="mt-4">
            <?php
            $query = "select *from student";
            $q = $obj->query($query);
            while($row = mysqli_fetch_assoc($q)){
            ?>
            <li><a style="color:black;" href="single_chat.php?rcvid=<?php echo $row["id"]; ?>"><?php echo $row["Name"]; ?></a></li>
            <?php } ?>
         </ul>
        </div>

        <div class="col-md-9">
        <div class="wrapper">

        <?php
        if(isset($_REQUEST["rcvid"])){
            $rcvid = $_REQUEST["rcvid"];
            $query = "select *from student where id = '$rcvid'";
            $q = $obj->query($query);
            $row = mysqli_fetch_assoc($q);
        ?>
      <div style="color:black; margin-top:-555px; display:flex;">
      <img src="<?php echo $row["image"]; ?>" width="40px" alt="" srcset="">
      <h1 class="ml-2"><?php echo $row["Name"]; ?></h1>
    </div>
	

	<div class="main">
		<div class="px-3 scroll">

        <div class="d-flex align-items-center mt-3">
			<div class="text-left pr-1"><img src="<?php echo $_SESSION["img"]; ?>"  width="30" class="img1" /></div>
			<div class="pr-1 pl-1">
				<span class="name3"><b><?php echo $_SESSION["name"]; ?></b></span>
				<span class="name2"><b>Chats</b></span>
			</div>
		  </div>
          <hr>
		  
          <!-- body here -->
			<?php  
			$usrid = $_SESSION["id"];
			$rcvid = $_REQUEST["rcvid"];
			$query = "SELECT student.id,student.Name,student.image,chat.msg,chat.date FROM chat INNER JOIN student ON chat.sendrid = student.id 
			WHERE chat.sendrid = '$usrid' AND chat.recvid = '$rcvid' OR chat.sendrid = '$rcvid' AND chat.recvid = '$usrid'";	
			$q = $obj->query($query);
			while($row = mysqli_fetch_assoc($q)){
			?>
		  <div class="d-flex align-items-center">
			<div class="text-left pr-1"><img src="<?php echo $row["image"]; ?>" width="30" class="img1" /></div>
			<div class="pr-2 pl-1">
				<span class="name"><?php echo $row["Name"]; ?></span>
				<p class="msg"><?php echo $row["msg"]; ?></p>
				<span class="name1"><?php echo $row["date"]; ?></span> 
			</div>
		  </div>
		  <?php } ?>
		  <?php } ?>

         <!-- end here body -->

          </div>

<nav class="navbar bg-white navbar-expand-sm d-flex justify-content-between">
    <!-- form here -->
    <form action="" method="post" class="d-flex">
    <input type="text number" name="textenter" class="form-control" placeholder="Type a message...">
    <button class="btn btn-primary ml-4" type="submit">Send</button>
    </form>
    <!-- end here form -->
</nav>

</div>
</div>
        </div>

    </div>
</div>
</body>
</html>