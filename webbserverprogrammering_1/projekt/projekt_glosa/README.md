# Skapa ett API för ditt glos-projekt

### Syfte
Detta projekt syftar till att lära dig hur man utvecklar ett REST-API med [Kvark Framework](https://gitlab.com/hambern/kvark). Projektet är ett samarbete mellan kurserna Webbserverprogrammering 1 och Programmering 2, där vi i denna kurs fokuserar på att bygga backend-API:et. Frontend och all användarinteraktion hanteras i Programmering 2.

### Mål
Efter att ha slutfört detta projekt ska du kunna:
- Utveckla ett REST-API med [Kvark Framework](https://gitlab.com/hambern/kvark) för att hantera CRUD-operationer (Create, Read, Update, Delete).
- Implementera användarautentisering och säker hantering av lösenord.
- Strukturera en MVC-applikation med rätt databasdesign och relationshantering.

### Beskrivning
Du ska utveckla ett API som möjliggör grundläggande gloshantering för ett glosprogram. Detta API kommer att användas av frontend-applikationen som utvecklas i Programmering 2. Funktionerna inkluderar att skapa, uppdatera, radera och läsa glosor, samt användarhantering med inloggning och utloggning.

#### Krav för API:et:
1. **Användarhantering:**
   - Skapa en användare och hantera inloggning med autentisering.
   - Hantera användarsessioner och autentisering med token-baserad säkerhet.

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
  `POST /api/users/register`  
  Skickar: `first_name`, `last_name`, `email`, `password`  
  Returnerar: `token`

- **Logga in:**  
  `POST /api/users/login`  
  Skickar: `email`, `password`  
  Returnerar: `token`

- **Skapa glosa:**  
  `POST /api/glossary`  
  Skickar: `token`, `word`, `translation`  
  Returnerar: `success`

- **Hämta glosor:**  
  `GET /api/glossary`  
  Skickar: `token`  
  Returnerar: `glossary`

### Verktyg
- För att kunna testa ditt api rekommenderas du att installera [Talend API Tester](https://chromewebstore.google.com/detail/talend-api-tester-free-ed/aejoelaoggembcahagimdiliamlcdmfm) som är ett plugin till din webbläsare. Med hjälp av det pluginet kan du skicka och ta emot API-anrop.

### Arbetsgång

1. **Förstudie:**  
   Utför en förstudie där ni identifierar alla API-endpoints och användarflöden som behövs.

2. **Databasschema:**  
   Designa dina tabeller och säkerställ att databasen kan hantera relationerna mellan användare och glosor.

3. **Implementering:**  
   Börja med att implementera användarautentisering och därefter CRUD-funktionalitet för glosor.

4. **Testning:**  
   Använd Postman eller Talend API Tester för att testa alla endpoints och säkerställa att de fungerar korrekt.

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
| **Teknisk förståelse** | Beskriver översiktligt hur ett REST-API fungerar och hur API:et samverkar med frontend. | Beskriver utförligt hur API:et fungerar, inklusive dess uppbyggnad och samspel med frontend. | Beskriver utförligt och nyanserat API:ets funktion, dess arkitektur och interaktion med frontend. |
| **Projektplan & API-design** | Gör en enkel projektplan där API-endpoints och flöden identifieras. | Gör en genomarbetad projektplan med detaljerade API-endpoints och en tydlig arkitektur. | Gör en genomarbetad och iterativ projektplan med detaljerade API-endpoints och säkerhetsaspekter. Reviderar vid behov. |
| **Databasdesign & relationshantering** | Designar en grundläggande databasstruktur med relationer mellan användare och glosor. | Skapar en välstrukturerad databas med tydliga relationer och säkerställer korrekt relationshantering. | Skapar en optimerad databasmodell med genomtänkt relationshantering och säkerhetsåtgärder. |
| **Autentisering & säkerhet** | Implementerar en grundläggande användarautentisering och enkel token-hantering. | Implementerar en säker autentisering med hashade lösenord och token-baserad autentisering. | Implementerar avancerad autentisering, såsom refresh tokens, och vidtar extra säkerhetsåtgärder mot hot. |
| **CRUD-funktionalitet & API-struktur** | Implementerar grundläggande CRUD-operationer för gloshantering. | Implementerar fullständig CRUD-funktionalitet enligt REST-principer och hanterar fel och validering. | Implementerar fullständig CRUD-funktionalitet med avancerad felhantering, validering och effektiva API-designprinciper. |
| **Kodkvalitet & MVC-struktur** | Skriver kod där API-logik och databashantering är delvis separerade. | Skriver kod enligt MVC-principer och enhetliga kodningsstandarder. | Skriver modulär och skalbar kod enligt MVC med tydlig separation av logik, datalager och presentation. |
| **Kvalitetssäkring & testning** | Genomför enklare tester med Postman eller Talend API Tester. | Genomför tester av alla endpoints och inkluderar felhantering och validering. | Implementerar automatiserade tester och säkerställer API:ets stabilitet och säkerhet. |
| **Dokumentation** | Skapar en enkel README.md med grundläggande information om API:et. | Skapar en tydlig och detaljerad README.md med endpoints, parametrar och exempel på anrop. | Skapar en professionell dokumentation inklusive detaljerade API-specifikationer och användningsexempel. |
| **Redovisning & reflektion** | Redovisar API:et och beskriver funktionaliteten på en grundläggande nivå. | Redovisar API:et och beskriver dess uppbyggnad, funktioner och eventuella förbättringsmöjligheter. | Redovisar API:et, reflekterar nyanserat över designval och ger förbättringsförslag för framtida utveckling. |

