# Skapa en gästbok

### Syfte
Denna uppgift syftar till att ge dig praktisk erfarenhet av att designa och lagra information på en webbsida genom att skapa en gästbok där besökare kan lämna meddelanden. Genom denna uppgift får du möjlighet att öva på viktiga webbteknologier och färdigheter, inklusive:

- Länkning mellan olika dokument på din webbplats.
- Utveckling av en responsiv design som fungerar på både datorer och mobila enheter.
- Skapande av formulär för att samla in data från användare.
- Hantering av data genom POST-anrop.
- Lagring och hämtning av data för att visa meddelanden.

### Mål
Efter att ha slutfört denna uppgift ska du kunna:
- Bygga ett formulär med HTML för att samla in data från användare.
- Skicka data från formuläret till en server med hjälp av POST-anrop.
- Lagra data på servern i en textfil.
- Hämta och visa lagrad data på din webbplats.
- Skapa en responsiv design med HTML och CSS som fungerar både på datorer och mobila enheter.

### Beskrivning
Du ska designa en gästbok där användare kan lämna kommentarer. Gästboken ska minst kunna lagra följande information. Du får dock helst göra gästboken mer komplex än så genom att modifiera koden:

- **Namn** på den som skriver meddelandet.
- **Tidpunkt** då meddelandet lämnades.
- **Meddelande** som besökaren vill lämna.

Den insamlade informationen ska sparas på servern i en textfil och visas för andra besökare på sidan. Gästboken ska ha en enkel och elegant design som är responsiv, vilket innebär att den fungerar och ser bra ut på både datorer och mobila enheter.

### Exempel på HTML-kod

Nedanför följer en mycket enkel men fullt funktionell gästbokskod att utgå ifrån. Du behöver inte nödvändigtvis förstå vad varje rad i PHP-delen gör. Det skadar dock på inget sätt att kolla upp det. Vad den gör är att skapa två funktioner - save() och read() - som sparar till, respektive läser ifrån en textfil.

~~~php
<?php
// Spara ett inlägg i en JSON-fil
function save($data, $file = 'guestbook.txt') {
    $data['timestamp'] = date('Y-m-d H:i:s'); // Lägg till tidsstämpel
    $clean = array_map('htmlspecialchars', $data); // Sanera all data
    $json = json_encode($clean); // Gör om arrayen till en json-sträng
    file_put_contents($file, $json . PHP_EOL, FILE_APPEND | LOCK_EX);
}

// Läs alla inlägg från JSON-filen
function read($file = 'guestbook.txt') {
    if (!file_exists($file)) return []; // Returnera tom array om filen inte finns
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // Hämta ut alla rader i filen till en array
    return array_map(function($line) {
        return json_decode($line, true); // Avkoda varje rad från en json-sträng till en array
    }, $lines);
}

// Spara inlägget om POST-data finns
if (!empty($_POST)) {
    save($_POST); // Spara hela $_POST till filen
}

// Läs och vänd inläggen så att det senaste kommmer först
$posts = array_reverse(read());
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gästbok</title>
</head>
<body>
    <h1>Gästbok</h1>
    
    <form method="post">
        <label for="name">Vad heter du?</label><br>
        <input id="name" type="text" name="firstname" required><br>

        <label for="message">Meddelande</label><br>
        <textarea name="message" id="message" cols="30" rows="10" required></textarea><br>
        
        <button type="submit">Skicka</button>
    </form>

    <h2>Inlägg</h2>
    <ul>
        <?php foreach ($posts as $post) : ?>
            <li>
                <em>(<?= $post['timestamp'] ?>)</em>
                <strong><?= $post['firstname'] ?></strong>
                <?= $post['message'] ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>
~~~

### Ramverk och tekniker
- **HTML och CSS:** Använd HTML för att skapa formuläret och strukturen på sidan. Använd CSS för att skapa en stilren och responsiv design.
- **PHP:** Använd PHP för att hantera POST-anropet, spara data i en textfil och hämta samt visa den sparade datan.

### Resurser att studera
För att förbereda dig inför denna uppgift, rekommenderar jag att du läser igenom följande:

- [HTML Formulär](https://www.w3schools.com/html/html_forms.asp)
- [CSS Grundläggande](https://www.w3schools.com/css/css_intro.asp)
- [PHP Grundläggande](https://www.w3schools.com/php/php_intro.asp)
- [Normalize.css](https://necolas.github.io/normalize.css/)

---

## Bedömning

| **Kvalitetsaspekt**         | **Betyg E**                                      | **Betyg C**                                      | **Betyg A**                                      |
|-----------------------------|-------------------------------------------------|-------------------------------------------------|-------------------------------------------------|
| **Formulär och datahantering** | Enkel data samlas in och lagras med HTML och PHP. | Formuläret är genomtänkt, och data lagras på ett strukturerat sätt. | Formuläret är väl utformat, och data lagras effektivt och strukturerat. |
| **Design och CSS**          | Enkel CSS används för att styla gästboken.      | CSS används för att skapa en responsiv och tilltalande design. | CSS används för att skapa en professionell och fullt responsiv design. |
| **Responsivitet**           | Gästboken fungerar på både datorer och mobila enheter. | Gästboken är responsiv och anpassar sig väl till olika skärmstorlekar. | Gästboken är fullt responsiv och optimerad för användning på alla enheter. |