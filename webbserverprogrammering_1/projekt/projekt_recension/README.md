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

## 📚 Kunskapskrav & Vad ni behöver läsa på om

Läs och titta på följande avsnitt i **[Laracasts: PHP For Beginners](https://laracasts.com/series/php-for-beginners-2023-edition)** samt guider innan ni börjar bygga er gemensamma applikation:

### 🎬 Rekommenderade Laracasts-avsnitt (Hemläxa & Förberedelse):
- **Del 3: Notes Mini-Project**
  - [3.3 Introduction to Authorization](https://laracasts.com/episodes/2619) *(Vem har rätt att se och ändra data?)*
- **Del 5: Sessions and Authentication**
  - [5.1 PHP Sessions 101](https://laracasts.com/episodes/2679) *(Hur fungerar `$_SESSION`?)*
  - [5.2 Register a New User](https://laracasts.com/episodes/2702) *(Skapa användarkonton)*
  - [5.4 Manage Passwords Like This For The Remainder of Your Career](https://laracasts.com/episodes/2713) *(Säker lösenordshashning)*
  - [5.5 Log In and Log Out](https://laracasts.com/episodes/2714) *(In- och utloggning)*
- **Del 6: Refactoring Techniques**
  - [6.3 The PRG Pattern (and Session Flashing)](https://laracasts.com/episodes/2734) *(Post-Redirect-Get och felmeddelanden)*
  - [6.4 Flash Old Form Data to the Session](https://laracasts.com/episodes/2737) *(Behåll inmatad data vid valideringsfel)*

### 📖 Kompletterande guider:
- 📖 **[GitHub Docs: Collaborating with Pull Requests](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests)** — Steg-för-steg hur man skapar och granskar en PR på GitHub samt teamflöde.
- 📖 **[PHP: The Right Way — Säkerhet & Sessions](https://phptherightway.com/#security)** — Säker användarautentisering med `password_hash()`, `password_verify()` och `$_SESSION`.

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
Om Person A bygger en funktion på branchen `feature/betyg` och lägger till en kolumn `rating` i sin lokala MySQL-databas och i sin PHP-kod:
- När Person B hämtar koden via `git pull` kraschar applikationen med felmeddelandet: `Column 'rating' not found`.
- Orsaken är att PHP-koden uppdaterades i Git, men Person B:s databas saknar den nya kolumnen.

#### Lösningen: Versionshantera databasens struktur (Schema och Migreringar)
I professionella projekt versionshanterar man databasens **struktur (SQL-kod)** i Git i samma Pull Request som PHP-koden:

1. **Lösenord och konfiguration:**
   - Era personliga databasuppgifter till `student.oedu.se` (eller lokal server) ska **aldrig** checkas in i Git.
   - Skapa en fil `config.sample.php` i repot som mall.
   - Lägg den riktiga `config.php` i er `.gitignore`.

2. **Struktur (DDL) checkas in i Git:**
   - Varje gång en tabell eller kolumn skapas eller ändras sparas SQL-kommandot i repot.

**Två metoder att hantera SQL-filerna:**
- **Metod 1: Migreringsmapp (`migrations/`)**
  Skapa en mapp med numrerade SQL-filer som körs i tur och ordning:
  - `01_create_users.sql` (Skapar tabellen users)
  - `02_create_reviews.sql` (Skapar tabellen reviews)
  - `03_add_followers.sql` (Skapar tabellen user_followers)
  När en utvecklare gör `git pull` syns det direkt vilka nya SQL-filer som behöver köras i phpMyAdmin.
- **Metod 2: Samlad strukturfil (`database.sql`)**
  Håll en uppdaterad `database.sql` i repots rot som innehåller hela den aktuella tabellstrukturen.

**Testdata (`seed.sql`):**
Skapa gärna en fil `seed.sql` med några testanvändare och testrecensioner så att ni båda enkelt kan nollställa och testa applikationen under samma förutsättningar i phpMyAdmin.

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

| Aspekt / Betygsnivå | **Betyget E** | **Betyget C** | **Betyget A** |
| :--- | :--- | :--- | :--- |
| **1. Autentisering & Databasdesign** | Fungerande registrering och inloggning. Lösenord hashas med `password_hash()` och verifieras med `password_verify()`. Sessionshantering via `$_SESSION` håller användaren inloggad. | Välstrukturerade tabeller med relationer mellan användare och recensioner (En-till-Många). Kategorier och sortering på betyg eller datum fungerar. | Avancerad databasdesign med **Många-till-Många-relationer** (kopplingstabell för t.ex. följarflöde `user_followers` eller taggar). SQL-schema och testdata finns i repot. |
| **2. Webbsäkerhet & Auktorisering** | Applikationen skyddar mot grundläggande säkerhetshål. Inloggningsuppgifter exponeras inte i klartext. | **Auktoriseringskontroller** säkerställer att användare endast kan redigera/radera sina *egna* inlägg. Konsekventa Prepared Statements mot SQLi och `htmlspecialchars()` mot XSS. | Genomarbetad säkerhetsarkitektur: skydd mot sessionsstöld (`session_regenerate_id()`), tillämpning av PRG-mönstret (Post-Redirect-Get) och säker felhantering utan känsliga databasläckor. |
| **3. Teamflöde & Git-samarbete** | Båda personerna har bidragit till ett gemensamt GitHub-repository med källkod och databasexport (`.sql`). | Tydlig uppdelning av arbetet med **branches och GitHub Issues**. Databasens struktur hålls synkroniserad mellan utvecklarna via delade SQL-filer. | Professionellt teamflöde: Samtliga funktioner slås samman via **Pull Requests (PR)** med dokumenterade **Code Reviews** och godkännande från den andra parten innan merge. |