# Skapa en ToDo-applikation

### Syfte
Detta projekt syftar till att lära dig grunderna i databashantering och relationsdatabaser genom att bygga en stegvis mer avancerad ToDo-applikation. Du kommer att öva på att hantera enkla och komplexa databasoperationer, skapa och hantera relationer mellan tabeller samt förstå vikten av strukturerad databasdesign.

### Mål
Efter att ha slutfört projektet ska du kunna:
- Skapa och hantera enkla databastabeller.
- Använda SQL för att utföra grundläggande operationer som `SELECT`, `INSERT`, `UPDATE`, och `DELETE`.
- Skapa relationer mellan databastabeller och förstå deras syfte.
- Använda mer avancerade SQL-funktioner som `JOIN` och aggregeringsfunktioner.
- Versionshantera ditt arbete med Git, där varje steg i utvecklingen hanteras i en egen branch.

### Stegvis Utveckling

#### Steg 1: Grundläggande ToDo-applikation
- **Beskrivning:** Skapa en enkel ToDo-applikation där användare kan lägga till och visa uppgifter.
- **Tekniska aspekter:**
  - **Databas:** Skapa en tabell `tasks` med kolumnerna `id`, `title`, och `description`.
  - **SQL-operationer:** Använd `INSERT` för att lägga till nya uppgifter och `SELECT` för att visa dem.
  - **Frontend:** Skapa enkla HTML-formulär för att lägga till uppgifter och en lista för att visa dem.

#### Steg 2: Markera Uppgifter som Klara
- **Beskrivning:** Lägg till funktionalitet för att markera uppgifter som klara.
- **Tekniska aspekter:**
  - **Databas:** Lägg till en kolumn `completed` i `tasks`-tabellen för att hålla reda på om en uppgift är klar.
  - **SQL-operationer:** Använd `UPDATE` för att uppdatera statusen på en uppgift.
  - **Frontend:** Lägg till en checkbox eller knapp för att markera uppgifter som klara.

#### Steg 3: Kategorisera Uppgifter
- **Beskrivning:** Lägg till möjlighet att kategorisera uppgifter.
- **Tekniska aspekter:**
  - **Databasrelationer:** Skapa en tabell `categories` och lägg till en `category_id`-kolumn i `tasks`-tabellen för att skapa en en-till-många-relation.
  - **SQL-operationer:** Använd `JOIN` för att hämta och visa uppgifter tillsammans med deras kategorier.
  - **Frontend:** Lägg till en dropdown-meny i formuläret för att välja en kategori när en uppgift skapas.

#### Steg 4: Filtrera och Sortera Uppgifter
- **Beskrivning:** Lägg till funktionalitet för att filtrera och sortera uppgifter baserat på status och kategori.
- **Tekniska aspekter:**
  - **SQL-operationer:** Använd `WHERE`-klasuler för att filtrera uppgifter och `ORDER BY` för att sortera dem.
  - **Frontend:** Lägg till filter- och sorteringsfunktioner på sidan så att användaren kan visa uppgifter utifrån status och kategori.

#### Steg 5: Användarhantering
- **Beskrivning:** Implementera användarhantering så att varje användare kan logga in och hantera sina egna uppgifter.
- **Tekniska aspekter:**
  - **Databasrelationer:** Skapa en `users`-tabell och koppla uppgifter till användare med en `user_id`-kolumn i `tasks`-tabellen (en-till-många-relation).
  - **SQL-operationer:** Använd `JOIN` för att hämta och visa uppgifter som tillhör den inloggade användaren.
  - **Säkerhet:** Använd `password_hash` för att lagra lösenord säkert och skapa inloggnings- och registreringsformulär.
  - **Frontend:** Skapa inloggnings- och registreringssidor och se till att endast inloggade användare kan se och hantera sina uppgifter.

### Ramverk och tekniker
- **PHP:** Använd PHP för att hantera server-side logik, databasanrop och rendera dynamiskt innehåll.
- **MySQL:** Använd MySQL för att lagra och hämta data och hantera relationer mellan tabeller.
- **HTML och CSS:** Använd HTML för att skapa gränssnittet och CSS för att styla applikationen.
- **Git:** Använd Git för att hantera versionshantering och skapa branches för varje steg i projektet.

### Projektstruktur och Arbetsflöde
Varje steg i utvecklingen motsvarar en ny branch i Git. När ett steg är färdigutvecklat och testat, mergas det in i main-branchen. Detta ger praktisk erfarenhet av versionshantering och möjliggör en tydlig progression i projektet.

### Sammanfattning
Genom att följa denna progression kommer du att bygga en fullt fungerande ToDo-applikation, samtidigt som du utvecklar dina färdigheter i databashantering, SQL, och systemdesign. Projektet ger en stegvis introduktion till viktiga koncept inom webbutveckling och relationsdatabaser, och lägger en stark grund för mer avancerade projekt i framtiden.