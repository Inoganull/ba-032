<?php

require_once "db.php";

$db = new DB();

$student = $db->destroy($_GET['id']);

?>