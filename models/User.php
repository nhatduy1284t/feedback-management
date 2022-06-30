<?php

class User
{
    //properties
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

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // get user by name -> return $this
    public function getUserByName($username)
    {
        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->user = $result->fetch_assoc();
        return $this;
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
        $_SESSION['hello'] = "world";
        $_SESSION['logged_in'] = true;
    }

    public static function logout() {
        unset($_SESSION['user_name']);
        unset($_SESSION['user_role']);
        unset($_SESSION['user_id']);

        $_SESSION['logged_in'] = false;
    }
    
    public function success() {
        if(empty($this->errors)) {
            return true;
        }
        else {
            return false;
        }
    }

    // check if user exists return $this [create err if no user]
    public function checkUserExists()
    {
        if (!empty($this->user)) {
            return true;
        } else {
            return false;
        }
    }


    public function create()
    {
        // password_hash the user password
        $this->user_hash = password_hash($this->user_password, PASSWORD_DEFAULT);
        // insert new user
        $sql = "INSERT INTO users (username, email, password_hash) VALUES (?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $this->user_name, $this->user_email, $this->user_hash);
        $stmt->execute();
        // if afffected_rows !== 1 add an error to the $this->errors
        if ($stmt->affected_rows === 1) {
            $this->getUserByName($this->user_name);
        } else {
            $this->errors['create_err'] = "Insert failed!";
        }
        return $this;
    }

    public function validateNewUser($user)
    {
        //move user attributes from $user arr to User properties (sanitize name + email)
        $this->user_name = htmlspecialchars($user['username']);
        $this->user_email = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
        $this->user_password = $user['password'];
        $this->user_password_confirm = $user['password_confirm'];
        // (3) if statements to check username (should not exist), email is valid, 
        if ($this->getUserByName($this->user_name)->checkUserExists()) {
            $this->errors['create_username_err'] = "This username is already taken!";
        }
        //validate email 
        if (!filter_var($this->user_email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['create_email_err'] = "Invalid email!";
        }
        // // passwords match && !empty
        if ($this->user_password !== $this->user_password_confirm || empty($this->user_password)) {
            $this->errors['create_password_err'] = "Passwords must match and cannot be empty!";
        }

        //  return $this;
    }

    public function createNewUser()
    {
        $sql = "INSERT INTO user (username, email, password) VALUES(?,?,?)";
        $this->user_hash = password_hash($this->user_password, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $this->user_name, $this->user_email, $this->user_hash);
        $stmt->execute();
        if ($stmt->affected_rows === 1) {
            // set session vars
        } else {
            $this->errors['create_err'] = "Insert failed!";
        }
        return $this;
    }
}
