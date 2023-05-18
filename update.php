<?php

require_once "vendor/autoload.php";

    $db = new DB();

    $student = $db->update($_POST);

?>