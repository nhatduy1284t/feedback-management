<?php

class UserController extends Controller
{

    public function __construct()
    {

        parent::__construct();
    }

    // get login page
    public function getLogin()
    {
        include "./views/login.php";
    }

    public function getLogout() {
        User::logout();
        //include "./views/home.php";
        Router::redirect("");
    }

    public function getCreate()
    {   
        include "./views/create_user.php";
    }

    public function login() {
        $user = new User($this->conn);
        //var_dump($_POST['username'], $_POST['password']);
        //var_dump(password_hash("admin", PASSWORD_DEFAULT));
        //check if input is empty?
        if($_POST['username'] == "" || $_POST['password'] == "") {
            $errors['input_empty'] = "Both username and password are required";
            include "views/login.php";
        }
        //check if user exists
        else if($user->getUserByName($_POST['username'])->checkUserExists()) {
            if($user->validateLogin($_POST)->success()) {
                $user->login();
                //$_SESSION['hello'] = "world"; 
                unset($_SESSION['err_msg']);
                Router::redirect("");
            }
            //Pass err
            else { 
                $errors["password_err"] = "Invalid password";
                include "views/login.php";
                //var_dump($user->user);
            }
        }
        //Username err
        else {
            $errors['username_err'] = "User doesn't exist!";
            include "views/login.php";
        }
        
    }

    public function create($user) {
        $userObj = new User($this->conn);
        $userObj->validateNewUser($user);//After this line, userObj->errors may not be empty
        if ($userObj->success()) {
            //var_dump("cec");
            if($userObj->createNewUser()->success()) {
                header("Location: " . ROOT);
            }
            return true;
        } else {
            $errors = $userObj->errors;
            //var_dump($errors);
            include "views/create_user.php";
            return false;
        }
    }
}
