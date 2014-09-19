<?php 
$db_host = '  ';      // location of your database(localhost ussualy works)
$db_user = '  ';      // your MySQL database username
$db_password = '  ';  // your MySQL database password
$database = '  ';     // name of your MySQL database

$db_connect = mysql_connect($db_host, $db_user, $db_password);
$db = mysql_select_db($database,$db_connect);
?>
