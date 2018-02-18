<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once "../config/Database.php";
require_once "../objects/Album.php";

$album = new Album();

echo json_encode($album->read());