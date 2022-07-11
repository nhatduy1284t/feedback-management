<?php

class Router {
    // static properties
    public static $route;
    public static $url;
    public static $validRoutes = [];
    public static $params;
    public static $found = false;

    //static methods
    // get method to handle GET Req
    public static function get($route, $function) {
        //check if the $_GET == this registered route
        self::$route = $route;
        if(!isset($_GET['url'])) {
         self::$url = '';
        } else {
         self::$url = $_GET['url'];
        }
        // check route for params/wildcard
        self::checkParams();
        self::$validRoutes[] = self::$route;
        // invoke callback fn if the refistered route and the rquest url match
        if(self::$url === self::$route && $_SERVER['REQUEST_METHOD'] == "GET") {
            self::$found = true;
            $function->__invoke(self::$params);
        }
    }

    public static function post($route, $function) {
        self::$route = $route;
        if(!isset($_GET['url'])) {
         self::$url = '';
        } else {
         self::$url = $_GET['url'];
        }

        self::$validRoutes[] = self::$route;
        if(self::$url === self::$route && $_SERVER['REQUEST_METHOD'] == "POST") {
            self::$found = true;
            $function->__invoke();
        }
    }


    public static function checkParams() {
        if(strpos(self::$route, "{") !== false) {
            $routeArr = explode("/", self::$route);
            $urlArr = explode("/", self::$url);
            self::$params = array_pop($urlArr);
            array_pop($routeArr);
            array_push($urlArr, self::$params);
            array_push($routeArr, self::$params);
            self::$url = join("/", $urlArr);
            self::$route = join("/", $routeArr);

        }
    }

    public static function redirect($dest) {
        header("Location: " . ROOT . $dest);
    }

}