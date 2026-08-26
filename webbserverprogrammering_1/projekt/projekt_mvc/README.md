# Projektuppgift: MVC-Arkitektur med Flight PHP

## Syfte

Hittills har vi skrivit skript och enklare program. Nu tar vi steget fullt ut till att bli webbarkitekter. Du ska bygga en professionell, skalbar webbapplikation enligt designmönstret **Model-View-Controller (MVC)** med hjälp av mikroramverket **Flight PHP**.

## Mål

Efter avslutat projekt ska du kunna:

- **Arkitektur:** Implementera strikt MVC-separation.
- **Ramverk:** Använda mikroramverket _Flight PHP_ för routing, vyer och databaskoppling.
- **Beroendehantering:** Använda _Composer_ för att installera bibliotek och autoloading (PSR-4).
- **Säkerhet:** Skydda applikationen mot vanliga hot (SQL-injection via prepared statements, XSS via `htmlspecialchars`) och hantera inloggning/sessioner säkert.
- **Integration:** Skapa och kommunicera med mjukvarugränssnitt/API:er.

---

## Nya begrepp

Eftersom detta är första gången vi arbetar med ett modernt ramverk och pakethanterare, här är en kort introduktion:

### Vad är Flight PHP?

**Flight PHP** är ett modernt, lättviktigt "micro-framework" för PHP. Till skillnad från att skriva all kod från grunden (som vi gjort tidigare), ger ramverket oss färdiga, rena byggstenar:

- **Routing:** Kopplar snygga URL:er (t.ex. `/profil` eller `/produkter/@id`) direkt till rätt Controller och funktion.
- **Separation:** Hjälper oss dela upp koden i Modell, Vy och Kontroller (MVC).
- **Enkelhet & Kontroll:** Inget magiskt eller onödigt tungt i bakgrunden – du förstår hela kedjan.

Vi använder skolans officiella startmall: **[boilerplate-flight på GitHub](https://github.com/hambern/boilerplate-flight)**.

### Vad är Composer?

**Composer** är en "pakethanterare" för PHP. Det liknar hur du installerar appar på din telefon, fast för kodbibliotek:

- **Hanterar beroenden:** Istället för att ladda ner Flight manuellt och lägga i en mapp, säger vi till Composer: _"Jag vill ha Flight PHP"_, så laddar Composer ner det och håller det uppdaterat.
- **Autoloading:** Composer sköter automatisk inkludering av alla dina klasser via PSR-4 standarden. Du slipper skriva `require 'min_fil.php'` i varje fil.

---

## Uppdraget

Ditt uppdrag består av två delar:

1.  **Den låsta grunden (Obligatorisk):** Ett robust användarsystem.
2.  **Det fria temat (Kreativt):** Vad användaren kan göra när hen är inloggad.

### 1. Den låsta grunden

Alla webbapplikationer behöver en trygg grund. Du ska bygga:

- **Registrering:** Spara användare i databasen (lösenord _måste_ hash:as med `password_hash`).
- **Inloggning:** Validera användare och skapa en session (`password_verify` och `$_SESSION`).
- **Profilsida:** En sida där användaren kan se och redigera sin information.
- **Åtkomstskydd:** Sidor som kräver inloggning ska inte kunna nås av gäster (omdirigera till inloggning med `Flight::redirect('/login')`). Detta inkluderar även API-endpoints.

### 2. Det fria temat

Du bestämmer vad applikationen gör. Kravet är att data ska kopplas till användaren (En-till-Många relation).

**Exempel:**

- _Blogg:_ Användare skriver och hanterar inlägg.
- _Träningsdagbok:_ Logga och analysera träningspass.
- _Receptbok:_ Spara, kategorisera och betygsätt favoritrecept.
- _Webbshop/Katalog:_ Produkter, kategorier och kundkorg.

---

## Projektplan & Dokumentation

Ett professionellt projekt börjar inte med kod, utan med en plan.
Jag har tagit fram en mall som du **ska** använda genom hela arbetet: [rapportmall.md](rapportmall.md).

1.  **Starta:** Kopiera mallen till ditt repo (döp den gärna till `RAPPORT.md` eller behåll namnet).
2.  **Planera:** Fyll i **DEL 1** (Projektplan) och visa för lärare _innan_ du börjar koda.
3.  **Utvärdera:** I slutet av projektet fyller du i **DEL 2** (Slutrapport).

---

### Det strikta MVC-mönstret

Separation av ansvar är kärnan i uppgiften:

- **Models (`models/` - Hjärnan):** Hanterar databasen och SQL-frågor. _Ingen HTML eller echo här._
- **Views (`views/` - Ansiktet):** Visar HTML. _Ingen SQL eller databaskoppling här. All utskrift säkras med `htmlspecialchars()`._
- **Controllers (`controllers/` - Trafikpolisen):** Binder ihop allt. Tar emot request -> Hämtar data från Model -> Skickar till View via `Flight::render()`.

### Verktyg

- **Språk:** PHP 8+
- **Ramverk:** Flight PHP (v3)
- **Startmall:** [github.com/hambern/boilerplate-flight](https://github.com/hambern/boilerplate-flight)
- **Pakethanterare:** Composer
- **Databas:** MySQL / MariaDB (via `PdoWrapper`)

---

## Projektstruktur (Best Practice)

Startmallen är uppbyggd med ren MVC och PSR-4 autoloading via Composer:

```text
mitt_projekt/
├── config.sample.php       <-- Mall för databasinställningar (i Git)
├── config.php              <-- Dina privata databasuppgifter (i .gitignore)
├── composer.json           <-- Hanterar beroenden och autoloading
├── composer.lock           <-- Låser versioner
├── index.php               <-- Startpunkt & Router (Front Controller)
├── .htaccess               <-- Omdirigerar trafik & blockerar känsliga filer
├── .gitignore              <-- Ignorerar vendor/ och config.php
├── README.md               <-- Dokumentation & instruktioner
├── AGENTS.md               <-- Instruktioner för AI-assistenter
│
├── controllers/            <-- Dina controllers (t.ex. HomeController.php, UserController.php)
├── models/                 <-- Dina modeller med SQL (t.ex. User.php, Post.php)
└── views/                  <-- Dina HTML-mallar
    ├── layout.php          <-- Grundlayout med header/footer ($content)
    └── home.php            <-- Sidspecifik vy
```

### Konfigurera Composer (`composer.json`)

Autoloading är färdigkonfigurerat i startmallen för `App\Controllers\` och `App\Models\`:

```json
{
    "require": {
        "mikecao/flight": "^3.19"
    },
    "autoload": {
        "psr-4": {
            "App\\Controllers\\": "controllers/",
            "App\\Models\\": "models/"
        }
    }
}
```

_Kom ihåg att köra `composer dump-autoload` i terminalen om du lägger till nya namnrymder eller klasser._

---

## Kom igång med projektet

Här är en steg-för-steg guide för att sätta upp grunden utifrån startmallen:

1.  **Klona startmallen från GitHub:**

    ```bash
    git clone https://github.com/hambern/boilerplate-flight.git mitt_projekt
    cd mitt_projekt
    ```

2.  **Installera beroenden med Composer:**

    ```bash
    composer install
    ```

3.  **Skapa din personliga databaskonfiguration:**

    ```bash
    cp config.sample.php config.php
    ```
    Öppna `config.php` och fyll i dina MySQL-uppgifter (`host`, `name`, `user`, `pass`).

4.  **Testa att projektet fungerar i webbläsaren!**

---

## Tips & råd för utveckling

### 1. Lägga till en ny Controller
Skapa en fil i `controllers/`, t.ex. `controllers/UserController.php`:

```php
<?php
namespace App\Controllers;

use Flight;
use App\Models\User;

class UserController
{
    public static function index()
    {
        // 1. Hämta data från Model
        $users = User::all();

        // 2. Rendera vyn 'users' inuti 'layout'
        Flight::render('users', ['users' => $users], 'content');
        Flight::render('layout', ['title' => 'Användarlista']);
    }
}
```

### 2. Lägga till en ny Model
Skapa en fil i `models/`, t.ex. `models/User.php`:

```php
<?php
namespace App\Models;

use Flight;

class User
{
    public static function all(): array
    {
        return Flight::db()->fetchAll("SELECT id, username, email FROM users ORDER BY username ASC");
    }

    public static function find(int $id): ?array
    {
        $row = Flight::db()->fetchRow("SELECT * FROM users WHERE id = ?", [$id]);
        return $row ?: null;
    }

    public static function create(string $username, string $password): bool
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = Flight::db()->runQuery("INSERT INTO users (username, password) VALUES (?, ?)", [$username, $hash]);
        return $stmt->rowCount() > 0;
    }
}
```

### 3. Koppla rutten i `index.php`

I `index.php` mappar du URL:en till controllern:

```php
use App\Controllers\UserController;

Flight::route('GET /anvandare', [UserController::class, 'index']);
```

---

## Inlämning

Vi använder GitHub för inlämning, precis som i branschen:

1.  **Repository:** Skapa ett privat repo på GitHub.
2.  **Källkod:** Pusha din kod (exklusive `vendor/`-mappen och `config.php`! Se till att `.gitignore` används).
3.  **Databas:** Exportera din databasstruktur till en `.sql`-fil och lägg i roten av repot.
4.  **Rapport:** Se till att din ifyllda rapportfil ([rapportmall.md](rapportmall.md)) ligger i repot. Den ska innehålla både projektplanen och slutrapporten.

_OBS: Lägg till din lärare som "Collaborator" (under Settings -> Collaborators) i ditt GitHub-repository för att läraren ska kunna se och rätta._

---

## Bedömning

| Kriterium                       | E                                                                                                                                                              | C                                                                                                                                                   | A                                                                                                                                            |
| :------------------------------ | :------------------------------------------------------------------------------------------------------------------------------------------------------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------- |
| **Teori & Begrepp**             | Beskriver översiktligt tekniken bakom dynamiska webbplatser och samspel. Använder enkel terminologi med viss säkerhet.                                         | Beskriver utförligt tekniken bakom dynamiska webbplatser och samspel. Använder terminologi med viss säkerhet.                                       | Beskriver utförligt och nyanserat teknik och samspel. Använder terminologi med säkerhet.                                                     |
| **Projektplanering**            | Enkel projektplan med översiktlig beskrivning av funktion. Enkel dokumentation och utvärdering.                                                                | Genomarbetad projektplan med utförlig beskrivning av funktion och arkitektur. Noggrann dokumentation med nyanserade omdömen.                        | Genomarbetad projektplan (revideras vid behov) med utförlig/nyanserad beskrivning. Noggrann dokumentation med förbättringsförslag.           |
| **Implementation & Arkitektur** | Presentationslogik är i begränsad utsträckning skild från övrig logik. Koden är i begränsad utsträckning läsbar/kommenterad. Enkel lösning för datapersistens. | Presentationslogik är skild från övrig logik (MVC). Koden följer standard och är översiktligt kommenterad. Enkel lösning för permanent datalagring. | Presentationslogik är skild från övrig logik. Koden följer standard och är utförligt kommenterad. Avancerad produkt med komplex datalagring. |
| **Kvalitet & Säkerhet**         | Produkten är av tillfredsställande kvalitet. Identifierar ett fåtal sårbarheter och vidtar enkla åtgärder.                                                     | Produkten är av tillfredsställande kvalitet och testad. Identifierar sårbarheter och vidtar åtgärder.                                               | Produkten är av god kvalitet och testad (även manuellt). Identifierar flera sårbarheter och vidtar avancerade åtgärder.                      |

## Resurser

- [Startmall för Flight PHP på GitHub (boilerplate-flight)](https://github.com/hambern/boilerplate-flight) (Skolans officiella grundmall!)
- [Flight PHP dokumentation](https://docs.flightphp.com/)
- [Kom igång med Composer](https://getcomposer.org/doc/00-intro.md) (Guide)
- [Laravel](https://laravel.com/) (Överkurs)
