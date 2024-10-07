# Skapa en recensionsapplikation i Laravel

### Syfte
Detta projekt syftar till att ge dig en grundlig förståelse för modern webbutveckling genom att gradvis bygga en recensionsapplikation med hjälp av Laravel. Projektet kommer att utvecklas över flera steg, där du lär dig att hantera databasoperationer, implementera användarhantering och skapa en dynamisk och användarvänlig applikation. [https://laracasts.com/](Laracasts) är en fantastisk resurs när du ska lära dig Laravel. Så lägg gärna några timmar där.

### Mål
Efter att ha slutfört projektet ska du kunna:
- Använda Laravel för att bygga en fullständig webbapplikation.
- Arbeta med Blade för att skapa dynamiska vyer och Eloquent för att hantera databasrelationer.
- Implementera användarhantering med säker datalagring och autentisering.
- Strukturera din kod enligt MVC-principen och använda Git för versionshantering.
- Kunna jobba i grupp och använda Git för versionshantering.

### Stegvis Utveckling

#### Steg 1: Grundläggande recensionsapplikation
- **Beskrivning:** Skapa en enkel applikation där användare kan lägga till en sak och ge den ett betyg (1-5).
- **Tekniska aspekter:**
  - **GitLab:** Skapa ett gemensamt Git-repository genom att en av er delar repositoryt med den andre.
  - **Laravel:** Installera och konfigurera ett Laravel-projekt. Använd Blade för att skapa vyer.
  - **Databasoperationer:** Använd Eloquent för att utföra `INSERT` och `SELECT` operationer.
  - **Databasstruktur:** Skapa en enkel tabell för att lagra saker och deras betyg.

#### Steg 2: Kategorisering av grejer
- **Beskrivning:** Lägg till kategorier så att varje sak kan tillhöra en kategori som filmer, böcker eller spel.
- **Tekniska aspekter:**
  - **Databasrelationer:** Skapa en en-till-många-relation mellan tabellerna för saker och kategorier.
  - **Eloquent:** Definiera relationerna mellan modellerna för att hantera kategorier och saker.
  - **Funktioner:** Implementera funktionalitet för att lägga till saker i specifika kategorier och visa dem sorterat.

#### Steg 3: Topplistor
- **Beskrivning:** Lägg till funktionalitet för att visa topplistor baserat på betyg inom varje kategori.
- **Tekniska aspekter:**
  - **Databasoperationer:** Använd Eloquent och aggregerade funktioner för att beräkna och visa snittbetyg.
  - **Blade:** Skapa dynamiska vyer som presenterar topplistor för olika kategorier.

#### Steg 4: Användarhantering
- **Beskrivning:** Introducera användarhantering så att varje användare kan logga in och skriva egna recensioner.
- **Tekniska aspekter:**
  - **Autentisering:** Implementera Laravels inbyggda system för användarautentisering och registrering.
  - **Databasrelationer:** Skapa relationer mellan användare och recensioner (en-till-många-relation).
  - **Säkerhet:** Se till att användardata lagras säkert med kryptering.

#### Steg 5: Följarsystem
- **Beskrivning:** Implementera ett system där användare kan följa varandra och se varandras senaste recensioner.
- **Tekniska aspekter:**
  - **Databasrelationer:** Implementera många-till-många-relationer mellan användare och följare.
  - **Eloquent:** Hantera relationer och presentera följarnas aktivitet i en dynamisk feed.

### Ramverk och tekniker
- **Laravel:** Bygg hela applikationen i Laravel, från databasinteraktion till användargränssnitt.
- **Blade:** Använd Blade för att skapa dynamiska och återanvändbara vyer.
- **Eloquent:** Hantera databasen och relationer med Eloquent ORM.
- **Git:** Använd Git för versionshantering och skapa gärna branches för varje steg i utvecklingen.

### Projektstruktur och arbetsflöde
Varje steg i utvecklingen bör motsvara en ny branch i Git. När ett steg är färdigutvecklat och testat, mergas det in i main-branchen. Detta ger dig praktisk erfarenhet av versionshantering och möjliggör en tydlig progression i ditt projekt.

### Sammanfattning
Genom att följa denna progression kommer du att utveckla en omfattande recensionsapplikation, från enkel till komplex. Projektet ger dig möjlighet att stegvis fördjupa dina kunskaper i Laravel, databashantering och systemdesign, vilket ger en stark grund i webbutveckling.