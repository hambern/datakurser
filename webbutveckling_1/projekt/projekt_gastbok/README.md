# Skapa en gästbok

### Syfte
Denna uppgift syftar till att ge dig praktisk erfarenhet av att designa och lagra information på en webbsida genom att skapa en gästbok där besökare kan lämna meddelanden. Genom denna uppgift får du möjlighet att öva på viktiga webbteknologier och färdigheter, inklusive:

- Utveckling av en responsiv design som fungerar på både datorer och mobila enheter.
- Jobba ur mobile-first-principen
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
- Känna till hur CSS-ramverk som Bootstrap kan användas för att underlätta designen av webbplatser.

### Beskrivning
Du ska designa en gästbok där användare kan lämna kommentarer. Gästboken ska minst kunna lagra följande information. Du får dock helst göra gästboken mer komplex än så genom att modifiera koden:

- **Namn** på den som skriver meddelandet.
- **Tidpunkt** då meddelandet lämnades.
- **Meddelande** som besökaren vill lämna.

Den insamlade informationen ska sparas på servern i en textfil och visas för andra besökare på sidan. Gästboken ska ha en enkel och elegant design som är responsiv, vilket innebär att den fungerar och ser bra ut på både datorer och mobila enheter.

### Exempel på PHP-kod

Nedanför följer en mycket enkel men fullt funktionell gästbokskod att utgå ifrån. Du behöver inte nödvändigtvis förstå vad varje rad i PHP-delen gör. Det skadar dock på inget sätt att kolla upp det. Vad den gör är att skapa två funktioner - save() och read() - som sparar till, respektive läser ifrån en textfil.

~~~php
<?php
// Spara ett inlägg i en textfil
function save($data, $file = 'guestbook.txt') {
    $data['timestamp'] = date('Y-m-d H:i:s'); // Lägg till tidsstämpel
    $clean = array_map('htmlspecialchars', $data); // Sanera all data
    $json = json_encode($clean);
    file_put_contents($file, $json . PHP_EOL, FILE_APPEND | LOCK_EX); // Spara som en ny rad i filen
    header('Location: #posts'); // Skickar tillbaka användaren till sidan
    exit; // Avbryter scriptet
}

// Läs alla inlägg från textfilen
function read($file = 'guestbook.txt') {
    if (!file_exists($file)) return []; // Returnera tom array om filen inte finns
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return array_map(function($line) {
        return json_decode($line, true); // Dekoda varje rad som assoc array
    }, $lines);
}

// Spara inlägget om POST-data finns
if (!empty($_POST)) {
    save($_POST); // Spara hela $_POST direkt
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
        <!-- Gästboksformuläret -->
    </form>

    <h2 id="posts">Inlägg</h2>
    <ul>
        <?php foreach ($posts as $post) : ?>
            <li>
                <!-- Varje enskilt inlägg -->
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>
~~~

### Ramverk och tekniker
- **HTML och CSS:** Använd HTML för att skapa formuläret och strukturen på sidan. Använd CSS för att skapa en stilren och responsiv design.
- **PHP:** Använd PHP för att hantera POST-anropet, spara data i en textfil och hämta samt visa den sparade datan.
- **Bootstrap:** Använd gärna CSS-ramverket Bootstrap för att designa din hemsida. Bootstrap hittar du här: <https://getbootstrap.com/> och du kan läsa mer om hur du använder det på: <https://www.w3schools.com/bootstrap5/>. Det är dock inget krav.

### Resurser att studera
För att förbereda dig inför denna uppgift, rekommenderar jag att du läser igenom följande:

- [HTML Formulär](https://www.w3schools.com/html/html_forms.asp)
- [CSS Grundläggande](https://www.w3schools.com/css/css_intro.asp)
- [PHP Grundläggande](https://www.w3schools.com/php/php_intro.asp)
- [Normalize.css](https://necolas.github.io/normalize.css/)
- [Bootstrap](https://getbootstrap.com/)

---

## Bedömning

Här är en anpassad version av bedömningsmatrisen där jag har tagit bort de rader som inte är relevanta för uppgiften att skapa en gästbok med HTML, PHP och CSS:

---

## Bedömning

| **Kvalitetsaspekt**          | **Betyg E**                                              | **Betyg C**                                              | **Betyg A**                                              |
|------------------------------|---------------------------------------------------------|---------------------------------------------------------|---------------------------------------------------------|
| **Design och användarupplevelse** | Enkel CSS används för att styla sidan och skapa en grundläggande layout. | CSS används för en tilltalande, responsiv design som fungerar på olika skärmar. | Sidan har en professionell, fullt responsiv design med genomtänkt användarupplevelse, exempelvis genom användning av moderna ramverk. |
| **Kodkvalitet och tekniker** | Koden följer standarder och använder någon grundläggande teknik för märkspråk och stilmallar. | Koden följer standarder och använder flera grundläggande tekniker för märkspråk och stilmallar. | Koden följer standarder med mycket gott resultat och använder flera grundläggande tekniker på ett säkert och effektivt sätt. |
| **Testning och optimering**   | Produkten testas i någon webbläsare och på någon plattform. | Produkten testas i flera webbläsare och på några plattformar. |  |
| **Utvärdering** | Eleven ger enkla omdömen om sitt arbete. | Eleven ger nyanserade omdömen om sitt arbete och resultat. | Eleven ger nyanserade omdömen och förslag på förbättringar. |