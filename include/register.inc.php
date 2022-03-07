<?php

if (!isset($_POST["submit"])) {
    header("location: ../register.php");
}

$email = $_POST["email"];
$pwd = $_POST["password"];
$pwdrepeat = $_POST["rep-password"];


include "../classes/signup-cont-classes.php";
include "../classes/signup-classes.php";

$signup = new SignupCont($email, $pwd, $pwdrepeat);


if ($signup->emptyInput()) {
    echo "empty input";
}

if ($signup->invalidEmail()) {
    echo "invalid email";
}

if ($signup->invalidPassword()) {
    echo "invalid password";
}

if ($signup->passwordsDontMatch()) {
    echo "passwords dont match";
}