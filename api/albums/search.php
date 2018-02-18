<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once "../config/Database.php";
require_once "../objects/Album.php";
$album = new Album();
$keywords = isset($_GET["s"]) ? $_GET["s"] : "";

$results = $album->search($keywords);

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

echo json_encode($output);