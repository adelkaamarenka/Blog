<?php


class SignupCont {
    private $email;
    private $password;
    private $passwordRepeat;

    public function __construct($email, $password, $passwordRepeat) {
        $this->email = $email;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
    }

    public function emptyInput() {
        if (empty($this->email) || empty($this->password) || empty($this->passwordRepeat)) {
            return true;
        }
        return false;
    }

    public function invalidEmail() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public function invalidPassword() {
        if (!preg_match("/^[a-zA-Z0-9_!@#$%]*$/", $this->password)) {
            return true;
        }
        return false;
    }

    public function passwordsDontMatch() {
        if ($this->password != $this->passwordRepeat) {
            return true;
        }
        return false;
    }
}

