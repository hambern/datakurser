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

### 🗄️ Den stora utmaningen: Versionshantera databasen i ett team

En av de viktigaste anledningarna till att vi gör detta projekt i par är att ni ska få uppleva och lösa ett av de vanligaste problemen inom systemutveckling: **Koden och databasen måste hållas synkroniserade mellan utvecklarna.**

#### Problemet ni kommer att stöta på:
Om Person A bygger en ny funktion på branchen `feature/betyg` och lägger till en kolumn `rating` i sin databas och i sin PHP-kod:
- När Person B laddar ner koden via `git pull` kommer sidan att krascha med felmeddelandet: *`Column 'rating' not found`*.
- Varför? För att PHP-koden uppdaterades i Git, men Person B:s databas saknar den nya kolumnen!

#### Lösningen: "Gitta" databasens struktur (Schema & Migreringar)
I professionella team checkar man **alltid** in förändringarna i databasstrukturen i Git i samma commit och Pull Request som PHP-koden:

1. **Skilj på struktur och data:**
   - **Struktur (DDL):** `CREATE TABLE`, `ALTER TABLE` ska **ALLTID** checkas in i Git.
   - **Personliga lösenord:** `config.php` ska **ALDRIG** checkas in i Git (läggs i `.gitignore`).
   - **Aktiv databas med rader:** `database.sqlite` eller MySQL-datafiler ska **INTE** checkas in (läggs i `.gitignore`).

2. **Två sätt att versionshantera strukturen i ert repo:**
   - **Metod 1: Migreringsmapp (`migrations/`) — *Proffsmetoden* ⭐**
     Skapa en mapp som heter `migrations/` eller `sql/` i repot med numrerade SQL-filer:
     - `01_create_users.sql` (Skapar tabellen users)
     - `02_create_reviews.sql` (Skapar tabellen reviews)
     - `03_add_followers.sql` (Skapar tabellen user_followers)
     *När din kompis gör `git pull` ser hen direkt vilken SQL-fil som är ny och kör bara den i sin databas!*
   - **Metod 2: Samlad `database.sql`**
     Håll en uppdaterad `database.sql` i repots rot som alltid innehåller hela den aktuella tabellstrukturen.

3. **Testdata (`seed.sql`):**
   Skapa gärna en fil `seed.sql` med några fejkade testanvändare och testrecensioner så att ni båda snabbt kan nollställa och testa appen med samma förutsättningar.

---

#### Välj databaslösning för ert team:

- **Alternativ A: SQLite (Noll konfiguration & filbaserat)**
  SQLite sparar databasen i en lokal fil (`database.sqlite`).
  ```php
  $pdo = new PDO("sqlite:" . __DIR__ . "/database.sqlite");
  ```
  *Glöm inte att lägga `database.sqlite` i `.gitignore` och istället checka in era SQL-skript så ni inte får filkrockar!*

- **Alternativ B: MySQL med `config.php` (Klassiskt & branschstandard)**
  Ni har varsin databas på `student.oedu.se` (eller lokalt).
  - Skapa en mallfil `config.sample.php` i repot.
  - Lägg `config.php` i `.gitignore` så era personliga lösenord hålls hemliga.
  - Synka tabelländringar via era SQL-filer i Git.

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