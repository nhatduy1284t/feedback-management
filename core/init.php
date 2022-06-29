<?php
// start session
session_start();
if (!isset($_SESSION['logged_in'])) {
    $_SESSION['logged_in'] = false;
}

include_once "core/DB.php";
DB::getInstance();
DB::connect("localhost", "root", "", "iteccoffee");
$conn = DB::getConn();

// auto load classes
spl_autoload_register(function ($className) {
    if (file_exists("core/" . $className . ".php")) {
        include_once "core/" . $className . ".php";
    } elseif (file_exists("controllers/" . $className . ".php")) {
        include_once "controllers/" . $className . ".php";
    } elseif (file_exists("models/" . $className . ".php")) {
        include_once "models/" . $className . ".php";
    }
});


function var_dumps($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
