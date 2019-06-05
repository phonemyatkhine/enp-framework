<?php
  include  __DIR__ . '/../../database/helper.php';

  $helper = new Helper();
  $helper->setTableName("user");
  print_r($helper->all());
 ?>
