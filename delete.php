<?php
include("configure.php");
$reqid = $_REQUEST["dlt"];
$query = "delete from student where id='$reqid'";
$query2 = mysqli_query($connect,$query);
header("Location:form.php");

?>