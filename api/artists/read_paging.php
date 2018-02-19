<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/core.php';
include_once '../shared/Utils.php';
include_once '../config/database.php';
include_once '../objects/Artist.php';


$utils = new Utils();

$artists = new Artist();

$num = $artists->readPaging($from_record_num,$records_per_page);
$result = $artists->resultSet();
$total_rows = $artists->count();
$page_url = "/artist/page/";
$paging= $utils->getPaging($page, $total_rows, $records_per_page, $page_url);
array_push($result,["paging" => $paging]);

echo json_encode($result);