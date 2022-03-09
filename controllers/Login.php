<?php

if (!isset($_POST["submit"])) {
    header("location: ../register.php");
    exit();
}

require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/Validation.php';

$email = $_POST["email"];
$pwd = $_POST["password"];

$validator = new Validation($email, $pwd, $pwd);

if ($validator->emptyInput()) {
    header("location: ../login.php?resp='emptyinput'");
    exit();
}

if ($validator->invalidEmail()) {
    header("location: ../login.php?resp='invalidemail'");
    exit();
}

if(!($user = User::findByEmail($email))) {
    header("location: ../login.php?resp='userdoesntexist");
    exit();
}

if (hash('sha256', $pwd) != $user->password_hash) {
    header("location: ../login.php?resp='wrongpassword");
    exit();
}

session_start();
$_SESSION["id"] = $user->id;
header("location: ../index.php");


