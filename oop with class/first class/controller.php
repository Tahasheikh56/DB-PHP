<?php
class controller {
    private $host = "localhost";
    private $un = "root";
    private $pass = "";
    private $db = "rgistration";
    public $connect;

    public function __construct(){
        $this->connect = mysqli_connect($this->host,$this->un,$this->pass,$this->db);
        if($this->connect->connect_error){
            die ("data base error ".$this->connect->connect_error);
        }
        else{
            echo "database connected";
        }
    }

    public function dataInsert ($data){
    $this->connect->query($data);
    }

}

$obj = new controller();
$q = "INSERT INTO student VALUE ('','king','king123@gmail.com','222','')";
$obj->dataInsert($q);
?>