<?php

    require_once __DIR__ . "/vendor/autoload.php";

    use App\Utils\Database;
    use Symfony\Component\HttpFoundation\Request;

    $db = new Database();

    $request = Request::createFromGlobals();

    $db->store($request->request->all());

?>
