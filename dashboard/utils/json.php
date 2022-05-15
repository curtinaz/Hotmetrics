<?php

function returnJson($array)
{
    header('Content-type: application/json');
    echo json_encode($array, JSON_UNESCAPED_UNICODE);
    die();
}
