<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/core.php';
include_once '../shared/Utils.php';
include_once '../config/database.php';
include_once '../objects/Track.php';


$utils = new Utils();

$track = new Track();
// query product count number of rows
$num = $track->readPaging($from_record_num,$records_per_page);
$result = $track->resultSet();
$total_rows = $track->count();
$page_url = "/track/page/";
$paging= $utils->getPaging($page, $total_rows, $records_per_page, $page_url);
array_push($result,["paging" => $paging]);


echo json_encode($result);