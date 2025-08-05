<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'spotify_clone';

try {
    $conn = new mysqli($host, $user, $pass, $db);

    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    die("Connection failed: " . $e->getMessage());
}
