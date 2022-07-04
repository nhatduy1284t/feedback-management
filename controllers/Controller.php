<?php

class Controller
{
    //properties
    public $conn;

    // constructor
    public function __construct()
    {

        CSRF::checkToken($_POST);
        $this->conn = DB::getConn();
    }
}
