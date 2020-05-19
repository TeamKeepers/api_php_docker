<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
require_once("sdks.php");
require_once("functions.php");

if($data)
{

    $data = array_unique($data, SORT_REGULAR);

    $data = cleanUpEmpty($data);

    if($_GET)
    {
        $data = sortedArr($data, $_GET["sort"]);
    }

    http_response_code(200);
    echo json_encode($data);
} else {
    http_response_code(404);
    echo json_encode(
        array("msg" => "Incorrect data sent. Please try again.")
    );
}