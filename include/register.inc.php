<?php

if(isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pwdrepeat = $_POST["rep-password"];

    
}
else {
    header("location: ../register.php");
}