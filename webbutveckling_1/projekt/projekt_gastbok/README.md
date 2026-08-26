# Projektuppgift: Gästbok (Textfilsbaserad)

## Syfte
Du ska skapa en klassisk gästbok där besökare kan skriva in sitt namn och ett meddelande. Detta är en grundläggande övning i hur webben fungerar: **Input (Formulär)** -> **Serverhantering (PHP)** -> **Lagring (Fil)** -> **Output (HTML)**.

Du kommer att använda en textfil för att spara datan, vilket är ett bra förstasteg innan man lär sig databaser.

## Mål
Efter avslutat projekt ska du kunna:
- **HTML-formulär:** Skapa `<form>` med `method="POST"`.
- **PHP Datahantering:** Ta emot data från `$_POST`.
- **Lagring:** Spara och läsa data från en JSON-textfil (`file_put_contents`, `json_encode`).
- **Responsivitet:** Designa sidan så den fungerar i mobilen (Mobile First).

---

## Uppgiftsbeskrivning

### Funktionella Krav
Din gästbok ska kunna:
1.  **Ta emot inlägg:** Ett formulär med fält för *Namn* och *Meddelande*.
2.  **Spara inlägg:** När man klickar på "Skicka" ska inlägget sparas på servern.
3.  **Tidsstämpel:** Systemet ska automatiskt spara datum och tid för inlägget.
4.  **Visa inlägg:** Alla sparade inlägg ska visas på sidan, med det senaste överst.

### Tekniska Krav
-   **Lagring:** Datan ska sparas i en fil (t.ex. `guestbook.txt` eller `posts.json`).
-   **Säkerhet:** Du måste tvätta datan med `htmlspecialchars()` för att förhindra att HTML-kod tolkas (XSS-skydd).
-   **Design:** Sidan ska vara snygg och responsiv. Du får gärna använda Bootstrap eller CSS Grid/Flexbox.

---

## Startkod (PHP)

Här är en grund du kan utgå ifrån. Kopiera detta till en fil som heter `index.php`.

```php
<?php
// Inställningar
$filename = 'guestbook.txt';

// Funktion för att spara
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name']) && !empty($_POST['message'])) {
    $entry = [
        'name' => htmlspecialchars($_POST['name']),
        'message' => htmlspecialchars($_POST['message']),
        'timestamp' => date('Y-m-d H:i')
    ];
    
    // Konvertera till JSON och lägg till nyrad
    $jsonEntry = json_encode($entry) . PHP_EOL;
    
    // Spara i filen (FILE_APPEND lägger till sist istället för att skriva över)
    file_put_contents($filename, $jsonEntry, FILE_APPEND);
    
    // Ladda om sidan för att förhindra dubbelpostning
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Funktion för att läsa
$posts = [];
if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $posts[] = json_decode($line, true);
    }
    // Vänd listan så senaste inlägget kommer först
    $posts = array_reverse($posts);
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min Gästbok</title>
    <link rel="stylesheet" href="style.css"> 
    <!-- Tips: Lägg till Bootstrap här om du vill -->
</head>
<body>
    <div class="container">
        <h1>Välkommen till gästboken</h1>
        
        <!-- Formulär -->
        <form method="POST" action="">
            <label for="name">Namn:</label>
            <input type="text" name="name" id="name" required>
            
            <label for="message">Meddelande:</label>
            <textarea name="message" id="message" required></textarea>
            
            <button type="submit">Skicka inlägg</button>
        </form>

        <hr>

        <!-- Lista inlägg -->
        <div class="posts">
            <?php foreach ($posts as $post): ?>
                <div class="post">
                    <h3><?= $post['name'] ?> <small><?= $post['timestamp'] ?></small></h3>
                    <p><?= $post['message'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
```

---

## Bedömning

| Nivå | Kriterier |
| :--- | :--- |
| **E** | Gästboken fungerar. Man kan skriva inlägg som sparas och visas. Enkel CSS-design. |
| **C** | Layouten är fullt responsiv och ser bra ut i mobilen. Du har lagt till extra funktioner (t.ex. validering så man inte kan skicka tomma meddelanden). Koden är väl kommenterad. |
| **A** | Professionell design (UI/UX). Koden är strukturerad (kanske uppdelad i funktioner eller filer). Du hanterar fel (t.ex. om filen inte går att skriva till). |

## Resurser
- [The Odin Project: Form Basics](https://www.theodinproject.com/lessons/foundations-form-basics)
- [MDN Web Docs: Sending form data](https://developer.mozilla.org/en-US/docs/Learn/Forms/Sending_and_retrieving_form_data)
- [PHP Manual: Dealing with Forms](https://www.php.net/manual/en/tutorial.forms.php)
- [GetBootstrap.com](https://getbootstrap.com/)