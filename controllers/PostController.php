<?php

class PostController extends Controller {
    // properties
    
    // constructor
    public function __construct()
    {
       // bring the db conn from parent Controller class
        parent::__construct();
    }


  
    public function newPost() {
        include "views/create_post.php";
    }

    public function create() {
        $post = new Post($this->conn);
        if($post->validatePost($_POST)  ->success()) {
           if($post->create()->success()) {
            header("Location: " . ROOT . "admin/posts/get/" . $post->post_id);
           }
        } else {
            echo "this post has an error";
            $errors = $post->errors;
            include "views/create_post.php";
        }
    }

    public function getPost($id) {
        include "./views/post_admin.php";
    }

}