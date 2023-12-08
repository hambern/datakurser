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

// Det är en bra princip att här uppe göra bort all php så att man sedan kan använda html-delen nedanför enbart till att visa upp variablerna. Idealet är att det ska vara enkelt, om någon vill ha datan i ett annat format än HTML, enkelt kan byta ut nedanstående del utan att några viktiga funktioner drabbas.
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-chatten</title>
</head>
<body>
    <h1>Student-chatten</h1>
    <p>Du är ansluten till databasen "<?= $dbname ?>" på "<?= $servername ?>" med användaren "<?= $username ?>".</p>
</body>
</html>
