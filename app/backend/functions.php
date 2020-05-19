<?php

function sortedArr($arr, $keyword) 
{
    $title = array_column($arr, $keyword);;

    array_multisort($title, SORT_ASC, $arr);

    return $arr;
}

function cleanUpEmpty($arr)
{
    foreach($arr as $key => $value) 
    {
        if(!$value["title"] || !$value["id"] || !$value["tags"])
        {
            unset($arr[$key]);
        }
    }

    return $arr;
}