<?php 
session_start();
if(!isset($_SESSION['loggendin'])||($_SESSION['loggendin']===false)){
header("Location:login.php");
exit;
}
?>