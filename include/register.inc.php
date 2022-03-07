<?php

if(isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pwdrepeat = $_POST["rep-password"];


    include "../classes/signup-cont-classes.php";
    include "../classes/signup-classes.php";

    $signup = new SignupCont($email, $pwd, $pwdrepeat);


    if ($signup->emptyInput()) {
        echo "error";
    }

    if ($signup->invalidEmail()) {
        echo "error";
    }
}
else {
    header("location: ../register.php");
}