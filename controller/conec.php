<?php
$servername = "localhost";
$dbname = "veranos20231";
$username = "root";
$password = ""; 

$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno )
{
  echo '';
  exit;
}
?>


