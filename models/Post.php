<?php

class Post {
    public $conn;
    public $post_title;
    public $post_body;
    public $post_img;
    public $user_id;
    public $post_id;
    public $post = [];
    public $posts = [];
    public $errors = [];

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function fetchPost($id) {
        $sql = "SELECT posts.*, username
                FROM posts
                JOIN users ON users.id = posts.user_id
                WHERE posts.id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows ===1) {
            $this->post = $result->fetch_assoc();
        } else {
            $this->errors['fetch_err'] = "Couldn't fetch post!";
        }

        return $this;
    }

    public function getPost() {
        return $this->post;
    }

    public function create() {
        $user_id = 1;
        $post_img = "default";
        $sql = "INSERT INTO posts (title, body, user_id, post_img)
                VALUES(?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssis", $this->post_title, $this->post_body, $user_id, $post_img);
        $stmt->execute();
        if($stmt->affected_rows === 1) {
            $this->post_id = $stmt->insert_id;
        } else {
            $this->errors['insert_err'] = "Could not create new post!";
        }
        return $this;
    }

    public function success() {
        if(empty($this->errors)) {
            return true;
        } else {
            return false;
        }
    }

    public function validatePost($post) {
        $this->post_title = htmlspecialchars($post['title']);
        $this->post_body = htmlspecialchars($post['body']);
        if(empty($this->post_title) || empty($this->post_body)) {
            $this->errors['new_post_err'] = "Post fields cannot be empty!";
        }
        return $this;
    }

}