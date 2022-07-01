 <?php
// route registery

// home
Router::get("", function() {
    include "views/home.php";
});
Router::get("home", function() {
    include "./views/home.php";
});
Router::get("user/login", function() {
    $usersController = new UserController;
    $usersController->getLogin();
});

Router::get("user/create", function() {
    $usersController = new UserController;
    $usersController->getCreate();
});

Router::post("user/create", function() {
    $userController = new UserController;
    $userController->create($_POST);
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


// after running registry if no matches are found: 404
if(Router::$found === false) {
    include "views/_404.php";
}