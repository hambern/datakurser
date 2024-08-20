# Skapa ett API för ditt glos-projekt

### Syfte
Detta projekt syftar till att lära dig hur man utvecklar ett REST-API med Laravel. Projektet är ett samarbete mellan kurserna Webbserverprogrammering 1 och Programmering 2, där vi i denna kurs fokuserar på att bygga backend-API:et. Frontend och all användarinteraktion hanteras i Programmering 2.

### Mål
Efter att ha slutfört detta projekt ska du kunna:
- Utveckla ett REST-API med Laravel för att hantera CRUD-operationer (Create, Read, Update, Delete).
- Implementera användarautentisering och säker hantering av lösenord.
- Strukturera en Laravel-applikation med rätt databasdesign och relationshantering.
- Använda Eloquent ORM för att hantera databaskommunikationen i ditt API.

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
   - Använd Eloquent ORM för att hantera databaskommunikationen.

4. **API-struktur:**
   - Använd Laravel’s resurshantering och controllers för att strukturera API:et.
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

### Arbetsgång

1. **Förstudie:**  
   Utför en förstudie där ni identifierar alla API-endpoints och användarflöden som behövs.

2. **Databasschema:**  
   Designa ett detaljerat databasschema och implementera det med migrations i Laravel. Säkerställ att databasen kan hantera relationerna mellan användare och glosor.

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

Projektet kommer att bedömas baserat på din förmåga att utveckla, dokumentera och testa ett API enligt de krav som ställts upp. Du ska också visa att du förstår och kan implementera säkerhet och autentisering korrekt i Laravel.