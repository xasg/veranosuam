<?php
$servername = "localhost";
$dbname = "veranos";
$username = "root";
$password = "";  

$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno )
{
  echo 'error en la conexion ';
  exit;
}


?>