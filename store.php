<?php

    require_once "db.php";

    $db = new DB();

    $student = $db->store($_POST);

?>
