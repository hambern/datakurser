# Skapa ett API för ditt glos-projekt

### Syfte
Detta projekt syftar till att lära dig hur man utvecklar ett API med [Kvark Framework](https://gitlab.com/hambern/kvark). Projektet är ett samarbete mellan kurserna Webbserverprogrammering 1 och Programmering 2, där vi i denna kurs fokuserar på att bygga backend-API:et. Frontend och all användarinteraktion hanteras i Programmering 2.

### Mål
Efter att ha slutfört detta projekt ska du kunna:
- Utveckla ett API med [Kvark Framework](https://gitlab.com/hambern/kvark) för att hantera CRUD-operationer (Create, Read, Update, Delete).
- Implementera användarautentisering och säker hantering av lösenord.
- Strukturera en MVC-applikation med rätt databasdesign och relationshantering.

### Beskrivning
Du ska utveckla ett API som möjliggör grundläggande gloshantering för ett glosprogram. Detta API kommer att användas av frontend-applikationen som utvecklas i Programmering 2. Funktionerna inkluderar att skapa, uppdatera, radera och läsa glosor, samt användarhantering med inloggning och utloggning.

#### Krav för API:et:
1. **Användarhantering:**
   - Skapa en användare och hantera inloggning med autentisering.
   - Hantera autentisering med token-baserad säkerhet.

2. **Gloshantering:**
   - Skapa, uppdatera, och radera glosor.
   - Hämta glosor, både individuellt och i listform.

3. **Databasdesign:**
   - Designa en MySQL-databas för att hantera användare och deras glosor.
   - Fundera igenom hur du ska skapa de relationer din applikation behöver

4. **API-struktur:**
   - Använd [Kvark Frameworks](https://gitlab.com/hambern/kvark) resurshantering och controllers för att strukturera API:et.
   - Implementera korrekt hantering av HTTP-statuskoder och validering.

### Exempel på API-endpoints

- **Skapa användare:**  
  `users/register`  
  Skickar: `first_name`, `last_name`, `email`, `password`  
  Returnerar: `token`, `status`

- **Logga in:**  
  `users/login`  
  Skickar: `email`, `password`  
  Returnerar: `token`, `status`

- **Skapa glosa:**  
  `words/create`  
  Skickar: `token`, `english`, `swedish`  
  Returnerar: `status`

- **Hämta glosor:**  
  `words/`  
  Skickar: `token`  
  Returnerar: `words`, `status`

### Verktyg
- För att kunna testa ditt api rekommenderas du att installera [Talend API Tester](https://chromewebstore.google.com/detail/talend-api-tester-free-ed/aejoelaoggembcahagimdiliamlcdmfm) som är ett plugin till din webbläsare. Med hjälp av det pluginet kan du skicka och ta emot API-anrop.

### Arbetsgång

1. **Förstudie:**  
   Utför en förstudie där ni identifierar alla API-endpoints och användarflöden som behövs.

2. **Databasschema:**  
   Designa dina tabeller och säkerställ att databasen kan hantera relationerna mellan användare och glosor.

3. **Implementering:**  
   Börja med att implementera användarautentisering och därefter övrig funktionalitet för glosor.

4. **Testning:**  
   Använd Talend API Tester för att testa alla endpoints och säkerställa att de fungerar korrekt.

5. **Dokumentation:**  
   Dokumentera API:et i en README.md-fil där du beskriver alla endpoints, vilka parametrar som behövs, och exempel på svar.

### Redovisning och Inlämning

- Redovisa ditt API genom att demonstrera funktionaliteten och förklara din design och struktur.
- Lämna in projektet på GitLab och säkerställ att all kod är väl dokumenterad i din README.md.

### Kunskapskrav

Projektet kommer att bedömas baserat på din förmåga att utveckla, dokumentera och testa ett API enligt de krav som ställts upp. Du ska också visa att du förstår och kan implementera säkerhet och autentisering korrekt.

# Betygsmatris för API-projektet – Webbserverprogrammering 1 (WESWEB01)

| Område | Betyg E | Betyg C | Betyg A |
|--------|---------|---------|---------|
| **Flöde & API-användning** | Beskriver **översiktligt** hur API:et fungerar och kommunicerar med frontend. | Förklarar **utförligt** API:ets struktur och hur data flödar mellan frontend och backend. | **Analyserar och optimerar** API:ets flöde, identifierar förbättringar och skapar en **effektiv** kommunikation mellan frontend och backend. |
| **Kodkvalitet & designprinciper** | Skriver fungerande kod där presentationslogik och övrig logik är **delvis separerade**. | Följer **designprinciper** och MVC-struktur, skapar en **välstrukturerad** kodbas. | Skriver **modulär och skalbar kod**, tillämpar etablerade designmönster och skapar en **applikation med viss komplexitet**. |
| **Säkerhet & förståelse av säkerhetslösningar** | Beskriver **översiktligt** hur applikationens säkerhet fungerar och använder Kvarks säkerhetsfunktioner enligt instruktion. | **Förklarar utförligt** hur de inbyggda säkerhetsfunktionerna fungerar, identifierar potentiella sårbarheter och motiverar val av säkerhetsåtgärder. | **Analyserar och utvärderar** säkerheten i applikationen, identifierar risker och föreslår förbättringar. Kan jämföra Kvarks säkerhetslösningar med andra tekniker. |
| **Dokumentation & kodkommentarer** | Dokumenterar arbetet **enkelt** och kommenterar kod **i begränsad utsträckning**. | Skapar en **noggrann** dokumentation och kommenterar koden **översiktligt**. | Skapar en **utförlig och professionell dokumentation**, inkluderar API-specifikationer och kommenterar koden **tydligt och genomgående**. |
| **Redovisning & reflektion** | Beskriver API:et och visar grundläggande förståelse. | **Analyserar** och reflekterar kring valda lösningar och eventuella problem. | **Reflekterar nyanserat**, föreslår förbättringar och utvärderar projektet med förslag på framtida utveckling. |
