<?php

  function call($name) {

    switch($name) {
      case "env":
        return include __DIR__ .'/autoload.php';
        break;

    }

  }

 ?>
