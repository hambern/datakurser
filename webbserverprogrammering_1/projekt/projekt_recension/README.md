# Projektuppgift: Recensionsapplikation

## Syfte
I detta projekt ska ni arbeta i par för att bygga en komplett webbapplikation för recensioner. Syftet är att efterlikna ett professionellt arbetsflöde med versionshantering, kodgranskning och gemensamt ansvar för en kodbas. Ni kommer att bygga en plattform där användare kan registrera sig, skriva recensioner och interagera med varandra.

## Mål
Efter avslutat projekt ska ni kunna:
- **Samarbete:** Arbeta effektivt i par med delad kodbas (Git).
- **Fullstack:** Koppla ihop frontend, backend (PHP) och databas (MySQL).
- **Databasdesign:** Hantera komplexa relationer (En-till-Många, Många-till-Många).
- **Funktionalitet:** Bygga funktioner som "Följa användare", "Topplistor" och "Kategorisering".

---

## Arbetsmetod & Verktyg

Ni arbetar två och två mot **samma GitHub-repository**, men kör koden på **varsin lokal miljö** (eller egen mapp på servern).

### Git-flöde
1.  **Repository:** Skapa ett gemensamt repo på GitHub. Bjud in varandra som "Collaborators" (under *Settings -> Collaborators*).
2.  **Branches:** Arbeta aldrig direkt i `main`. Skapa en ny branch för varje funktion, t.ex. `feature/login` eller `feature/reviews`.
3.  **Pull Requests:** När en funktion är klar, skapa en Pull Request (PR) på GitHub. Den andra personen ska granska koden innan den slås ihop (mergas) med huvudkoden.
4.  **Issues:** Använd "Issues" i GitHub för att fördela uppgifter ("Vem gör vad?").

### Versionshantering av databasen i ett team

En central del i detta parprojekt är att uppleva och hantera ett vanligt problem inom systemutveckling: **Koden och databasen måste hållas synkroniserade mellan utvecklarna.**

#### Problemet
Om Person A bygger en funktion på branchen `feature/betyg` och lägger till en kolumn `rating` i sin databas och i sin PHP-kod:
- När Person B hämtar koden via `git pull` kraschar applikationen med felmeddelandet: `Column 'rating' not found`.
- Orsaken är att PHP-koden uppdaterades i Git, men Person B:s databas saknar den nya kolumnen.

#### Kan man inte bara checka in database.sqlite direkt i Git?
Det är tekniskt möjligt att checka in en `.sqlite`-fil i Git, men det leder snabbt till problem:
1. **Binära merge-konflikter:** SQLite är en binär fil. Om båda personerna lägger till testdata lokalt och försöker slå ihop sina grenar uppstår en konflikt som Git inte kan lösa automatiskt. Man tvingas då kasta bort den ena personens ändringar.
2. **Repots storlek:** Git sparar en ny kopia av hela databasfilen vid varje commit, vilket gör versionshistoriken tung och ineffektiv.

Därför versionshanterar man i professionella projekt **databasens struktur (SQL-kod)** snarare än själva datafilen.

#### Lösningen: Versionshantera strukturen (Schema och Migreringar)
1. **Struktur (DDL):** `CREATE TABLE` och `ALTER TABLE` ska alltid checkas in i Git.
2. **Lösenord och konfiguration:** `config.php` ska alltid läggas i `.gitignore`.
3. **Aktiva databasfiler:** `database.sqlite` ska läggas i `.gitignore`.

**Två metoder att hantera SQL i repot:**
- **Metod 1: Migreringsmapp (`migrations/`)**
  Skapa en mapp med numrerade SQL-filer som körs i tur och ordning:
  - `01_create_users.sql` (Skapar tabellen users)
  - `02_create_reviews.sql` (Skapar tabellen reviews)
  - `03_add_followers.sql` (Skapar tabellen user_followers)
  När en utvecklare gör `git pull` syns det direkt vilka nya SQL-filer som behöver köras.
- **Metod 2: Samlad strukturfil (`database.sql`)**
  Håll en uppdaterad `database.sql` i repots rot som innehåller hela den aktuella tabellstrukturen.

**Testdata (`seed.sql`):**
Skapa gärna en fil `seed.sql` med några testanvändare och testrecensioner så att ni båda enkelt kan nollställa och testa applikationen under samma förutsättningar.

---

#### Val av databasteknik för projektet

- **Alternativ A: SQLite (Filbaserad utan extern server)**
  SQLite sparar databasen i en lokal fil (`database.sqlite`).
  ```php
  $pdo = new PDO("sqlite:" . __DIR__ . "/database.sqlite");
  ```
  *Kom ihåg att lägga `database.sqlite` i `.gitignore` och istället checka in SQL-skripten.*

- **Alternativ B: MySQL med config.php (Klassisk klient/server)**
  Ni har varsin databas på `student.oedu.se` (eller lokalt).
  - Skapa en mallfil `config.sample.php` i repot.
  - Lägg `config.php` i `.gitignore` så personliga inloggningsuppgifter inte sprids.
  - Synkronisera tabelländringar via era SQL-filer.

---

## Kravspecifikation (Steg för Steg)

Projektet är uppdelat i steg. Se till att varje steg fungerar innan ni går vidare.

### Steg 1: Grunden & Användare
-   [ ] **Planering:** Gör en enkel ER-skiss över databasen. Fördela uppgifter.
-   [ ] **Git-setup:** Initiera repot och bjud in varandra. Skapa `README.md`.
-   [ ] **Användarkonton:** System för registrering och inloggning (säker lösenordshantering!).
-   [ ] **Databas:** Tabell för `users`.

### Steg 2: Recensioner (Core)
-   [ ] **Skapa recension:** Inloggade användare ska kunna recensera "saker" (t.ex. filmer, produkter).
-   [ ] **Visa recensioner:** En startsida som listar recensioner.
-   [ ] **Databas:** Tabell för `items` (det som recenseras) och `reviews`. Koppla recensioner till både *sak* och *användare*.

### Steg 3: Kategorier & Sortering
-   [ ] **Kategorier:** Dela in sakerna i kategorier (t.ex. "Skräck", "Komedi").
-   [ ] **Filtrering:** Användare ska kunna klicka på en kategori för att bara se saker i den.
-   [ ] **Sortering:** Sortera listor på t.ex. "Högsta betyg" eller "Senast tillagd".

### Steg 4: Sociala Funktioner (Advanced)
-   [ ] **Följa:** Användare ska kunna följa andra recensenter. (Många-till-Många relation: `user_followers`).
-   [ ] **Personligt flöde:** En sida ("Mitt flöde") som bara visar recensioner från personer man följer.
-   [ ] **Topplistor:** Visa "Mest aktiva användare" eller "Högst rankade filmer".

### Steg 5: Extra (Valfritt / För högre betyg)
-   [ ] **Kommentarer:** Kunna kommentera på andras recensioner.
-   [ ] **Meddelanden:** Skicka privata meddelanden mellan användare.
-   [ ] **Admin-panel:** Gränssnitt för att moderera/ta bort olämpliga inlägg.

---

## Inlämning
Lämna in länken till ert **GitHub-repository**.
Se till att repot innehåller:
1.  All källkod.
2.  En `README.md` med:
    -   Beskrivning av projektet.
    -   Instruktioner för hur man installerar/kör det (t.ex. databasinställningar).
    -   Er reflektion kring samarbetet (Hur fungerade Git? Hur delade ni upp arbetet? Hur hanterade ni databassynkroniseringen?).
3.  Databasfiler: En samlad SQL-fil (`database.sql`) eller en mapp med SQL-migreringar (`migrations/`), samt gärna `seed.sql` för testdata.

---

## Bedömning

| Nivå | Kriterier |
| :--- | :--- |
| **E** | Ni har en fungerande applikation med inloggning och möjlighet att skriva recensioner. Koden och databasstrukturen är versionshanterade. |
| **C** | Applikationen har kategorier och sortering. Koden är uppdelad och strukturerad. Ni använder Git med branches och Issues. Databasstrukturen är tydligt versionshanterad via SQL-filer (`database.sql` eller `migrations/`). God databasdesign. |
| **A** | Applikationen har sociala funktioner (Följa, Flöden). Koden är "Clean" och säker (skydd mot SQL-injection/XSS). Ni har ett professionellt Git-flöde med Code Reviews (Pull Requests) där databasförändringar har checkats in i samma PR som motsvarande kodändringar. |