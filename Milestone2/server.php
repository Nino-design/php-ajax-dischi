<?php

include __DIR__ . "/../Milestone1/database.php";
$database_json = json_encode($database);
header("Content-Type: application/json");
echo $database_json;


?>