<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/core.php';
include_once '../shared/Utils.php';
include_once '../config/database.php';
include_once '../objects/Genre.php';


$utils = new Utils();

$genre = new Genre();
// query product count number of rows
$num = $genre->readPaging($from_record_num,$records_per_page);
$result = $genre->resultSet();
$total_rows = $genre->count();
$page_url = ROOT_PATH."genres/read_paging.php?";
$paging= $utils->getPaging($page, $total_rows, $records_per_page, $page_url);
$result["paging"]=$paging;

echo json_encode($result);