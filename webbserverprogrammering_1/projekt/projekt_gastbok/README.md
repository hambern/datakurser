# Projektuppgift: Databasdriven Gästbok

## Syfte
Denna uppgift syftar till att introducera dig för MySQL och Git – två grundläggande verktyg inom modern backend-utveckling. Du kommer att vidareutveckla din tidigare gästbok till att bli en databasdriven applikation där inlägg sparas permanent i en MySQL-databas. Du kommer också att använda versionshantering med Git för att strukturerat spara och logga dina kodändringar.

## Mål
Efter att ha slutfört denna uppgift ska du kunna:
- **MySQL:** Skapa databastabeller och strukturera data.
- **PHP & SQL:** Använda PHP för att ansluta, spara och hämta data från en MySQL-databas på ett säkert sätt.
- **Git:** Initiera repositories, skapa commits och synkronisera kod med GitLab.
- **Fullstack-flöde:** Förstå hela flödet från formulärinmatning till databaslagring och presentation.

## Förberedelser
Innan du börjar:
1.  Se till att du har tillgång till din MySQL-databas (via phpMyAdmin eller terminalen).
2.  Ha din tidigare gästbokskod (HTML/CSS) redo.
3.  Ha ett konto på [GitLab](https://gitlab.com).

---

## Genomförande

### Steg 1: Förbered databasen
1.  Logga in på din databas via phpMyAdmin (t.ex. `https://admin.student.oedu.se`) eller terminalen.
2.  Skapa en tabell som heter `guestbook_posts` (eller liknande) med följande SQL-kod:

    ```sql
    CREATE TABLE guestbook_posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        message TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

### Steg 2: Skapa databasuppkoppling
Skapa en separat fil, t.ex. `db.php`, för att hantera anslutningen. Detta gör det enkelt att inkludera den på alla sidor som behöver databasåtkomst.

```php
<?php
$servername = "localhost";
$username = "ditt_användarnamn"; // Ersätt med ditt användarnamn
$password = "ditt_lösenord";     // Ersätt med ditt lösenord
$dbname   = "ditt_databasnamn";  // Ofta samma som användarnamnet

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Anslutningen misslyckades: " . $conn->connect_error);
}
?>
```

### Steg 3: Spara inlägg (Säkert med Prepared Statements)
Uppdatera din gästbokssida så att formuläret skickar data data till en PHP-fil (eller samma fil). **Viktigt:** Använd *Prepared Statements* för att skydda mot SQL-injections.

```php
<?php
require 'db.php'; // Inkludera databasanslutningen

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hämta data från formuläret
    $name = $_POST['name'];
    $message = $_POST['message'];

    // Förbered SQL-frågan med platshållare (?)
    $stmt = $conn->prepare("INSERT INTO guestbook_posts (name, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $message); // "ss" betyder två strängar

    if ($stmt->execute()) {
        echo "Inlägget har sparats!";
    } else {
        echo "Fel vid sparning: " . $stmt->error;
    }

    $stmt->close();
}
?>
```

### Steg 4: Visa inlägg
Hämta alla inlägg från databasen och loopa igenom dem för att visa dem på sidan.

```php
<?php
require 'db.php';

$sql = "SELECT name, message, created_at FROM guestbook_posts ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<div class="guestbook-posts">
    <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="post">
                <h3><?= htmlspecialchars($row['name']) ?></h3>
                <p><?= htmlspecialchars($row['message']) ?></p>
                <small><?= $row['created_at'] ?></small>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Inga inlägg ännu.</p>
    <?php endif; ?>
</div>
```
*Notera användningen av `htmlspecialchars()` för att förhindra XSS-attacker när du skriver ut användardata.*

---

## Versionshantering med Git

Att använda Git är en branschstandard. Följ dessa steg för att versionshantera ditt projekt.

### 1. Initiera lokalt repository
Om du inte redan gjort det, öppna terminalen i din projektmapp:
```bash
git init
git add .
git commit -m "Initial commit: Grundläggande gästbok utan databas"
```

### 2. Versionshantera ändringar
När du har lagt till databasfunktionaliteten, gör en ny commit:
```bash
git add .
git commit -m "Feature: Kopplat gästboken till MySQL-databas"
```

### 3. Ladda upp till GitLab
1.  Skapa ett **nytt, tomt projekt** på GitLab (kryssa *inte* i "Initialize with README").
2.  Följ instruktionerna på GitLab för att pusha ditt befintliga repository, oftast ser det ut så här:

    ```bash
    # Byt ut URL:en nedan mot din repositories URL
    git remote add origin git@gitlab.com:ditt_användarnamn/guestbook.git
    
    # Skicka upp koden
    git push -u origin master
    # (Eller 'main' om din default branch heter det)
    ```

*Behöver du skapa SSH-nycklar? Kör `ssh-keygen`, kopiera innehållet i `~/.ssh/id_rsa.pub` och lägg till under **Settings -> SSH Keys** på GitLab.*

---

## Bedömningskriterier

| Betyg | Krav |
| :--- | :--- |
| **E** | Du kan skapa tabeller, ansluta med PHP och spara/visa data. Grundläggande Git-användning. |
| **C** | Koden är välorganiserad (t.ex. separat fil för db-koppling). Du använder Git regelbundet med tydliga commit-meddelanden. |
| **A** | Du använder **Prepared Statements** för säkerhet (mot SQL-injections) och `htmlspecialchars` (mot XSS). Databasstrukturen är korrekt och koden följer "Best Practices". |

## Tips & Resurser
- [PHP: The Right Way - Databaser & PDO](https://phptherightway.com/#databases_pdo)
- [PHP.net: PDO Prepared Statements](https://www.php.net/manual/en/pdo.prepared-statements.php)
- [The Odin Project: Databases Overview](https://www.theodinproject.com/lessons/nodejs-databases)
- [GitLab Docs: SSH-nycklar](https://docs.gitlab.com/ee/user/ssh.html)