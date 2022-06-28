 <?php
// route registery

// home
Router::get("", function() {
    include "views/home.php";
});
Router::get("home", function() {
    include "./views/home.php";
});

//post
Router::get("posts", function() {
    $postController = new PostsController;
    $postController->getPosts();
});

Router::get("posts/get/{id}", function($id) {
    $postController = new PostsController;
    $postController->getPost($id);
});

Router::get("posts/create", function() {
    $postController = new PostsController;
    $postController->loadCreate();
});

Router::post("posts/create", function() {
    $postController = new PostsController;
    $postController->create($_POST);
});

//user

Router::post("users/login", function() {
    $usersController = new UsersController;
    $usersController->login($_POST);
});

Router::post("users/create", function() {
    $usersController = new UsersController;
    $usersController->create($_POST);
});

Router::get("users/login", function() {
    $usersController = new UsersController;
    $usersController->getLogin();
});

// after running registry if no matches are found: 404
if(Router::$found === false) {
    include "views/_404.php";
}