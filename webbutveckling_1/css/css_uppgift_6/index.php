<?php
// Antal kort som ska hämtas (kan ändras)
$number = 5;

// Bygg URL till API:et
$api_url = "https://lyktgubben.se/api/v1/cards/random/" . $number;

// Använd file_get_contents för att göra en GET-förfrågan
$response = file_get_contents($api_url);

// Konvertera JSON-svar till en PHP-array
$cards = json_decode($response, true);
?>

<?php foreach ($cards as $card): ?>

    <pre><code>
    <?= print_r($card, true) ?>
    </code></pre>

<?php endforeach ?>