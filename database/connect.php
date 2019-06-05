<?php
include  __DIR__ .'/../handler/autoload.php';
include  __DIR__ .'/database.php';

  $autoloader = new Autoloader();
  $db = new Database();

  $host = $autoloader->env('DB_HOST');
  $username = $autoloader->env('DB_USERNAME');
  $password = $autoloader->env('DB_PASSWORD');
  $db_name = $autoloader->env('DB_NAME');

  $db->setCon($host,$username,$password,$db_name);
  $conn = $db->connect();

 ?>
