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

        if ($post->validatePost($_POST, $_FILES)->success()) {

            if ($post->createNewPost()->success()) {
                // Messenger::setMsg("New post created!", "success");
                header("Location: " . ROOT);
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
        //check if it is normal user
        if ($_SESSION['user_role'] === 0) {
            $postObj->fetchPostsByUserId($_SESSION['user_id']);
        } else {
            $postObj->fetchPosts();
        }

        $posts = $postObj->posts;
        $posts_one_page = [];
        $status = "all";
        $category = "all";
        $post_start_index = 0;



        //handle filter
        if (isset($_GET['filter_status']) || isset($_GET['filter_category'])) {
            $status = ($_GET['filter_status']);
            $category = $_GET['filter_category'];
            $total = count($posts);
            if ($status !== "all") {
                $status = (int)$status;
                for ($i = $total - 1; $i >= 0; $i--) {
                    if ($status !== $posts[$i]['status']) {
                        array_splice($posts, $i, 1);
                    }
                }
            }
            $total = count($posts);
            if ($category !== "all") {
                for ($i = $total - 1; $i >= 0; $i--) {
                    if ($category !== $posts[$i]['category']) {
                        array_splice($posts, $i, 1);
                    }
                }
            }
        }

        $num_pages = $postObj->getPageNum(count($posts));

        //handle pagination
        if (isset($_GET['start'])) {
            $post_start_index = $_GET['start'];
            var_dump($post_start_index);
        }
        $total = count($posts);
        $range = $post_start_index + 10;

        if ($range < $total) {
            for ($i = $post_start_index; $i < $range; $i++) {
                array_push($posts_one_page, $posts[$i]);
            };
        } else {
            for ($i = $post_start_index; $i < $total; $i++) {
                array_push($posts_one_page, $posts[$i]);
            };
        }
        $posts = $posts_one_page;

        include "views/posts_admin.php";
    }

    public function getCreate()
    {
        include "views/create_post.php";
    }

    public function responsePost($response)
    {
        if ($_SESSION['user_role'] === 1) {
            $postObj = new Post($this->conn);
            $postObj->responsePost($response);
        }
    }
}
