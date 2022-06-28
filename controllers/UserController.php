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
}