<?php

$host = '107.155.65.107';
$username = 'triggeri_me';
$pass = '!}Ql-tipj@eR';
$dbname = 'triggeri_tv';

$conn = mysqli_connect($host, $username, $pass, $dbname);

if (!$conn) {
    die('connection Failed: ' . mysqli_connect_error());
}
