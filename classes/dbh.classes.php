<?php

class Dbh {
    protected $host = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "usersdb";

    public $con = null;

    public function __construct() {
        $this->con = msqli_connect($this->host, $this->username, $this->password, $this->dbname);
        if(this->con->connect_error) {
            echo "Fail ".$this->con->connect_error;
        }
        echo "Connection successful";
    }
}