## Bygg med MVC

Hittills har vi skrivit skript och enklare program. Nu ska vi ta steget fullt ut och bli webbarkitekter.

Det är din möjlighet att bygga en komplett, professionell applikation från grunden, precis som man gör i branschen. Inom modern webbutveckling är *hur* du bygger (din arkitektur) viktigare än *vad* du bygger (temat). En välstrukturerad applikation kan leva i årtionden; en rörig applikation faller samman så fort den behöver uppdateras.

Ditt uppdrag är att bevisa att du behärskar **"God praxis"**. Det innebär att du medvetet och strikt ska separera applikationens olika delar enligt **Model-View-Controller (MVC)**-principen.

[toc]

### Uppdraget: två delar i en

Ditt uppdrag består av två delar: en **låst grund** (det obligatoriska) och ett **fritt tema** (det kreativa).

1.  **Den låsta grunden:** Du *måste* bygga ett robust användarsystem.
2.  **Det fria temat:** När en användare är inloggad, vad kan den göra? Det bestämmer du.

De tekniska ramarna är **PHP**, **Fat-Free Framework (F3)**, **Composer** och **MySQL**.

### 1\. Den låsta grunden (det obligatoriska)

Alla moderna applikationer har ett sätt att hantera användare. Detta är den tekniska kärnan som *alla* måste implementera. Du måste bygga ett komplett system för användarhantering.

Detta system **måste** bestå av följande komponenter:

#### En UserModel (eller UserMapper)

  * Detta är "hjärnan" för allt som har med användare att göra.
  * Den ska hantera all **CRUD** (Create, Read, Update, Delete) för användare.
  * Den måste innehålla logik för säker lösenordshantering:
      * Vid **registrering** ska den använda `password_hash()` för att spara lösenordet.
      * Vid **inloggning** ska den använda `password_verify()` för att kontrollera lösenordet.

#### En UserController

  * Detta är "trafikpolisen" som hanterar flödet för användaren.
  * Den tar emot data från webbformulär och skickar den till `UserModel`.
  * Den hämtar data från `UserModel` och skickar den till en `View`.
  * Den måste hantera **sessioner**:
      * Starta en session vid lyckad inloggning (t.ex. `$f3->set('SESSION.user_id', ...)`)
      * Avsluta sessionen vid utloggning (t.ex. `$f3->clear('SESSION')`)

#### Minst fyra vyer (Views)

Du ska organisera dina vyer i mappar som speglar dina controllers (se Sektion 8). För `UserController` innebär detta:

1.  **`views/users/register.html`**: Ett formulär för att skapa en ny användare.
2.  **`views/users/login.html`**: Ett formulär för att logga in.
3.  **`views/users/profile.html`**: En sida där den inloggade användaren kan se sin information (t.ex. "Välkommen Kalle\! Din e-post är kalle@test.se").
4.  **`views/users/edit.html`**: Ett formulär där den inloggade användaren kan uppdatera sin information (t.ex. byta e-post eller lösenord).

#### Åtkomstskydd (Route Protection)

  * Du måste implementera logik som skyddar vissa sidor.
  * En användare som *inte* är inloggad ska inte kunna besöka `views/users/profile.html` eller `views/users/edit.html`. De ska omdirigeras till inloggningssidan.
  * (Detta implementeras bäst med en `beforeroute()`-metod i de controllers som kräver inloggning).

-----

### 2\. Det fria temat (ditt kreativa val)

När grunden är på plats är det dags för dig att vara kreativ. Frågan du ska besvara är:

**"Vad ska en inloggad användare kunna göra på din webbplats?"**

Här har du total frihet. Det enda kravet är att det innehåll som skapas ska **ägas av användaren**. Detta tvingar dig att använda en-till-många-relationer i din databas (t.ex. en `posts`-tabell måste ha en `user_id`-kolumn).

**Exempel på fria teman:**

  * **En blogg:** Användare kan skriva och hantera sina egna blogginlägg.
  * **En träningsdagbok:** Användare kan logga sina egna träningspass.
  * **En receptsamling:** Användare kan spara och kategorisera sina favoritrecept.
  * **En "bucket list":** Användare kan skapa och bocka av saker de vill göra.
  * **En "speedrun"-tracker:** Användare kan logga sina bästa tider i olika spel.
  * **En "dåliga skämt"-databas:** Användare kan posta och rösta på dåliga skämt.

Oavsett vad du väljer måste du implementera full **CRUD**-funktionalitet för detta tema (t.ex. skapa, läsa, uppdatera och radera ett blogginlägg).

-----

### Arkitekturens regler (den strikta MVC-separationen)

Den viktigaste delen av bedömningen är din förmåga att hålla lagren separerade. Följande är **icke-förhandlingsbara regler**:

  * **Models (Hjärnan):**
      * All databaslogik (SQL) finns HÄR.
      * Innehåller **ALDRIG** HTML-kod.
      * Innehåller **ALDRIG** `echo`-anrop eller `reroute()`-anrop.
  * **Views (Ansiktet):**
      * All presentation (HTML) finns HÄR.
      * Innehåller **ALDRIG** SQL-kod.
      * Innehåller **ALDRIG** komplex PHP-logik (`<?php ... ?>`-taggar för loopar eller logik är strängt förbjudet – använd F3:s mallmotor `<repeat>` och `{{ @var }}`).
  * **Controllers (Trafikpolisen):**
      * Ska vara "tunna". De tar emot en förfrågan, ber en Modell om data och skickar datan till en View.
      * Innehåller **ALDRIG** SQL-kod.
      * Innehåller **ALDRIG** HTML-kod.

Om du har SQL-kod i din Controller eller PHP-logik i din view, har du brutit mot MVC-principen och därmed missat kärnmålet med uppgiften.

### Inlämning

Du ska lämna in en `.zip`-fil som innehåller:

1.  **All källkod:** Hela din projektmapp (inklusive `app/`, `config.ini`, `.htaccess`, `index.php`, **`composer.json`**, **`composer.lock`**).
      * **VIKTIGT:** Du ska **INTE** inkludera `vendor/`-mappen i din inlämning. Den återskapas med kommandot `composer install`.
2.  **Databasschema:** En `.sql`-fil som exporterats från din databas (innehåller `CREATE TABLE`-satser).
3.  **Dokumentation (README.md):** En fil där du kort beskriver:
      * Ditt valda tema och hur applikationen fungerar.
      * En reflektion kring dina arkitektoniska val (Varför MVC? Vad var svårt?).
      * En reflektion kring säkerhet (Hur skyddar du mot SQL-injektion och XSS? Hur har du hanterat lösenord? Hur skyddar din `.htaccess` din `config.ini`?).

### Tips för att lyckas

1.  **Steg 1: Sätt upp projektet.** Skapa din projektmapp. Kör `composer init` och `composer require bcosca/fatfree-core`. Sätt upp din `composer.json` för PSR-4 autoloading (se nedan).
2.  **Steg 2: Databasen.** Skapa dina tabeller (`users` och t.ex. `posts`) i MySQL först. Se till att dina relationer (`posts.user_id`) är korrekta.
3.  **Steg 3: Användarsystemet.** Få `register`, `login` och `logout` att fungera. Detta är det svåraste.
4.  **Steg 4: Skydda sidor.** Implementera `beforeroute()` så att bara inloggade kan se vissa sidor.
5.  **Steg 5: Det Fria Temat.** Börja nu bygga CRUD för ditt valda tema (t.ex. blogg). Detta kommer gå fort när grunden väl sitter.
6.  **Steg 6: Testa hela tiden:** Testa en funktion i taget.

-----

### Rekommenderad projektstruktur (filträd)

För att lyckas med denna uppgift rekommenderas starkt att du följer denna katalogstruktur. Den bygger på att **Composer** hanterar dina beroenden (F3) och din autoloading (PSR-4).

```text
/mitt_projekt/
│
├── .htaccess               <-- KRITISK. Innehåller dina säkerhetsregler.
├── index.php               <-- Din Front-Controller. Allt börjar här.
├── config.ini              <-- Databaslösenord, etc. (Skyddas av .htaccess)
├── composer.json           <-- NY: Hanterar dina beroenden (F3) och PSR-4.
├── composer.lock           <-- NY: Låser dina versioner.
│
├── app/                    <-- All din applikationslogik (Skyddas av .htaccess)
│   │
│   ├── controllers/
│   │   ├── UserController.php  (Klassnamn: Controllers\UserController)
│   │   ├── PostController.php  (Klassnamn: Controllers\PostController)
│   │   └── HomeController.php  (Klassnamn: Controllers\HomeController)
│   │
│   ├── models/
│   │   ├── UserMapper.php      (Klassnamn: Models\UserMapper)
│   │   └── PostMapper.php      (Klassnamn: Models\PostMapper)
│   │
│   └── views/                <-- Alla dina HTML-mallar
│       │
│       ├── head.html     (Gemensam <head>, <nav>, etc.)
│       ├── foot.html     (Gemensam <footer> och avslutning)
│       │
│       ├── home/               <-- Vyer för HomeController
│       │   └── index.html
│       │
│       ├── users/              <-- Vyer för UserController
│       │   ├── register.html
│       │   ├── login.html
│       │   ├── profile.html
│       │   └── edit.html
│       │
│       └── posts/              <-- Vyer för PostController (ditt tema)
│           ├── list.html
│           ├── create.html
│           └── edit.html
│
└── vendor/                 <-- NY: Hanteras av Composer. INLÄMNAS EJ.
    └── autoload.php          <-- Den enda fil du behöver inkludera.
```

#### Starta ditt projekt (`index.php`)

Din `index.php`-fil blir mycket renare med Composer. Du behöver **inte** längre använda `$f3->set('AUTOLOAD', ...)`:

```php
// I din index.php

// 1. Ladda Composers autoloader
// Denna fil laddar F3 OCH dina egna klasser (om du konfigurerat composer.json)
require('vendor/autoload.php');

// 2. Skapa en instans av F3-bas-klassen
$f3 = \Base::instance();

// 3. Läs in routes, config, och kör appen...
// ...
// $f3->run();
```

#### Hur Composer hittar dina klasser (PSR-4 Autoloading)

För att detta ska fungera, tala om för Composer var dina klasser finns. Lägg till en `autoload`-sektion i din **`composer.json`**-fil:

```json
{
    "require": {
        "bcosca/fatfree-core": "^3.9"
    },
    "autoload": {
        "psr-4": {
            "Controllers\\": "app/controllers/",
            "Models\\": "app/models/"
        }
    }
}
```

**Glöm inte** att köra `composer dump-autoload` i din terminal varje gång du ändrar denna fil. Nu kommer `require('vendor/autoload.php');` automatiskt att ladda alla dina controllers och modeller när de behövs. Du måste också använda `namespace` överst i dina klasser (t.ex. `namespace Controllers;`).

#### Att rendera de nya vyerna

När du nu renderar en vy från din `UserController` måste du ange hela sökvägen från `views/`-roten:
`echo \Template::instance()->render('users/login.html');`

Och från din `PostController`:
`echo \Template::instance()->render('posts/list.html');`

### Lär dig Fat-Free Framework (F3)

Eftersom F3 är nytt för dig är den officiella dokumentationen din absolut bästa vän. F3 är ett "mikro-ramverk", vilket innebär att det är minimalistiskt och att du måste bygga upp strukturen själv (vilket är hela poängen med uppgiften).

  * **Officiell Hemsida:** [fatfreeframework.com](https://fatfreeframework.com/)
      * Här finns all information du behöver.
  * **Användarguide (User Guide) - VIKTIGAST**
      * [fatfreeframework.com/3.9/user-guide](https://fatfreeframework.com/3.9/user-guide)
      * **Börja här\!** Läs specifikt avsnitten:
        1.  `Getting Started` (Hur du sätter upp `index.php`)
        2.  `Routing Engine` (Hur routing fungerar, antingen i `index.php` eller `routes.ini`)
        3.  `Views and Templates` (Hur du använder `{{ @var }}` och `<repeat>`)
        4.  `Databases` (Hur du använder `DB\SQL\Mapper` – detta är dina Modeller\!)
  * **DigitalOcean-handledning:**
      * [How To Use the Fat Free PHP Framework](https://www.digitalocean.com/community/tutorials/how-to-use-the-fat-free-php-framework)
      * En bra, praktisk guide som går igenom grunderna.

### Bedömningsmatris (WESWEB01)

Din prestation bedöms utifrån kvaliteten på din kod, din efterlevnad av MVC-principerna och djupet i din reflektion, i enlighet med kursens kunskapskrav.

| Kunskapskrav | Betyg E | Betyg C | Betyg A |
| :--- | :--- | :--- | :--- |
| **Följer etablerad god praxis** | Applikationen har en mappstruktur för M, V och C. CRUD-funktionalitet för användare och tema är implementerad. Logik kan vara fellokalicerad (läckage mellan lager). | Applikationen uppvisar en **strikt MVC-separation**. Controllers är tunna, Models är "feta", Views är "dumma". Datavalidering sker i modellen. 1-M-relationer (användare -\> tema) hanteras korrekt. **Använder Composer för beroendehantering.** | Som C, plus: Koden är mycket välorganiserad (t.ex. användning av basklasser, helper-funktioner). Komplex affärslogik (t.ex. avancerad validering, M2M-relationer) är implementerad på ett robust, korrekt och skalbart sätt i Modell-lagret. **Använder Composers PSR-4 autoloading korrekt.** |
| **Produktens kvalitet** | Applikationen fungerar, men kan ha uppenbara buggar eller sakna grundläggande felhantering (t.ex. kraschar vid felaktig inmatning). Inloggningen fungerar. | Applikationen är stabil och hanterar normal användning och vanliga fel (t.ex. "404 not found", "felaktig inmatning", "fel lösenord") på ett "tillfredsställande" sätt. | Applikationen är "utförlig", robust, och hanterar edge-cases. Koden är optimerad och följer professionella standarder för kodformatering. |
| **Identifierar hot och sårbarheter** | Eleven kan påvisa att grundläggande skydd (F3:s mapper-sanitering) används mot SQL-injektion. `password_hash()` används. | Eleven har implementerat skydd mot vanliga attacker (SQL-injektion, XSS) och kan förklara hur skydden fungerar. All användar-genererad HTML-output saneras (t.ex. via F3:s `esc()`-funktion i vyn). `.htaccess` skyddar `config.ini`. | Eleven kan reflektera "nyanserat" över säkerhet, t.ex. lösenordshantering (korrekt hashing/verify), sessionssäkerhet (session hijacking) och CSRF, och har implementerat flera sådana skydd. |
| **Utvärderar sitt arbete och resultat** | Eleven lämnar in en enkel dokumentation som beskriver vad som har gjorts. | Eleven utvärderar sitt arbete med "några... omdömen" och kan förklara sina val av struktur och varför MVC-mönstret har följts. | Eleven utvärderar med "nyanserat" omdömen" och gör "välgrundade reflektioner" över sina designval, diskuterar alternativa lösningar (t.ex. `public/` vs `.htaccess`), reflekterar över säkerhetsaspekter och föreslår framtida förbättringar. |

Lycka till\!