<?php
require './function.php';

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/JSON');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Header: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'GET') {
    $data = getData();
    return $data;
} else {
    $data = [
        'status' => 405,
        'message' => $method . ' Not Support',
    ];

    header('HTTP/1.0 405 Method Not Allowed');

    echo json_encode($data);
}
