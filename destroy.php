<?php

require_once "vendor/autoload.php";

$db = new DB();

$student = $db->destroy($_GET['id']);

?>