 <?php
// route registery

// home
Router::get("", function() {
    include "views/home.php";
});
Router::get("home", function() {
    include "./views/home.php";
});

//user
Router::get("user/login", function() {
    $usersController = new UserController;
    $usersController->getLogin();
});

Router::post("user/login", function() {
    $userController = new UserController;
    $userController->login();
});

Router::get("user/create", function() {
    $usersController = new UserController;
    $usersController->getCreate();
});

// after running registry if no matches are found: 404
if(Router::$found === false) {
    include "views/_404.php";
}