# Skapa en recensionsapplikation

## Syfte

Detta projekt syftar till att ge dig en grundlig förståelse för modern webbutveckling genom att gradvis bygga en recensionsapplikation. Projektet kommer att utvecklas i flera steg, där du lär dig att hantera databasoperationer, implementera användarhantering och skapa en dynamisk och användarvänlig applikation. Genom att arbeta praktiskt och strukturerat får du insikt i hela utvecklingsprocessen, från planering och arkitektur till implementering och lansering. Du kommer att lära dig hur man skapar stabil och säker kod, samt hur man integrerar olika delar av en applikation till en välfungerande helhet.

Projektet hjälper dig att förstå olika aspekter av webbteknologi, inklusive back-end, front-end, databasrelationer och autentisering. Genom att arbeta tillsammans med en partner får du även värdefull erfarenhet av samarbete, vilket är en viktig del av moderna arbetsflöden. Att bygga en recensionsapplikation ger dig möjlighet att se hur en fullständig produkt utvecklas från grunden, med alla dess komponenter som tillsammans skapar en intuitiv och kraftfull användarupplevelse.

## Mål

Efter att ha slutfört projektet ska du kunna:

- Bygga en fullständig webbapplikation från grunden, med funktioner för recensioner och betygsättning.
- Implementera användarhantering med autentisering och säker datalagring, vilket innebär att användarna kan registrera sig, logga in och skapa personliga recensioner på ett säkert sätt.
- Använda Git effektivt för versionshantering, inklusive att arbeta med branches, lösa konflikter och hålla kodbasen organiserad.
- Arbeta i par och kommunicera effektivt för att planera, implementera och testa era funktioner.
- Använda ett front-end-ramverk som Bootstrap eller motsvarande för att skapa en responsiv och användarvänlig design som fungerar på alla enheter.
- Förstå hur man bygger och hanterar relationer mellan olika databasobjekt för att skapa en dynamisk och komplex datamodell.

## Samarbetsupplägg

Ni ska arbeta i par och använda samma kodbas, men på varsitt eget system. Det betyder att:

- **Person A** ska arbeta med programmet på sin egen server och databas.
- **Person B** ska arbeta med samma program på sin egen server och databas.
- Ni behöver ha god kommunikation och planering, och Git blir ett verktyg för att synka er kod.

Detta upplägg ställer krav på noggrann versionshantering och att ni kommunicerar tydligt om era förändringar. Det är viktigt att ni använder Git på ett strukturerat sätt för att säkerställa att era kodändringar enkelt kan integreras utan att orsaka konflikter. Ni bör också dokumentera era ändringar löpande, både för att underlätta för varandra och för att ge er själva en tydlig översikt över projektets framsteg.

Genom att arbeta på detta sätt får ni erfarenhet av att planera och genomföra ett projekt tillsammans, vilket innefattar att lösa problem, dela upp arbetsuppgifter och till slut integrera era individuella bidrag till en sammanhängande produkt.

## Stegvis utveckling

### Steg 1: Skapa en projektplan

- **Beskrivning:** Börja med att skapa en projektplan där ni fördelar uppgifter mellan varandra och gör en tidsplanering för projektet. Detta är viktigt för att säkerställa att ni båda har en klar uppfattning om arbetsfördelningen och för att undvika onödiga konflikter eller missförstånd längre fram.
- **Tekniska aspekter:**
  - **Arbetsuppgifter:** Fördela uppgifterna sinsemellan så att båda bidrar till alla delar av projektet. Detta kan inkludera specifika områden som front-end, back-end, databas eller testning.
  - **Tidsplanering:** Skapa en tidsplanering som bryter ner varje steg i projektet till mindre delmoment och sätter upp milstolpar. Detta ger er en tydlig struktur och hjälper till att hålla projektet på rätt spår.
  - **Dokumentation:** Dokumentera uppgiftsfördelningen och tidsplaneringen i en README.md-fil i projektets rotkatalog. Detta gör det till en del av projektets repository, vilket gör det enkelt att referera till och justera vid behov under projektets gång.
  - **GitLab:** Skapa ett gemensamt Git-repository, där en av er delar repositoryt med den andra. Detta repository ska innehålla README.md-filen ni skapat. Att dela ett repository är en bra övning i hur man hanterar gemensam kod på ett effektivt sätt.

### Steg 2: Användarhantering

- **Beskrivning:** Börja med att implementera användarhantering så att varje användare kan logga in och skriva recensioner. Detta är grunden för hela applikationen eftersom varje funktion senare kommer att vara kopplad till användarnas konton.
- **Tekniska aspekter:**
  - **Autentisering:** Implementera autentisering och registrering för användare. Användare ska kunna skapa ett konto och logga in för att få tillgång till funktionalitet som att skriva recensioner.
  - **Databasrelationer:** Skapa relationer mellan användare och recensioner (en-till-många). Varje användare ska kunna ha flera recensioner knutna till sitt konto, vilket kräver en tydlig databasstruktur som hanterar denna relation.
  - **Säkerhet:** Implementera metoder för att lagra lösenord och känslig användarinformation på ett säkert sätt. Detta inkluderar att använda hash-funktioner och se till att ingen känslig data exponeras direkt.

### Steg 3: Grundläggande recensionsapplikation

- **Beskrivning:** Skapa en enkel applikation där användare kan lägga till en sak och ge den ett betyg (1-5). Detta är kärnan i recensionssystemet och tillåter användare att bidra med sin åsikt.
- **Tekniska aspekter:**
  - **Kodstruktur:** Bygg en enkel grundstruktur för applikationen. Denna struktur kommer att inkludera grundläggande komponenter som vyer, modeller och kontrollfunktioner, som alla bidrar till en överskådlig och välorganiserad kodbas.
  - **Databasoperationer:** Implementera grundläggande databasoperationer för att lagra och hämta recensioner. Användaren ska kunna lägga till nya recensioner och se en lista över alla recensioner som tidigare har lagts till.

### Steg 4: Kategorisering av saker

- **Beskrivning:** Lägg till möjligheten att kategorisera varje sak som filmer, böcker eller spel. Detta gör det lättare för användarna att hitta de saker de är intresserade av att recensera eller läsa om.
- **Tekniska aspekter:**
  - **Databasrelationer:** Skapa en en-till-många-relation mellan kategorier och saker. Detta innebär att varje sak hör till en viss kategori, och du kommer att behöva uppdatera databasen för att hantera denna relation.
  - **Funktionalitet:** Använd relationerna för att kunna visa saker sorterade efter kategori. Användaren ska kunna välja en specifik kategori och se en lista över alla saker som finns inom den kategorin.
  - **Dynamiska vyer:** Skapa vyer som dynamiskt kan visa saker baserat på användarens val av kategori. Detta hjälper till att göra applikationen mer flexibel och användarvänlig.

### Steg 5: Topplistor

- **Beskrivning:** Lägg till topplistor baserat på betyg inom varje kategori. Detta hjälper användare att snabbt se de mest uppskattade sakerna inom varje kategori.
- **Tekniska aspekter:**
  - **Databasoperationer:** Använd aggregerade funktioner för att skapa dynamiska topplistor. Detta kan innefatta att räkna ut medelbetyg eller hitta de högst betygsatta sakerna.
  - **Vyer:** Presentera topplistorna på ett tydligt och tilltalande sätt, så att användarna enkelt kan navigera och hitta intressanta saker. Använd Bootstrap eller liknande för att skapa en attraktiv och lättnavigerad layout.
  - **Filtrering och sortering:** Implementera filtrerings- och sorteringsmöjligheter så att användaren kan se topplistor baserade på olika kriterier, till exempel senaste recensioner eller högsta betyg.

### Steg 6: Följarsystem

- **Beskrivning:** Användare ska kunna följa varandra och se varandras senaste recensioner. Detta lägger till en social dimension till applikationen och gör det mer engagerande.
- **Tekniska aspekter:**
  - **Relationer:** Implementera en många-till-många-relation mellan användare för att hantera följarsystemet. Detta innebär att varje användare ska kunna följa flera andra användare, och själv bli följd av flera.
  - **Feed:** Skapa en feed som visar aktivitet från användarens följare. Detta kan inkludera nya recensioner eller betyg som användarens följare har lagt till, vilket hjälper till att hålla användarna engagerade och informerade om vad som händer.
  - **Notifikationer:** Implementera ett enkelt notifikationssystem så att användare får meddelanden när någon de följer har publicerat en ny recension eller betygsatt en sak.

### Steg 7: Internt meddelandesystem (Valfritt)

- **Beskrivning:** Lägg till ett internt meddelandesystem där användare kan skicka privata meddelanden till varandra. Detta ger en ytterligare social dimension till applikationen och möjliggör direkt kommunikation mellan vänner.
- **Tekniska aspekter:**
  - **Databasrelationer:** Skapa en ny tabell för att hantera meddelanden mellan användare. Varje meddelande ska vara kopplat till en avsändare och en mottagare, vilket kräver en tydlig databasstruktur.
  - **Meddelandefunktion:** Implementera funktioner för att skicka, läsa och svara på meddelanden. Användarna ska kunna se sina konversationer på ett användarvänligt sätt.
  - **UI:** Bygg ett enkelt och intuitivt gränssnitt för meddelandesystemet. Använd Bootstrap eller liknande ramverk för att skapa en tydlig layout som gör det enkelt för användare att interagera med sina vänner.

## Projektstruktur och arbetsflöde

Det kan vara enklare att arbeta med varje steg i utvecklingen som en ny branch i Git. När ett steg är klart kan det testas och mergas in i main-branchen. Detta ger er praktisk erfarenhet av att arbeta i brancher och möjliggör en tydlig progression i projektet. Att arbeta i brancher gör det också möjligt att parallellt arbeta med olika funktioner utan att påverka huvudkodbasen tills det är dags att integrera och testa förändringarna. Detta arbetsflöde är vanligt i professionella utvecklingsmiljöer och kommer att hjälpa er att få bättre förståelse för samarbets- och versionshantering.

Ni bör också diskutera och dokumentera era arbetsuppgifter noga. Använd till exempel GitLabs issues och merge requests för att hantera arbetsfördelning och kodgranskning. Detta hjälper till att identifiera problem i tid och säkerställer att alla kodändringar är granskade innan de slås samman med huvudkodbasen.

## Sammanfattning

Genom att följa denna progression kommer ni att utveckla en omfattande recensionsapplikation, från enkel till komplex. Projektet ger er möjlighet att stegvis fördjupa era kunskaper i webbutveckling, databashantering och systemdesign, vilket ger en stark grund i samarbets- och utvecklingsfärdigheter. Ni kommer att arbeta med både front-end och back-end-teknologier, hantera användargränssnitt och databaslogik samt förstå hur man bygger säkra och användarvänliga system. I slutändan kommer ni att ha en bredare och djupare förståelse för de utmaningar och lösningar som är en del av modern webbutveckling, vilket förbereder er för framtida projekt och yrkesroller inom området.