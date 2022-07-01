<?php

class PostController extends Controller
{
    // properties

    // constructor
    public function __construct()
    {
        // bring the db conn from parent Controller class
        parent::__construct();
    }



    public function create()
    {
        $post = new Post($this->conn);
        // var_dumps($_FILES);
        var_dumps($_POST);
        if ($post->validatePost($_POST, $_FILES)->success()) {
            var_dump("SUCCESS");
            if ($post->createNewPost()->success()) {
                //     Messenger::setMsg("New post created!", "success");
                //     header("Location: " . ROOT . "posts/get/" . $post->post_id);
            }
        }

        // var_dumps($post->errors);
        //  else {
        //     echo "this post has an error";
        //     $errors = $post->errors;
        //     include "views/create_post.php";
        // }
    }

    public function getPost($id)
    {
        //get post by post id (not user id)
        $postObj = new Post($this->conn);
        $postObj->fetchPost($id);
        $post = $postObj->post;
        include "./views/post_admin.php";
    }
    public function getPostsAdmin()
    {
        $postObj = new Post($this->conn);
        $postObj->fetchPosts();
        $posts = $postObj->posts;
        include "views/posts_admin.php";
    }

    public function getCreate()
    {
        include "views/create_post.php";
    }
}
