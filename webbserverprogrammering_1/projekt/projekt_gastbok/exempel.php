<?php
$host   = "localhost";
$dbname = "ditt_användarnamn";
$user   = "ditt_användarnamn";
$pass   = "ditt_lösenord";

// Skapa PDO-anslutning
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Anslutningsfel: " . $e->getMessage());
}

// Hantera formulärinmatning (spara nytt inlägg säkert)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = trim($_POST['name'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!empty($name) && !empty($message)) {
        // Säkert med Prepared Statements och platshållare (?)
        $stmt = $pdo->prepare("INSERT INTO guestbook_posts (name, message) VALUES (?, ?)");
        $stmt->execute([$name, $message]);
        
        // Ladda om sidan för att förhindra att samma inlägg skickas igen vid F5
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}

// Hämta alla inlägg från databasen
$stmt = $pdo->query("SELECT name, message, created_at FROM guestbook_posts ORDER BY created_at DESC");
$posts = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min Databasgästbok</title>
</head>
<body>
    <h1>Min Gästbok (med MySQL & PDO)</h1>

    <form method="POST" action="">
        <p>
            <label for="name">Namn:</label><br>
            <input type="text" id="name" name="name" required>
        </p>
        <p>
            <label for="message">Meddelande:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea>
        </p>
        <button type="submit">Skicka inlägg</button>
    </form>

    <hr>

    <h2>Tidigare inlägg</h2>
    <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <div style="border-bottom: 1px solid #ccc; margin-bottom: 15px; padding-bottom: 10px;">
                <h3><?= htmlspecialchars($post['name']) ?></h3>
                <p><?= nl2br(htmlspecialchars($post['message'])) ?></p>
                <small><em>Skrivet: <?= htmlspecialchars($post['created_at']) ?></em></small>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Inga inlägg ännu. Bli den första att skriva!</p>
    <?php endif; ?>

</body>
</html>