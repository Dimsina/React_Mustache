<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/core.php';
include_once '../shared/Utils.php';
include_once '../config/database.php';
include_once '../objects/Album.php';


$utils = new Utils();

$album = new Album();
// query product count number of rows

$num = $album->readPaging($from_record_num,$records_per_page);
$result = $album->resultSet();
$total_rows = $album->count();
$page_url = "/album/page/";
$paging= $utils->getPaging($page, $total_rows, $records_per_page, $page_url);
array_push($result,["paging" => $paging]);

echo json_encode($result);