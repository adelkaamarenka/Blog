<?php

if (!isset($_POST["submit"])) {
    header("location: ../register.php");
}

$email = $_POST["email"];
$pwd = $_POST["password"];
$pwdrepeat = $_POST["rep-password"];


require "../classes/SingupCont.classes.php";
require "../classes/UserData.classes.php";

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

$obj = new UserData();
print_r($obj->getUser("users"));
print_r($obj->UserExists("users", $email));