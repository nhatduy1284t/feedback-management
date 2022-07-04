<?php

class Post
{
    public $conn;
    public $post_title;
    public $post_body;
    public $post_category;
    public $post_imgs = [];
    public $post_files = [];
    public $user_id;
    public $post_id;
    public $post_status;
    public $post = [];
    public $posts = [];
    public $errors = [];
    public $page;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getImagesUrlFromPost($post_id)
    {
        $sql = "SELECT image.url
                FROM post JOIN image on post.id = image.post_id
                WHERE post.id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $post_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows !== 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $this->errors['fetch_err'] = "Couldn't fetch images!";
            return [];
        }
    }

    public function fetchPost($id)
    {
        $sql = "SELECT post.*, user.username
                FROM post JOIN user on post.user_id = user.id
                WHERE post.id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            $this->post = $result->fetch_assoc();
            $this->post['images'] = $this->getImagesUrlFromPost($id);
        } else {
            $this->errors['fetch_err'] = "Couldn't fetch post!";
        }

        return $this;
    }

    public function fetchPostsByUserId($user_id)
    {
        $sql = "SELECT p.*,u.username
        FROM post p
        JOIN user u ON p.user_id=u.id 
        WHERE p.user_id = ?
       ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i",$user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows !== 0) {
            $this->posts = $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $this->errors['fetch_err'] = "Couldn't fetch posts!";
        }
    }
    public function fetchPosts()
    {
        $sql = "SELECT p.*,u.username
                FROM post p
                JOIN user u ON p.user_id=u.id 
               ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows !== 0) {
            $this->posts = $result->fetch_all(MYSQLI_ASSOC);
        } else {
            $this->errors['fetch_err'] = "Couldn't fetch posts!";
        }


        return $this;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function createNewPost()
    {


        // write post info to database
        $sql = "INSERT INTO post (title, body, category, user_id, status) 
                VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssii", $this->post_title, $this->post_body, $this->post_category, $this->user_id, $this->post_status);

        $stmt->execute();

        if ($stmt->affected_rows !== 1) {
            $this->errors['insert_err'] = "Post was not created!";
        } else {
            $this->post_id = $stmt->insert_id;
        }

        for ($i = 0; $i < count($this->post_files); $i++) {

            FileManager::validateFile($this->post_files[$i], 5000000) === false;
            array_push($this->post_imgs, FileManager::moveUploadedFile());
        }
        //then we will write to database
        //write images to db
        foreach ($this->post_imgs as $url) {
            $sql = "INSERT INTO image (url,post_id) 
                VALUES (?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("si", $url, $this->post_id); //thay doi post id cho nay
            $stmt->execute();
        }
        return $this;
    }

    public function success()
    {
        if (empty($this->errors)) {
            return true;
        } else {
            return false;
        }
    }

    public function validatePost($post, $files)
    {

        // validate uploading post 
        $this->post_title = htmlspecialchars($post['title']);
        $this->post_body = htmlspecialchars($post['body']);
        $this->post_category = htmlspecialchars($post['category']);
        $this->post_status = 0;
        $this->user_id = $_SESSION['user_id'];
        if (empty($this->post_title) || empty($this->post_body)) {
            $this->errors['post_empty_err'] = "Post title or content cannot be empty!";
        }
        // if files then validate

        if (!FileManager::isEmptyPostFiles($files)) {
            $total = count($files['files']['name']);
            for ($i = 0; $i < $total; $i++) {
                $file = [];
                $file['name'] = $files['files']['name'][$i];
                $file['type'] = $files['files']['type'][$i];
                $file['tmp_name'] = $files['files']['tmp_name'][$i];
                $file['error'] = $files['files']['error'][$i];
                $file['size'] = $files['files']['size'][$i];

                if (FileManager::validateFile($file, 5000000) === false) {
                    $this->errors['post_img_err'] = "There is a problem with your file";
                }
                array_push($this->post_files, $file);
            }
        }

        return $this;
    }
    public function responsePost($response)
    {
        $post_message = htmlspecialchars($response['message']);
        $post_id = $response['post_id'];

        $sql = "UPDATE post
                SET post_message = ?, status = 1
                WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("si", $post_message, $post_id);
        $stmt->execute();
        var_dumps($stmt);
        if ($stmt->affected_rows === 1) {
            Router::redirect("admin/posts");
        }
    }

    public function getPageNum($posts_count)
    {
        $total = $posts_count;
        $item_per_page = 8;
        $pages = ceil($total / $item_per_page) -1;
        return $pages;
    }
}
