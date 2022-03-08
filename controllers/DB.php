<?php

class DB {
    /**
     * Current connection with database
     */
    private static $connection;

    //establishes a connection to the database
    public static function getConnection() 
    {
        if (is_null(self::$connection)) {
            self::$connection = new mysqli('localhost', 'root', '', 'usersdb');
        }

        return self::$connection;
    }
}