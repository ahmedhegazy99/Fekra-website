<?php
session_start();
$_SESSION['message'] = '';

define('DB_NAME','id7349638_form');
define('DB_USER','id7349638_root');
define('DB_PASSWORD','midorady');
define('DB_HOST','localhost');

if(isset($_POST['submit'])){
   $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) {
    echo "could not connect: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{
  //echo 'connected successfully';
}
/*end of connection check statments*/

$Name = $mysqli->real_escape_string($_POST["name"]);
$Stage = $mysqli->real_escape_string($_POST['stage']);
$Mail = $mysqli->real_escape_string($_POST['mail']);
$Phone = $mysqli->real_escape_string($_POST['phone']);
$ParentPhone = $mysqli->real_escape_string($_POST['parentphone']);
$Birthday = $mysqli->real_escape_string($_POST['birthday']);
$Address = $mysqli->real_escape_string($_POST['address']);
$NationalID = $mysqli->real_escape_string($_POST['nationalID']);
$ClubID = $mysqli->real_escape_string($_POST['clubID']);
/*
echo "<br>Welcome ". $Name. "<br />";
echo " ". $Stage. "<br />";
echo " ". $Mail. "<br />";
echo " ". $Phone. "<br />";
echo " ". $ParentPhone. "<br />";
echo " ". $Birthday. "<br />";
echo " ". $Address. "<br />";
echo " ". $NationalID. "<br />";
echo " ". $ClubID. "<br />";
*/
$sql = "INSERT INTO register (name , Stage , mail , phone , parentphone ,
  birthday , address , nationalID , clubID)  VALUES ('$Name' , '$Stage' , '$Mail' ,
  '$Phone' , '$ParentPhone' , '$Birthday' , '$Address' , '$NationalID' , '$ClubID')";

if ($mysqli->query($sql) ==true) {
  $_SESSION['message'] = 'Registrated successfully';
  header("location: register.html");
}else{
  $_SESSION['message'] = 'Registration unsuccessfull! <h1>please try again</h1>';
  echo "Error: (" . $mysqli->errno . ") " . $mysqli->error;
}

exit();
}

?>
