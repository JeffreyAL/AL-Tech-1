<?php

set_time_limit(0);
ini_set('default_socket_timeout', 300);
session_start();

//--------------- Instagram API Keys ---------------//

define('clientID','72498472b5bf46efb52d7293ede0b321');
define('clientSecret','52da21c3a91c444692bc3c51c19e2826');
define('redirectURL','http://alhassan.tech/instagram/index.php');
define('imageDirectory','pics/');

// Client ID 72498472b5bf46efb52d7293ede0b321
// Client Secret 52da21c3a91c444692bc3c51c19e2826  RESET SECRET
// Website URL:http://alhassan.tech/instagram/index.php
// Privacy Policy URL:alhassan.tech/instagram/index.php
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <a href="https:api.instagram.com/oauth/authoriaz">Login</a>

   </body>
 </html>
