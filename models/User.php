<?php

require_once './../controllers/DB.php';

class User {

    protected $id;
    protected $email;
    protected $password_hash;

    public function __construct($row) {
        $this->id = $row['id'];
        $this->email = $row['email'];
        $this->password_hash = $row['password'];
    }
    
    /**
     * @param $email
     * @return User|null
     */
    public static function findByEmail($email) {
        $con = DB::getConnection();

        $stmt = $con->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        
        $stmt->execute();
        $result = $stmt->get_result()->fetch_array();

        return $result ? new User($result) : null;
    }

      /**
     * @param $id
     * @return User|null
     */
    public static function findById($id) {
        $con = DB::getConnection();

        $stmt = $con->prepare("SELECT * FROM users WHERE id = ? LIMIT 1");
        $stmt->bind_param("i", $id);
        
        $stmt->execute();
        $result = $stmt->get_result()->fetch_array();

        return $result ? new User($result) : null;
    }

    /**
     * Create user
     */
    public static function create($data) {
        if (!isset($data['email']) || !isset($data['password'])) {
            throw new Exception('Provided data was invalid');
        }

        $con = DB::getConnection();

        $hashed_password = hash('sha256', $data['password']);

        $stmt = $con->prepare("INSERT INTO `users` (`id`, `email`, `password`) VALUES (NULL, ?, ?);");

        $stmt->bind_param('ss', $data['email'], $hashed_password);
        
        $stmt->execute();

        $user_id = $con->insert_id;

        return User::findById($user_id);
    }
}