<?php

$servername = "localhost";
$username = "student";
$password = "student";
$dbname = "student_chat";

// Skapa anslutning
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollera anslutning
if ($conn->connect_error) {
    die("Anslutning misslyckades: " . $conn->connect_error);
} 

echo "Anslutningen lyckades!";