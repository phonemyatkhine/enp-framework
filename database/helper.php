<?php

require_once  __DIR__ .'/connect.php';

class Helper {

  private $table_name;
  
  public function setTableName($table_name){
    $this->table_name = $table_name;
  }

  public function all(){
    $query = "SELECT * FROM ". $this->tablename;
    $a = mysqli_query($conn,$query);
    return $a;
  }

}
 ?>
