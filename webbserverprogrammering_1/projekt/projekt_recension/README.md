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
    -   Er reflektion kring samarbetet (Hur fungerade Git? Hur delade ni upp arbetet?).
3.  En SQL-fil (`database.sql`) för att återskapa databasen.

---

## Bedömning

| Nivå | Kriterier |
| :--- | :--- |
| **E** | Ni har en fungerande applikation med inloggning och möjlighet att skriva recensioner. Koden är versionshanterad men commits kan vara ostrukturerade. |
| **C** | Applikationen har kategorier och sortering. Koden är uppdelad och strukturerad. Ni använder Git med branches och Issues. God databasdesign. |
| **A** | Applikationen har sociala funktioner (Följa, Flöden). Koden är "Clean" och säker (skydd mot SQL-injection/XSS). Ni har ett tydligt Git-flöde med Code Reviews (Pull Requests). |