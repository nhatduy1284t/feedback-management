<?php

class PostController extends Controller {
    // properties
    
    // constructor
    public function __construct()
    {
       // bring the db conn from parent Controller class
        parent::__construct();
    }

    public function getPost($id) {
        include "./views/post_admin.php";
    }
}