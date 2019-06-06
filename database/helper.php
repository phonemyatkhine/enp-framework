<?php

namespace Database;
require_once  __DIR__ .'/connect.php';


class Helper {

  private $table_name;
  private $conn;

  public function __construct($table_name){
    $this->table_name = $table_name;
  }
  public function setConn($conn){
    $this->conn = $conn;
  }

  public function all(){
    $query = "SELECT * FROM ". $this->table_name;
    $result = mysqli_query($this->conn,$query);
    $row = mysqli_fetch_array($result);
    return $row;
  }

}



 ?>
