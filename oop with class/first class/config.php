<?php
class connection{
    public $connect;

    public function __construct(){
        $this->connect = mysqli_connect("localhost","root","","rgistration");
}
}
$obj = new connection();
?>