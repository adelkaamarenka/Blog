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
    header("location: ../register.php?resp='test{}'");
    exit();
}

if ($validator->invalidEmail()) {
    header("location: ../register.php?resp='test'");
    exit();
}

if ($validator->invalidPassword()) {
    header("location: ../register.php?resp='test'");
    exit();
}

if ($validator->passwordsDontMatch()) {
    header("location: ../register.php?resp='test'");
    exit();
}

echo "sukces!";

if(User::findByEmail($email)) {
    header("location: ../register.php?resp='mail zajety'");
    exit();
}

// jesli nie ma takiego usera to zrob konto i essa
User::create([
    'password' => $pwd,
    'email' => $email,
]);