# Projektuppgift: Att-göra-lista (ToDo)

## Syfte
Du ska bygga en klassisk ToDo-applikation. Detta projekt fokuserar på att fördjupa din förståelse för **relationsdatabaser** (en-till-många) och strukturerad SQL. Du kommer också att träna på att använda **Git branches** för att hålla isär olika funktioner under utvecklingen.

## Mål
Efter avslutat projekt ska du kunna:
- **CRUD:** Skapa, läsa, uppdatera och radera data via PHP.
- **Relationer:** Koppla ihop tabeller (t.ex. Uppgifter och Kategorier) med `JOIN`.
- **Git:** Använda "Feature Branching" (en branch per funktion).
- **Filtrering/Sortering:** Skriva SQL-frågor med `WHERE` och `ORDER BY` baserat på användarens val.

---

## 📚 Kunskapskrav & Vad du behöver läsa på om

Läs och titta på följande avsnitt i **[Laracasts: PHP For Beginners](https://laracasts.com/series/php-for-beginners-2023-edition)** samt övningar innan du bygger ToDo-applikationen:

### 🎬 Rekommenderade Laracasts-avsnitt (Hemläxa & Förberedelse):
- **Del 3: Notes Mini-Project**
  - [3.1 Database Tables and Indexes](https://laracasts.com/episodes/2608) *(Primärnycklar och index)*
  - [3.2 Render the Notes and Note Page](https://laracasts.com/episodes/2609) *(Hämta och lista data)*
  - [3.4 Programming is Rewriting](https://laracasts.com/episodes/2620) *(Refaktorisering och kodförbättring)*
  - [3.7 Intro to Form Validation](https://laracasts.com/episodes/2629) *(Validera inmatning)*
  - [3.8 Extract a Simple Validator Class](https://laracasts.com/episodes/2633) *(Återanvändbar valideringsklass)*
- **Del 4: Project Organization**
  - [4.8 Updating With PATCH Requests](https://laracasts.com/episodes/2675) *(Uppdatera status på uppgifter)*

### 📖 Kompletterande guider & SQL-träning:
- 📖 **[GitHub Docs: About Branches](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/proposing-changes-to-your-work-with-pull-requests/about-branches)** — Varför och hur man arbetar i *Feature Branches* (`git checkout -b feature/min-funktion`).
- 📖 **[PHP: The Right Way — Interagera med databaser & MVC-struktur](https://phptherightway.com/#databases_interacting_title)** — Exempel och resonemang kring hur du delar upp din kod i Model, View och Controller (särskilt relevant för högre betyg om du inte använder ett ramverk).
- 🎯 **[SQLBolt: Queries with JOINs (Lektion 6–7)](https://sqlbolt.com/lesson/select_queries_with_joins)** — Praktiska interaktiva övningar i att koppla ihop tabeller via `INNER JOIN` och `LEFT JOIN`.
- 🕵️‍♂️ **[SQL Murder Mystery](https://mystery.knightlab.com/)** — Ett spännande detektivspel där du löser ett mord genom att skriva SQL-queries med `WHERE`, `JOIN` och filter!

---

## 💬 Hur pratar Frontend och Backend med varandra?

I det här projektet möts din webbläsare (frontend) och servern (backend). Det finns framför allt tre sätt de pratar ihop sig på:

1. 🔍 **GET – "Hämta och visa!"**
   - Används när du bara vill be servern om data utan att ändra något.
   - **I ToDo-appen:** När du klickar på en länk för att filtrera (`index.php?filter=Skola`) eller sortera (`index.php?sort=date`).
   ```php
   // Ta emot med $_GET:
   $filter = $_GET['filter'] ?? 'Alla';
   // Använd i din SQL: SELECT * FROM tasks WHERE category = ?
   ```

2. 📬 **POST – "Här är data, spara detta!"**
   - Används när du skickar formulärdata som förändrar databasen.
   - **I ToDo-appen:** När du fyller i formuläret och klickar *"Skapa uppgift"* (`<form method="POST">`). Hela sidan laddas om och PHP sparar uppgiften.
   ```php
   // Ta emot med $_POST och skicka vidare:
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $title = $_POST['title'];
       // Spara i databasen...
       header('Location: index.php'); // Ladda om listan rent och snyggt!
       exit;
   }
   ```

3. ⚡ **AJAX / `fetch()` – Den smidiga genvägen i bakgrunden (Bonus/Kul idé!)**
   - Vad händer om du bockar i en checkbox för *"Klar"* och inte vill att hela sidan ska ladda om och blinka till?
   - Då kan lite JavaScript i webbläsaren skicka en signal i smyg till servern med `fetch()` och bocka av uppgiften direkt på skärmen!
   ```javascript
   // JavaScript i webbläsaren (skickar ID och lyssnar på svaret):
   fetch('complete.php', {
       method: 'POST',
       headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
       body: 'id=' + taskId
   })
   .then(response => response.json())
   .then(data => {
       if (data.success) {
           console.log('Klarmarkerad!');
       }
   });
   ```
   ```php
   // complete.php tar emot ID, uppdaterar databasen och svarar med JSON:
   $taskId = $_POST['id'];
   // UPDATE tasks SET completed_at = NOW() WHERE id = ?
   header('Content-Type: application/json');
   echo json_encode(['success' => true]);
   ```

> 💡 **Tips för projektet:** Börja enkelt med vanliga **GET-** och **POST-formulär**! Att använda `fetch()` för att bocka av uppgifter är helt frivilligt men ett kul sätt att testa hur moderna webbappar fungerar.

---

## Arbetsgång (Feature Branching)
I detta projekt ska du inte jobba direkt i `main`-branchen. För varje steg nedan ska du:
1.  Skapa en ny branch: `git checkout -b feature/kategorier`
2.  Lösa uppgiften.
3.  Merg:a in branchen till main: `git checkout main` -> `git merge feature/kategorier`.

---

## Steg för Steg

### Steg 1: Grundläggande ToDo
*Branch: `feature/basic-todo`*
-   [ ] Skapa tabellen `tasks` (`id`, `title`, `description`).
-   [ ] Skapa ett formulär för att lägga till uppgifter (`INSERT`).
-   [ ] Lista alla uppgifter på sidan (`SELECT`).
-   [ ] Lägg till en knapp för att ta bort en uppgift (`DELETE`).

### Steg 2: Status (Klar/Ej klar)
*Branch: `feature/mark-complete`*
-   [ ] Lägg till kolumnen `completed_at` (DATETIME) i `tasks`.
-   [ ] Lägg till en checkbox vid varje uppgift.
-   [ ] När checkboxen klickas: Uppdatera `completed_at` till `NOW()` (eller `NULL` om man avmarkerar).
-   [ ] Visa "klara" uppgifter som överstrukna eller gråade.

### Steg 3: Kategorier (Relationer)
*Branch: `feature/categories`*
-   [ ] Skapa tabellen `categories` (`id`, `name`). Lägg in några testkategorier (Jobb, Skola, Fritid).
-   [ ] Lägg till `category_id` i `tasks`-tabellen.
-   [ ] Uppdatera formuläret: Låt användaren välja kategori via en `<select>`-lista.
-   [ ] Uppdatera listan: Visa vilken kategori varje uppgift tillhör (använd `JOIN` i SQL-frågan).

### Steg 4: Filtrering & Sortering
*Branch: `feature/filters`*
-   [ ] Lägg till länkar/knappar för att sortera listan:
    -   Sortera på Datum (Nyast/Äldst).
    -   Sortera på Kategori.
-   [ ] Lägg till filter: "Visa bara uppgifter i kategorin 'Skola'". (Använd `WHERE` i SQL).

### Steg 5: Användare (Valfritt / A-nivå)
*Branch: `feature/users`*
-   [ ] Koppla uppgifter till användare.
-   [ ] Kräver inloggning för att se och redigera *sina* uppgifter.
-   [ ] Se till att man inte kan se andras uppgifter via URL-manipulation.

---

## Inlämning
Lämna in länken till ditt GitHub-repository.
Repot ska innehålla:
1.  Källkod.
2.  SQL-fil för databasen.
3.  En kort `README.md` om hur man kör projektet.

---

## Bedömning

| Aspekt / Betygsnivå | **Betyget E** | **Betyget C** | **Betyget A** |
| :--- | :--- | :--- | :--- |
| **1. CRUD & Databasrelationer (SQL/PDO)** | Applikationen klarar grundläggande CRUD: skapa uppgifter (`INSERT`), visa dem (`SELECT`) och ta bort dem (`DELETE`). Data sparas permanent i MySQL. | Full CRUD inklusive statusändring (`UPDATE`). Flera tabeller används (t.ex. `tasks` och `categories`) med relationer via främmande nycklar och `INNER JOIN` eller `LEFT JOIN`. | Avancerad SQL med dynamisk filtrering och sortering (`WHERE`, `ORDER BY`, `JOIN`) baserat på användarval. Korrekt indexering och kaskadborttagning (`ON DELETE CASCADE`) vid behov. |
| **2. Säkerhet & Validering** | Fungerande PHP-kod med databasanslutning via PDO. Grundläggande kontroll av inmatning. | **Prepared Statements** används konsekvent vid alla databasfrågor som tar användardata. Validering kontrollerar att uppgifter inte skapas utan titel. | Omfattande validering och skydd mot XSS via `htmlspecialchars()`. God användarupplevelse och tydliga felmeddelanden vid felaktig inmatning. |
| **3. Git & Feature Branching** | Projektet är versionshanterat med Git och uppladdat på GitHub med databasens `.sql`-fil. | **Feature Branching** har använts för minst en funktion (`git checkout -b`, merge till `main`). Tydliga commit-meddelanden som beskriver vad som ändrats. | Konsekvent och professionell användning av branches för varje ny feature (`feature/kategorier`, `feature/status` etc.). Ren Git-historik och tydlig `README.md` med installationsanvisningar. |
| **4. Struktur & Kodkvalitet** | Grundläggande läsbar kod med fungerande struktur. | Koden är strukturerad och prydlig med god separation mellan logik och presentation (t.ex. uppdelad i funktioner eller separata filer). | Koden är ren, välstrukturerad och på ett rimligt sätt uppdelad enligt **MVC** (Model, View, Controller) där databasfrågor, presentationsvyer och logik hålls åtskilda (frivilligt om man använder ren PHP eller ett ramverk som t.ex. Flight). |

## Tips
-   **Join:** `SELECT tasks.title, categories.name FROM tasks JOIN categories ON tasks.category_id = categories.id`
-   **Sortering:** `SELECT * FROM tasks ORDER BY created_at DESC`
-   **MVC-arkitektur:** Se [PHP: The Right Way — Interagera med databaser](https://phptherightway.com/#databases_interacting_title) för inspiration om hur du strukturerar Model, View och Controller i ren PHP. (Vill du hellre använda skolans [Flight-boilerplate](https://github.com/hambern/boilerplate-flight) är det också tillåtet).