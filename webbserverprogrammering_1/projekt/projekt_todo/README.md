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
- 🎯 **[SQLBolt: Queries with JOINs (Lektion 6–7)](https://sqlbolt.com/lesson/select_queries_with_joins)** — Praktiska interaktiva övningar i att koppla ihop tabeller via `INNER JOIN` och `LEFT JOIN`.
- 🕵️‍♂️ **[SQL Murder Mystery](https://mystery.knightlab.com/)** — Ett spännande detektivspel där du löser ett mord genom att skriva SQL-queries med `WHERE`, `JOIN` och filter!

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

| Nivå | Kriterier |
| :--- | :--- |
| **E** | Applikationen fungerar (Lägga till, ta bort, visa). Koden är enkel men fungerande. Git används (minst en commit). |
| **C** | Kategorier fungerar (Relationer). Du har använt `JOIN` i SQL. Du har använt branches för minst en funktion. Filtrering fungerar. |
| **A** | Koden är ren och säker (Prepared Statements). Användarhantering eller mycket avancerad filtrering finns. Git-historiken är snygg och strukturerad med flera branches. |

## Tips
-   **Join:** `SELECT tasks.title, categories.name FROM tasks JOIN categories ON tasks.category_id = categories.id`
-   **Sortering:** `SELECT * FROM tasks ORDER BY created_at DESC`