<?php

class UserController extends Controller {

    public function __construct() {

        parent::__construct();
    }

    // get login page
    public function getLogin() {
        include "./views/login.php";
    }

    public function getCreate() {
        include "./views/create_user.php";
    }

    public function login() {
        $user = new User($this->conn);
        var_dump($_POST['username'], $_POST['password']);
        //var_dump(password_hash("admin", PASSWORD_DEFAULT));
        //check if user exists
        if($user->getUserByName($_POST['username'])->checkUserExists()) {
            if($user->validateLogin()->success()) {
                $user->login();
                Router::redirect("");
            }
            else {
                $errors["password_err"] = "Invalid password";
                var_dump($user->user);
            }
        }
        else {
            $errors['username_err'] = "User doesn't exist!";
            include "views/login.php";
        }

        var_dump($errors);
    }
}