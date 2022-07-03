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
    if($userController->create($_POST)) {
        $userController->login();
    }
});

Router::get("user/post/create",function () {
    $postsController = new PostController   ;
    $postsController->getCreate();
});

Router::post("user/post/create",function () {
    $postController = new PostController;
    $postController->create();

});


// admin
Router::get("admin/posts",function () {
    $postController = new PostController;
    $postController->getPostsAdmin();

});

Router::get("admin/posts/get/{id}",function ($id) {
    $postController = new PostController;
    $postController->getPost($id);
});

Router::post("admin/posts/response",function () {
    $postController = new PostController;
    $postController->responsePost($_POST);

});


// after running registry if no matches are found: 404
if(Router::$found === false) {
    include "views/_404.php";
}