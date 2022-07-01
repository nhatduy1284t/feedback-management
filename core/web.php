 <?php
// route registery

// home
Router::get("", function() {
    //echo "Hello world";
    include "views/home.php";
    //echo "hello world";
    //unset($_SESSION['page_before']);
    //var_dump($_POST);
});
Router::get("home", function() {
    include "./views/home.php";
});
Router::get("user/login", function() {
    $usersController = new UserController;
    $usersController->getLogin();
});

Router::post("user/login", function() {
    $userController = new UserController;
    $userController->login();
});

Router::get("user/logout", function() {
    $usersController = new UserController;
    $usersController->getLogout();
});

Router::get("user/create", function() {
    $usersController = new UserController;
    $usersController->getCreate();
});

Router::post("user/create", function() {
    $userController = new UserController;
    $userController->create($_POST);
    $userController->login();
});

// admin

Router::get("admin/posts",function () {
    include "views/posts_admin.php";
});

Router::get("admin/posts/create",function () {
    $postsController = new PostController   ;
    $postsController->newPost();
});
Router::post("admin/posts/create",function () {
    $postsController = new PostController;
    $postsController->create();
    var_dump($_POST);
});

Router::get("admin/posts/get/{id}",function ($id) {
    $postController = new PostController;
    $postController->getPost($id);
});
// after running registry if no matches are found: 404
if(Router::$found === false) {
    include "views/_404.php";
}