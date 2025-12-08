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
- [Kom igång med Composer](https://getcomposer.org/doc/00-intro.md)