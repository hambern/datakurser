<?php

$db = [
    'servername' => 'localhost',
    'username' => 'mh6802',
    'password' => '7zaynab',
    'database' => 'student_games'
];

$mysql = new mysqli($db['servername'], $db['username'], $db['password'], $db['database']);

if ($mysql->connect_error)
    die("Connection failed: " . $mysql->connect_error);