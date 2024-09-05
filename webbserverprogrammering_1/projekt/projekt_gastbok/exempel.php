<?php
$servername     = "localhost";
$username       = "mh6802";
$password       = "hemligt lösenord!";
$dbname         = "mh6802";

// Skapa anslutning
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollera anslutning
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Skapa ett nytt inlägg
$firstname  = 'Robert';
$lastname   = 'Bengtsson';
$email      = 'mats@nilsson.se';
$homepage   = 'mats.nilsson.se';
$title      = 'hej';
$message    = 'hej';

// Skapar SQL-frågan som skapar ett inlägg
$sql = "INSERT INTO guestbook_posts
    (id, firstname, lastname, email, homepage, title, message, created_at)
    VALUES
    (NULL, '$firstname', '$lastname', '$email', '$homepage', '$title', '$message', CURRENT_TIMESTAMP);";

// Kör SQL-frågan
$conn->query($sql);

// Skapar en ny SQL-fråga som hämtar ut alla inlägg
$sql = "SELECT * FROM guestbook_posts ORDER BY created_at ASC;";

// Kör SQL-frågan
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min nya gästbok</title>
</head>
<body>
    <h1>Min nya gästbok</h1>

    <?php if ($result->num_rows > 0) : // Kontrollerar om det finns inlägg ?>

        <h2>Det finns inlägg i gästboken!</h2>

        <?php while($row = $result->fetch_assoc()) : // Loopar igenom alla inlägg ?>

            <p>
                <h3><?= $row['title'] ?></h3>
                <h4><?= $row['firstname']. ' ' .$row['lastname'] ?></h4>
                <strong>Meddelande:</strong> <?= $row['message'] ?>
            </p>
            <hr>

        <?php endwhile; ?>

    <?php endif; ?>
    
</body>
</html>