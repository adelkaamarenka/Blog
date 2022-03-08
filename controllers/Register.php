<?php

if (!isset($_POST["submit"])) {
    header("location: ../register.php");
    exit();
}

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/Validation.php';

$email = $_POST["email"];
$pwd = $_POST["password"];
$pwdrepeat = $_POST["rep-password"];

$validator = new Validation($email, $pwd, $pwdrepeat);
if ($validator->emptyInput()) {
    header("location: ../register.php?resp='emptyinput'");
    exit();
}

if ($validator->invalidEmail()) {
    header("location: ../register.php?resp='invalidemail'");
    exit();
}

if ($validator->invalidPassword()) {
    header("location: ../register.php?resp='invalidpassword'");
    exit();
}

if ($validator->passwordsDontMatch()) {
    header("location: ../register.php?resp='passwordsdontmatch'");
    exit();
}

if(User::findByEmail($email)) {
    header("location: ../register.php?resp='emailtaken'");
    exit();
}


User::create([
    'email' => $email,
    'password' => $pwd,
]);

header("location: ../login.php?resp='registered'");