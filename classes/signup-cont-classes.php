<?php

class SignupCont {
    public $email;
    public $password;
    public $passwordRepeat;

    public function __construct($email, $password, $passwordRepeat) {
        $this->email = $email;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
    }

    public function emptyInput() {
        if(empty($this->email) || empty($this->password) || empty($this->passwordRepeat)) {
            return true;
        }
        return false;
    }

    public function invalidEmail() {
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
}

