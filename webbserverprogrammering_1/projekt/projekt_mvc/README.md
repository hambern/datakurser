# Projektuppgift: MVC-Arkitektur med Fat-Free Framework

## Syfte
Hittills har vi skrivit skript och enklare program. Nu tar vi steget fullt ut till att bli webbarkitekter. Du ska bygga en professionell, skalbar webbapplikation enligt designmönstret **Model-View-Controller (MVC)**.

## Mål
Efter avslutat projekt ska du kunna:
- **Arkitektur:** Implementera strikt MVC-separation.
- **Ramverk:** Använda *Fat-Free Framework (F3)* för routing, vyer och databas.
- **Beroendehantering:** Använda *Composer* för att installera och hantera bibliotek.
- **Säkerhet:** Skydda applikationen mot vanliga hot (SQL-injection, XSS) och hantera inloggning säkert.

---

## Uppdraget

Ditt uppdrag består av två delar:
1.  **Den låsta grunden (Obligatorisk):** Ett robust användarsystem.
2.  **Det fria temat (Kreativt):** Vad användaren kan göra när hen är inloggad.

### 1. Den låsta grunden
Alla applikationer behöver användarhantering. Du ska bygga:
-   **Registrering:** Spara användare i databasen (lösenord *måste* hash:as med `password_hash`).
-   **Inloggning:** Validera användare och skapa en session (`password_verify`).
-   **Profilsida:** En sida där användaren kan se och redigera sin info.
-   **Åtkomstskydd:** Sidor som kräver inloggning ska inte gå att nås av gäster (omdirigera till inloggning).

### 2. Det fria temat
Du bestämmer vad applikationen gör. Kravet är att data ska kopplas till användaren (En-till-Många relation).

**Exempel:**
-   *Blogg:* Användare skriver inlägg.
-   *Träningsdagbok:* Logga träningspass.
-   *Receptbok:* Spara favoritrecept.

---

## Tekniska Krav & Regler

### Det strikta MVC-mönstret
Separation av ansvar är kärnan i uppgiften.
-   **Models (Hjärnan):** Hanterar databasen. *Ingen HTML eller echo här.*
-   **Views (Ansiktet):** Visar HTML. *Ingen SQL eller komplex PHP-logik här.*
-   **Controllers (Trafikpolisen):** Binder ihop allt. Tar emot request -> Hämtar data från Model -> Skickar till View.

### Verktyg
-   **Språk:** PHP 8+
-   **Ramverk:** Fat-Free Framework (F3)
    -   *Tips: Vill du utmana dig själv? Kika på **Laravel**, ett större industristandard-ramverk.*
-   **Pakethanterare:** Composer
-   **Databas:** MySQL/MariaDB

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
*Kom ihåg att köra `composer dump-autoload` om du ändrar i `autoload`-sektionen.*

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

## Tips & Råd för utveckling

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
4.  **Rapport:** Skriv din dokumentation i `README.md`:
    -   Hur fungerar appen?
    -   Hur tänkte du kring MVC?
    -   Säkerhetsåtgärder?

*OBS: Lägg till din lärare som "Reporter" eller "Maintainer" i projektet för att de ska kunna rätta.*

---

## Bedömning

| Betyg | Krav |
| :--- | :--- |
| **E** | Fungerande inloggning och CRUD för temat. Mappstruktur för MVC finns, men viss logik kan ha hamnat fel. Grundläggande säkerhet. |
| **C** | **Strikt MVC-separation**. Controllern är "tunn", Modellen hanterar data. Validering sker i modellen. Composer används korrekt. |
| **A** | Koden är exemplariskt strukturerad (Namespaces, DRY). Hanterar edge-cases och avancerad validering. Reflektionen visar djup förståelse för arkitektur och säkerhet. |

## Resurser
- [Fat-Free Framework User Guide](https://fatfreeframework.com/3.9/user-guide) (Bibel för detta projekt!)
- [Laravel](https://laravel.com/) (Överkurs)
- [Kom igång med Composer](https://getcomposer.org/doc/00-intro.md)