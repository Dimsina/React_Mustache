<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once "../config/Database.php";
require_once "../objects/Genre.php";

$genre = new Genre();
echo json_encode($genre->read());