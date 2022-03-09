<?php
session_start();
 
$_SESSION['id'] = null;
 
session_destroy();
 
header("location: ../index.php");
exit();