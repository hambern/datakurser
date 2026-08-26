# Projektuppgift: Databasdriven Gästbok

## Syfte
I kursen *Webbutveckling 1* skapade du din personliga portalsida med HTML och CSS. Nu tar vi det stora steget in i servervärlden! 

Denna uppgift syftar till att introducera dig för **PHP**, **MySQL** och **Git** – tre av webbens viktigaste backend-verktyg. Du ska bygga en **databasdriven gästbok** där besökare kan skriva in sitt namn och ett meddelande, som sparas permanent i din MySQL-databas och visas upp på sidan. Gästboken länkas självklart in från din befintliga portalsida på webbservern.

## Mål
Efter att ha slutfört denna uppgift ska du kunna:
- **MySQL & PDO:** Skapa tabeller och ansluta till en databas säkert med PDO i PHP.
- **SQL (CRUD-grunder):** Spara data med `INSERT` och hämta data med `SELECT`.
- **Säkerhet:** Förstå och implementera skydd mot SQL-injection (Prepared Statements med `?`) och XSS (`htmlspecialchars()`).
- **Git & GitHub:** Skapa ett lokalt repo, göra tydliga commits och pusha koden till GitHub.
- **Fullstack-flödet:** Förstå hela kedjan: *Formulär (HTML/CSS)* ➡️ *Serverbehandling (PHP)* ➡️ *Lagring (MySQL)* ➡️ *Presentation (HTML)*.

## Förberedelser
Innan du börjar:
1. Se till att du har din personliga portalsida igång i `public_html/`.
2. Ha dina inloggningsuppgifter till din MySQL-databas på `student.oedu.se` till hands.
3. Ha ett konto på [GitHub](https://github.com).

---

## 📚 Kunskapskrav & Vad du behöver läsa på om

Innan du börjar skriva din backend-kod behöver du förstå grunderna i hur webbservern, databasen och Git samverkar:

### 1. Teori i kursens handbok
- **[Handboken: Databashantering (MySQL & PDO)](../../teori/README.md#databashantering-mysql--pdo)** — Hur PHP ansluter till MySQL via `PDO`.
- **[Handboken: Säkerhet](../../teori/README.md#säkerhet)** — Varför du *aldrig* konkatenerar SQL-strängar (`"SELECT * FROM ... WHERE name = '$name'"`) och hur Prepared Statements (`?`) skyddar mot SQL-injections.

### 2. Rekommenderad läsning & övningar
- 📖 **[The Odin Project: Git Basics](https://www.theodinproject.com/lessons/foundations-git-basics)** — Hur Git fungerar, repositories, commits och staging area (`git add .`, `git commit`).
- 📖 **[The Odin Project: Databases Overview](https://www.theodinproject.com/lessons/nodejs-databases)** — Vad en relationsdatabas är, tabeller, rader, kolumner och primärnycklar (`PRIMARY KEY`).
- 📖 **[PHP: The Right Way — Databaser & PDO](https://phptherightway.com/#databases_pdo)** — Bästa praxis för PDO i modern PHP.
- 🎯 **[SQLBolt: Interactive SQL Tutorial](https://sqlbolt.com/)** — Gör lektion 1–5 för att bli bekväm med `SELECT` och `INSERT`.

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
$host   = "localhost";
$dbname = "ditt_databasnamn";  // Ofta samma som ditt användarnamn
$user   = "ditt_användarnamn";
$pass   = "ditt_lösenord";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Anslutningen misslyckades: " . $e->getMessage());
}
?>
```

### Steg 3: Spara inlägg (Säkert med Prepared Statements)
Uppdatera din gästbokssida så att formuläret skickar data till en PHP-fil (eller samma fil). **Viktigt:** Använd *Prepared Statements* med platshållare (`?`) för att skydda mot SQL-injections.

```php
<?php
require 'db.php'; // Inkludera databasanslutningen

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hämta data från formuläret
    $name    = $_POST['name'] ?? '';
    $message = $_POST['message'] ?? '';

    // Förbered SQL-frågan med platshållare (?) och kör säkert med execute()
    $stmt = $pdo->prepare("INSERT INTO guestbook_posts (name, message) VALUES (?, ?)");
    
    if ($stmt->execute([$name, $message])) {
        echo "Inlägget har sparats!";
    } else {
        echo "Fel vid sparning.";
    }
}
?>
```

### Steg 4: Visa inlägg
Hämta alla inlägg från databasen och loopa igenom dem för att visa dem på sidan.

```php
<?php
require 'db.php';

$stmt = $pdo->query("SELECT name, message, created_at FROM guestbook_posts ORDER BY created_at DESC");
$posts = $stmt->fetchAll();
?>

<div class="guestbook-posts">
    <?php if (!empty($posts)): ?>
        <?php foreach ($posts as $post): ?>
            <div class="post">
                <h3><?= htmlspecialchars($post['name']) ?></h3>
                <p><?= htmlspecialchars($post['message']) ?></p>
                <small><?= $post['created_at'] ?></small>
            </div>
        <?php endforeach; ?>
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
git commit -m "Initial commit: Grundläggande gästbok med HTML, PHP och MySQL"
```

### 2. Versionshantera ändringar
När du har lagt till databasfunktionaliteten, gör en ny commit:
```bash
git add .
git commit -m "Feature: Kopplat gästboken till MySQL-databas"
```

### 3. Ladda upp till GitHub
1.  Skapa ett **nytt, tomt repository** på GitHub (kryssa *inte* i "Add a README file").
2.  Följ instruktionerna på GitHub för att pusha ditt befintliga repository, oftast ser det ut så här:

    ```bash
    # Byt ut URL:en nedan mot ditt repositorys URL
    git remote add origin git@github.com:ditt_användarnamn/guestbook.git
    
    # Skicka upp koden
    git push -u origin main
    ```

*Behöver du skapa SSH-nycklar? Kör `ssh-keygen`, kopiera innehållet i `~/.ssh/id_rsa.pub` (eller `id_ed25519.pub`) och lägg till under **Settings -> SSH and GPG keys** på GitHub.*

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
- [GitHub Docs: SSH-nycklar](https://docs.github.com/en/authentication/connecting-to-github-with-ssh)