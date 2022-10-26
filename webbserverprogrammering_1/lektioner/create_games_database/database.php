<?php

function db_connect() {
    $db = [
        'servername' => 'localhost',
        'username' => 'mh6802',
        'password' => '7zaynab',
        'database' => 'student_games'
    ];

    $conn = mysqli_connect($db['servername'], $db['username'], $db['password'], $db['database']);

    if (!$conn)
        die("Connection failed: " . mysqli_connect_error());

    return $conn;
}
