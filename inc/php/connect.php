<?php

$mysql_host = "localhost";
$mysql_user = "predqdtf";
$mysql_password = "umassdKing71"; // flip




if(@mysql_connect($mysql_host,$mysql_user, $mysql_password) AND @mysql_select_db('predqdtf_portfolio'))
{

}

else
 {
  die("something went wrong");
 }

 ?>
