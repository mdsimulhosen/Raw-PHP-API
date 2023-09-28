<?php

require './db.php';


function getData()
{
    global $conn;

    $query = 'SELECT * FROM customer';
    $run = mysqli_query($conn, $query);
    if ($run) {
        if (mysqli_num_rows($run)) {
            $response = mysqli_fetch_all($run, MYSQLI_ASSOC);

            $data = [
                'status' => 200,
                'message' => 'Customer Found Successfully',
                'data' => $response,
            ];

            header('HTTP/1.0 200 OK');
            return json_encode($data);
        } else {
            $data = [
                'status' => 404,
                'message' => 'No Customer Found',
            ];

            header('HTTP/1.0 404 No Data Found');
            return json_encode($data);
        }
    } else {
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];

        header('HTTP/1.0 500 Internal Server Error');
        return json_encode($data);
    }
}
