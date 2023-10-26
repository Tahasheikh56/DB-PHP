<?php
include("configure.php");

extract($_POST);
$data = "INSERT INTO student VALUE ('','$name','$email','$pswd','$file')";
$query = mysqli_query($connect,$data);

if($query>0){
    echo "<script>alert('Data inserted successfully');</script>";
    header("Location:form.php");
}
else{
    echo "<script>alert('Data inserted unsuccessfully');</script>";
}

?>