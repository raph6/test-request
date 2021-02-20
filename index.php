<?php

header('Content-Type: application/json');

$array = [
    'request_method' => $_SERVER['REQUEST_METHOD'],
    'get' => $_GET,
    'post' => $_POST,
    'headers' => getallheaders(),
    'files' => $_FILES,
    'cookies' => $_COOKIE,
];

echo json_encode($array);