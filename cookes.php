<?php
$cookie_name = "user";
$cookie_value = "ABUBAKAR JUTT";

setcookie($cookie_name,$cookie_value,time()+(400*30),"/");

  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>cookies</title>
  </head>
  <body>
  <?php

  if (!isset( $_COOKIE[$cookie_name])) {
    
    echo "cookie is set";
  }
  else
  {
    echo  $_COOKIE[$cookie_name];
  }
   ?>
  </body>
  </html>