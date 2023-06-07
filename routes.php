<?php

    use App\Controllers\StudentController;

    $routes = [
        "/index" => [StudentController::class, "index"],
        "/show" => [StudentController::class, "show"],
        "/create" => [StudentController::class, "create"],
        "/store" => [StudentController::class, "store"],
        "/edit" => [StudentController::class, "edit"],
        "/update" => [StudentController::class, "update"],
        "/delete" => [StudentController::class, "delete"],
    ];

    if (array_key_exists('PATH_INFO', $_SERVER)) {
        $route = $_SERVER['PATH_INFO'];
    } else {
        $route = "/index";
    };

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