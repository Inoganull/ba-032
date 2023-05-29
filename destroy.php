<?php

    require_once __DIR__ . "/vendor/autoload.php";
        
    use App\Utils\Database;

    $db = new Database();

    $db-> destroy($_GET['id']);

?>