<?php
include_once __DIR__ . "/../data/data.php";

header("Contend-Type: application/json");

echo json_encode([
    "cdList" => $cdList
]);