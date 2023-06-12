<?php
session_start();
unset($_SESSION['id']);
session_destroy();
echo "<script> window.location ='../admin.php'; </script>";
?>