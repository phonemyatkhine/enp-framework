<?php

  $variables = json_decode(file_get_contents( __DIR__ . '/../.env'));

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }

  if(!function_exists('env')) {
      function env($key, $default = null)
      {
          $value = getenv($key);
          if ($value === false) {
              return $default;
          }
          return $value;
      }
  }
?>
