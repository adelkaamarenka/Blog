<?php

class Dbh {
    protected $host = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "usersdb";

    public $con = null;

    //establishes a connection to the database
    public function __construct() {
        $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        if($this->con->connect_error) {
            echo "Fail ".$this->con->connect_error;
        }
        echo nl2br("Connection successful \n");
    }
}