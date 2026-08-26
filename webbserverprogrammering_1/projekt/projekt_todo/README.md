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

Läs och genomför följande lektioner och övningar innan du bygger ToDo-applikationen:
- 📖 **[The Odin Project: Git Basics & Branching](https://www.theodinproject.com/lessons/foundations-git-basics)** — Varför och hur man arbetar i *Feature Branches* (`git checkout -b feature/min-funktion`).
- 📖 **[The Odin Project: Relational Databases](https://www.theodinproject.com/lessons/nodejs-databases)** — Förstå hur primärnycklar (`PRIMARY KEY`) och främmande nycklar (`FOREIGN KEY`) skapar relationer mellan tabeller.
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