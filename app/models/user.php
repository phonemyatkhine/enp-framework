<?php

  include  __DIR__ . '/../../database/helper.php';
  use Database\Helper;

  class User extends Helper {

  }

  $user = new User("user");
  $user->setConn($conn);
  print_r($user->all());
 ?>
