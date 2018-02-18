<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once "../config/Database.php";
require_once "../objects/Track.php";

$track = new Track();

$track->id = isset($_GET['id']) ? $_GET['id'] : die();

$results = $track->read_one();
if (isset($results[0]) && !empty($results[0])) {
	extract($results[0]);
	$track->id = $id;
	$track->name = $name;
	$track->album = $album;
	$track->artist = $artist;
	$track->track_no = $track_no;
	$track->duration = $duration;
	$track->mp3 = $mp3;

	echo json_encode($track->read_one());
}