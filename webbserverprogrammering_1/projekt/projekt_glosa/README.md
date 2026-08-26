# Projektuppgift: Glos-API med Flight PHP

## Syfte
Detta projekt utförs i samarbete med kursen *Programmering 2*. Ditt fokus i denna kurs (*Webbserverprogrammering 1*) är att bygga **backend-systemet** – ett API som hanterar data och logik. Frontend-applikationen (klienten) utvecklas ofta i den andra kursen eller av en annan utvecklare.

Du kommer att använda [Flight PHP](https://gitlab.com/ornskoldsviks-gymnasium/flight) (eller valfritt annat ramverk, t.ex. Laravel) för att skapa en strukturerad och säker applikation.

## Mål
Efter avslutat projekt ska du kunna:
- **API-utveckling:** Bygga ett REST-liknande API som hanterar CRUD (Create, Read, Update, Delete).
- **Säkerhet:** Implementera användarregistrering och inloggning med token-baserad autentisering.
- **Databasdesign:** Strukturera en MySQL-databas med relationer (One-to-Many).
- **Ramverk:** Arbeta enligt MVC-mönstret (Model-View-Controller) i ett PHP-ramverk.

## Projektbeskrivning
Din uppgift är att skapa "motorn" bakom en glos-app. API:et ska kunna ta emot anrop för att skapa konton, logga in och hantera ordlistor.

### Kravspecifikation
1.  **Användarkonton**
    - Registrering av nya användare (namn, e-post, lösenord).
    - Inloggning (validera uppgifter och returnera en access-token).
    - Lösenord ska hash:as säkert (t.ex. `password_hash`).

2.  **Gloshantering**
    - Användare ska kunna lägga till nya glosor (t.ex. engelska <-> svenska).
    - Användare ska kunna se *sina egna* glosor.
    - Användare ska kunna redigera och ta bort sina glosor.

3.  **Databas**
    - Minst två tabeller: `users` och `words` (eller liknande).
    - Tydlig koppling: En glosa tillhör en specifik användare (`user_id`).

### Förslag på API-endpoints
Här är en struktur du kan utgå ifrån. Exakta URL:er beror på din routing.

| Metod | Endpoint | Beskrivning | Data in | Data ut |
| :--- | :--- | :--- | :--- | :--- |
| **POST** | `/users/register` | Skapa konto | `name`, `email`, `password` | Status, ev. token |
| **POST** | `/users/login` | Logga in | `email`, `password` | `token` |
| **POST** | `/words/create` | Skapa glosa | `token`, `english`, `swedish` | Status, ID på glosa |
| **GET** | `/words` | Hämta alla | `token` | Lista med glosor |
| **POST** | `/words/delete` | Ta bort | `token`, `id` | Status |

*Notera: I ett strikt REST-API används ofta HTTP-headers för tokens och metoder som DELETE/PUT, men i detta projekt kan ni skicka token och ID i body (POST) om det förenklar.*

---

## Arbetsgång

1.  **Planering & Design:**
    - Skissa upp din databasmodell (ER-diagram). Vilka tabeller och kolumner behövs?
    - Definiera dina endpoints.

2.  **Databas:**
    - Skapa databasen och tabellerna i MySQL/phpMyAdmin.

3.  **Backend-utveckling:**
    - Utgå från startmallen [Flight på GitLab](https://gitlab.com/ornskoldsviks-gymnasium/flight) (eller installera via `composer require mikecao/flight`).
    - Bygg `User`-modellen och inloggningslogik.
    - Bygg `Word`-modellen och CRUD-funktionalitet.
    - Testa löpande.

4.  **Testning:**
    - Eftersom du inte har ett färdigt frontend måste du testa API:et med verktyg.
    - Rekommenderade verktyg: **Thunder Client** (VS Code-tillägg), **Postman**, eller **Talend API Tester**.

---

## Redovisning & Dokumentation
Projektet redovisas genom inlämning på GitHub. I ditt repository ska det finnas en `README.md` (din rapport) som innehåller:

1.  **Inledning:** Projektets syfte och dina mål.
2.  **Teknisk Beskrivning:**
    - **ER-diagram:** Bild på din databasstruktur.
    - **API-dokumentation:** Lista på endpoints, vad de tar emot och vad de svarar.
3.  **Genomförande:** Hur du löste uppgiften, utmaningar du stötte på.
4.  **Säkerhet:** Hur du har tänkt kring lösenordshantering och tokens.
5.  **Reflektion:** Vad gick bra? Vad hade kunnat göras bättre?

---

## Betygsmatris

| Område | Betyg E | Betyg C | Betyg A |
| :--- | :--- | :--- | :--- |
| **Funktionalitet** | API:et fungerar för grundläggande inloggning och gloshantering. | Felhantering är inbyggd (t.ex. vid fel lösenord). Data valideras. | API:et är robust, har god felhantering och ren struktur. |
| **Kodkvalitet** | Koden är fungerande men kan vara blandad. | MVC-mönstret följs. Kod är uppdelad i logiska funktioner/klasser. | Koden är modulär, välkommenterad och följer "Clean Code". |
| **Säkerhet** | Lösenord hash:as. Token används. | Förstår och motiverar säkerhetsval. | Analyserar säkerhetsrisker (SQL-injection, XSS) och förebygger dem aktivt. |
