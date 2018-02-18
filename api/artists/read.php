<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once "../config/Database.php";
require_once "../objects/Artist.php";

$artist = new Artist();
echo json_encode($artist->read());




