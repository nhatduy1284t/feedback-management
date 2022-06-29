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

    public function getCreate()
    {
        include "./views/create_user.php";
    }

    public function create($user)
    {
        $userObj = new User($this->conn);
        $userObj->validateNewUser($user);//After this line, userObj->errors may not be empty
        if ($userObj->success()) {
            var_dump("cec");
            $userObj->createNewUser();
            if ($userObj->success()) {
                header("Location: " . ROOT);
            }
        } else {
            $errors = $userObj->errors;
            include "views/create_user.php";
        }
    }
}
