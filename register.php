<?php

define('DB_NAME','register');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link){
  die('could not connect: ' .mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!$db_selected) {
  die('can\'t use ' .DB_NAME . ': ' . mysql_error());
}

echo 'connected successfully';
/*$sql="INSERT INTO $table ($keys, $x_fields) VALUES ('$values',$x_values)"

if (!mysql_query($sql)) {
  die('Error: ' . mysql_error());
}
*/
mysql_close();
 ?>
