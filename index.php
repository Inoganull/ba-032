<?php

    require_once __DIR__ . "/vendor/autoload.php";

    class HomeController
    {
        public function index()
        {
            echo "Index Page";
        }

        public function show()
        {
            echo "Show Page";
        }

        public function create()
        {
            echo "Create Page";
        }

    }

    class TestController
    {
        public function index()
        {
            echo "Index page from Test Controller";
        }
    }


    function notFound() {
        echo "404 Page";
    }

    $routes = [
        "/index" => [HomeController::class, "index"],
        "/show" => [HomeController::class, "show"],
        "/create" => [HomeController::class, "create"],
        "/test" => [TestController::class, "index"]
    ];

    $route = $_SERVER['PATH_INFO'];

    if(array_key_exists($route, $routes)) {
        $controller = $routes[$route][0];
        $method = $routes[$route][1];
    } else {
        notFound();
        die();
    }
        
    $home = new $controller();
    $home->$method();

?>

