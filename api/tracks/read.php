<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once "../config/Database.php";
require_once "../objects/Track.php";

$track = new Track();
echo json_encode($track->read());
