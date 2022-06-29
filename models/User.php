<?php

class User {
    // properties
    public $user_name;
    public $user_email;
    public $user_password;
    public $user_password_confirm;
    public $user_hash;
    public $user_role;
    public $conn;
    public $errors = [];
    public $user = [];
    public $users = [];

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // get user by name -> return $this
    public function getUserByName($username) {
        $sql = "SELECT * FROM user WHERE user.username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->user = $result->fetch_assoc();
        return $this;
    }

    //check if the user exists?
    public function checkUserExists() {
        if(!empty($this->user)) 
            return true;
        return false;
    }

    //check if the password is correct
    public function validateLogin() {
        if(!password_verify($_POST['password'], $this->user['password']))
            $this->errors['password_err'] = "Invalid password!";
        return $this;
    }

    public function login() {
        $_SESSION['user_name'] = $this->user['username'];
        $_SESSION['user_role'] = $this->user['role'];
        $_SESSION['user_id'] = $this->user['id'];
        $_SESSION['logged_in'] = true;
    }
    
    public function success() {
        if(empty($this->errors)) {
            return true;
        }
        else {
            return false;
        }
    }
}