<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once "../config/Database.php";
require_once "../objects/Album.php";

$album = new Album();

$album->id = isset($_GET['id']) ? $_GET['id'] : die();

$results = $album->read_one();

if (!empty($results)) {
	$output[0] = [];
	foreach ($results as $item) {
		foreach ($item as $key => $value) {
			if (key_exists($key, $output[0])) {
				if ($output[0][$key] !== $value) {
					if (!is_array($output[0][$key])) {
						$tmp = $output[0][$key];
						$output[0][$key] = [];
						$output[0][$key][] = $tmp;
					}
					if (!in_array($value, $output[0][$key])) {
						array_push($output[0][$key], $value);
					}
				}
			} else {
				$output[0][$key] = $value;
			}
		}
	}
}
if (isset($output[0]) && !empty($output[0])) {
	extract($output[0]);
	$album->id = $id;

	$album->name = $name;

	$album->description = $description;

	$album->cover = $cover;

	$album->cover_small = $cover_small;

	$album->release_date = $release_date;

	$album->popularity = $popularity;

	echo json_encode($output);
}