<?php

class Database {

  private $host;
  private $username;
  private $password;
  private $db_name;
  private $conn;

  public function setCon($host,$username,$password,$db_name){
    $this->host = $host;
    $this->username = $username;
    $this->password = $password;
    $this->db_name = $db_name;
  }

  public function connect() {

      $this->conn = null;
      $this->conn = mysqli_connect($this->host, $this->username, $this->password);
      mysqli_select_db($this->conn, $this->db_name);

      return $this->conn;

  }
}

?>
