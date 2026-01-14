# Projektuppgift: MVC-Arkitektur med Fat-Free Framework

## Syfte

Hittills har vi skrivit skript och enklare program. Nu tar vi steget fullt ut till att bli webbarkitekter. Du ska bygga en professionell, skalbar webbapplikation enligt designmönstret **Model-View-Controller (MVC)**.

## Mål

Efter avslutat projekt ska du kunna:

- **Arkitektur:** Implementera strikt MVC-separation.
- **Ramverk:** Använda _Fat-Free Framework (F3)_ för routing, vyer och databas.
- **Beroendehantering:** Använda _Composer_ för att installera och hantera bibliotek.
- **Säkerhet:** Skydda applikationen mot vanliga hot (SQL-injection, XSS) och hantera inloggning säkert.
- **Integration:** Kommunicera med en extern klient via ett API

---

## Nya begrepp

Eftersom detta är första gången vi arbetar med ramverk och pakethanterare, här är en kort introduktion:

### Vad är Fat-Free Framework (F3)?

**Fat-Free Framework** är ett "micro-framework" för PHP. Till skillnad från att skriva all kod från grunden (som vi gjort tidigare), ger ramverket oss färdiga byggstenar.

- **Routing:** Kopplar snygga URL:er (t.ex. `/profil`) till rätt PHP-funktioner.
- **Separation:** Hjälper oss dela upp koden i Modell, Vy och Kontroller (MVC).
- **Säkerhet:** Inbyggda skydd mot vanliga attacker.

Vi har valt F3 för att det är extremt lättviktigt och enklare att lära sig än större ramverk, men ändå kraftfullt nog för riktiga applikationer.

### Vad är Composer?

**Composer** är en "pakethanterare" för PHP. Det liknar hur du installerar appar på din telefon, fast för kodbibliotek.

- **Hanterar beroenden:** Istället för att ladda ner F3 manuellt och lägga i en mapp, säger vi till Composer: _"Jag vill ha Fat-Free Framework"_, så laddar Composer ner det och håller det uppdaterat.
- **Autoloading:** Composer sköter inkluderingen av alla filer. Du slipper skriva `require 'min_fil.php'` i varje fil.

---

## Uppdraget

Ditt uppdrag består av två delar:

1.  **Den låsta grunden (Obligatorisk):** Ett robust användarsystem.
2.  **Det fria temat (Kreativt):** Vad användaren kan göra när hen är inloggad.

### 1. Den låsta grunden

Alla applikationer behöver användarhantering. Du ska bygga:

- **Registrering:** Spara användare i databasen (lösenord _måste_ hash:as med `password_hash`).
- **Inloggning:** Validera användare och skapa en session (`password_verify`).
- **Profilsida:** En sida där användaren kan se och redigera sin info.
- **Åtkomstskydd:** Sidor som kräver inloggning ska inte gå att nås av gäster (omdirigera till inloggning). Detta inkluderar token-inloggning för API:et.

### 2. Det fria temat

Du bestämmer vad applikationen gör. Kravet är att data ska kopplas till användaren (En-till-Många relation).

**Exempel:**

- _Blogg:_ Användare skriver inlägg.
- _Träningsdagbok:_ Logga träningspass.
- _Receptbok:_ Spara favoritrecept.

---

## Projektplan & Dokumentation

Ett professionellt projekt börjar inte med kod, utan med en plan.
Jag har tagit fram en mall som du **ska** använda genom hela arbetet: [rapportmall.md](rapportmall.md).

1.  **Starta:** Kopiera mallen till ditt repo (döp den gärna till `RAPPORT.md` eller behåll namnet).
2.  **Planera:** Fyll i **DEL 1** (Projektplan) och visa för lärare _innan_ du börjar koda.
3.  **Utvärdera:** I slutet av projektet fyller du i **DEL 2** (Slutrapport).

---

### Det strikta MVC-mönstret

Separation av ansvar är kärnan i uppgiften.

- **Models (Hjärnan):** Hanterar databasen. _Ingen HTML eller echo här._
- **Views (Ansiktet):** Visar HTML. _Ingen SQL eller komplex PHP-logik här._
- **Controllers (Trafikpolisen):** Binder ihop allt. Tar emot request -> Hämtar data från Model -> Skickar till View.

### Verktyg

- **Språk:** PHP 8+
- **Ramverk:** Fat-Free Framework (F3)
  - _Tips: Vill du utmana dig själv? Kika på **Laravel**, ett större industristandard-ramverk._
- **Pakethanterare:** Composer
- **Databas:** MySQL/MariaDB

---

## Projektstruktur (Best Practice)

Vi använder Composer för att ladda klasser automatiskt (Autoloading PSR-4).

```text
/mitt_projekt/
│
├── composer.json           <-- Hanterar beroenden och autoloading
├── composer.lock           <-- Låser versioner (skapas av composer install)
├── config.ini              <-- Inställningar (db-lösenord etc.)
├── index.php               <-- Startpunkt (Front Controller)
├── .htaccess               <-- Omdirigerar trafik till index.php
│
├── app/                    <-- Din kod
│   ├── Controllers/        <-- Dina controllers (t.ex. UserController.php)
│   ├── Models/             <-- Dina modeller (t.ex. User.php)
│   └── Views/              <-- Dina HTML-mallar
│
└── vendor/                 <-- Bibliotek från Composer (F3). RÖR EJ.
```

### Konfigurera Composer (`composer.json`)

För att autoloading ska fungera:

```json
{
  "require": {
    "bcosca/fatfree-core": "^3.7"
  },
  "autoload": {
    "psr-4": {
      "Controllers\\": "app/Controllers/",
      "Models\\": "app/Models/"
    }
  }
}
```

_Kom ihåg att köra `composer dump-autoload` om du ändrar i `autoload`-sektionen._

---

## Kom igång med projektet

Här är en steg-för-steg guide för att sätta upp grunden:

1.  **Skapa projektmapp och installera Composer:**

    ```bash
    mkdir mitt_projekt
    cd mitt_projekt
    composer init
    # Följ guiden, eller skapa composer.json manuellt enligt ovan
    composer require bcosca/fatfree-core
    ```

2.  **Skapa mappstruktur:**

    ```bash
    mkdir -p app/Controllers app/Models app/Views config
    ```

3.  **Skapa din konfiguration (`config.ini`):**

    ```ini
    [globals]
    DEBUG=3
    UI=app/Views/
    AUTOLOAD=app/Controllers/;app/Models/

    # Databasinställningar
    db_dns=mysql:host=localhost;dbname=ditt_db_namn;port=3306
    db_user=din_anvandare
    db_pass=ditt_losenord
    ```

4.  **Skapa din startpunkt (`index.php`):**

    ```php
    <?php
    require 'vendor/autoload.php';

    $f3 = Base::instance();
    $f3->config('config.ini');

    // Databaskoppling
    $f3->set('DB', new DB\SQL(
        $f3->get('db_dns'),
        $f3->get('db_user'),
        $f3->get('db_pass')
    ));

    // Exempel-route
    $f3->route('GET /', 'Controllers\HomeController->index');

    $f3->run();
    ```

---

## Tips & råd för utveckling

### Lägga till en ny Controller

En Controller hanterar logiken. Skapa en fil i `app/Controllers`, t.ex. `HomeController.php`.

```php
namespace Controllers;

class HomeController {
    public function index($f3) {
        // Skicka data till vyn
        $f3->set('message', 'Välkommen till min MVC-app!');
        // Renda vyn
        echo \Template::instance()->render('home.htm');
    }
}
```

### Lägga till en ny Model

En Model representerar en tabell i databasen. Skapa t.ex. `User.php` i `app/Models`.

```php
namespace Models;

class User extends \DB\SQL\Mapper {
    public function __construct(\DB\SQL $db) {
        // Koppla till tabellen 'users'
        parent::__construct($db, 'users');
    }

    public function all() {
        return $this->find();
    }
}
```

### Använda modellen i Controllern

```php
public function index($f3) {
    $db = $f3->get('DB');
    $userModel = new \Models\User($db);
    $users = $userModel->all();

    $f3->set('users', $users);
    echo \Template::instance()->render('user_list.htm');
}
```

---

## Inlämning

Vi använder GitLab för inlämning, precis som i branschen.

1.  **Repository:** Skapa ett privat repo på GitLab.
2.  **Källkod:** Pusha din kod (exklusive `vendor/`-mappen! Skapa en `.gitignore`).
3.  **Databas:** Exportera din databasstruktur till en `.sql`-fil och lägg i roten av repot.
4.  **Rapport:** Se till att din ifyllda rapportfil (baserad på mallen) ligger i repot. Den ska innehålla både planen och slutrapporten.

_OBS: Lägg till din lärare som "Reporter" eller "Maintainer" i projektet för att de ska kunna rätta._

---

## Bedömning

| Kriterium                       | E                                                                                                                                                              | C                                                                                                                                                   | A                                                                                                                                            |
| :------------------------------ | :------------------------------------------------------------------------------------------------------------------------------------------------------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------- |
| **Teori & Begrepp**             | Beskriver översiktligt tekniken bakom dynamiska webbplatser och samspel. Använder enkel terminologi med viss säkerhet.                                         | Beskriver utförligt tekniken bakom dynamiska webbplatser och samspel. Använder terminologi med viss säkerhet.                                       | Beskriver utförligt och nyanserat teknik och samspel. Använder terminologi med säkerhet.                                                     |
| **Projektplanering**            | Enkel projektplan med översiktlig beskrivning av funktion. Enkel dokumentation och utvärdering.                                                                | Genomarbetad projektplan med utförlig beskrivning av funktion och arkitektur. Noggrann dokumentation med nyanserade omdömen.                        | Genomarbetad projektplan (revideras vid behov) med utförlig/nyanserad beskrivning. Noggrann dokumentation med förbättringsförslag.           |
| **Implementation & Arkitektur** | Presentationslogik är i begränsad utsträckning skild från övrig logik. Koden är i begränsad utsträckning läsbar/kommenterad. Enkel lösning för datapersistens. | Presentationslogik är skild från övrig logik (MVC). Koden följer standard och är översiktligt kommenterad. Enkel lösning för permanent datalagring. | Presentationslogik är skild från övrig logik. Koden följer standard och är utförligt kommenterad. Avancerad produkt med komplex datalagring. |
| **Kvalitet & Säkerhet**         | Produkten är av tillfredsställande kvalitet. Identifierar ett fåtal sårbarheter och vidtar enkla åtgärder.                                                     | Produkten är av tillfredsställande kvalitet och testad. Identifierar sårbarheter och vidtar åtgärder.                                               | Produkten är av god kvalitet och testad (även manuellt). Identifierar flera sårbarheter och vidtar avancerade åtgärder.                      |

## Resurser

- [Fat-Free Framework User Guide](https://fatfreeframework.com/3.9/user-guide) (Bibel för detta projekt!)
- [Laravel](https://laravel.com/) (Överkurs)
- [Kom igång med Composer](https://getcomposer.org/doc/00-intro.md) (Guide)
- [Composer](https://getcomposer.org/) (Officiell webbplats)
