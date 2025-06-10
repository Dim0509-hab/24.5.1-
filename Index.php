<?php

define('ROOT', __DIR__);

require_once ROOT . '/app/controllers/HomeController.php';
require_once ROOT . '/app/controllers/AboutController.php';
require_once ROOT . '/app/controllers/ContactsController.php';
require_once ROOT . '/app/controllers/DreamsController.php';
require_once ROOT . '/app/models/User.php';

class Router {
    public static function run() {
        $controllerName = 'HomeController';
        $action = 'index';

        if (isset($_GET['controller'])) {
            $controllerName = ucfirst($_GET['controller']) . 'Controller';
        }

        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }

        $controller = new $controllerName;
        $controller->$action();
    }
}

Router::run();
