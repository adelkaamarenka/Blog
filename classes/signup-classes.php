<?php

require "dbh.classes.php";

class UserData extends Dbh {
    
    //returns the entire table of users
    public function getUser($table) {
        $query = $this->con->query("SELECT * FROM {$table}");
        $resultArray = array();

        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $resultArray[] = $row;
        }

        return $resultArray;
    }

    //checks if a given user already exists
    public function userExists($table, $email) {
        $stmt = $this->con->prepare("SELECT * FROM {$table} WHERE usersEmail = ?");
        $stmt->bind_param("s", $email);
        
        $stmt->execute();
        $stmt->get_result();
        $data = $result->fetch_assoc(); 

        if ($this->con->affected_rows == 0) {
            return false;
        }
        else {
            echo "user exists";
        }
    }
}

