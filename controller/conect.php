<?php
$servername = "localhost";
$dbname = "veranos2023";
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