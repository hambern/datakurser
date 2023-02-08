# Projekt - Glosa

I detta projekt - som är ett samarbete mellan webbserverprogrammeringen och programmering 2 - ska du skapa ett glosprogram med grundläggande funktioner som att lägga in och förhöra glosor. I programmet ska man kunna:

- Logga in
- Logga ut
- Lägga in glosor
- Ta bort glosor
- Svara på glosor

Men projektet kan i princip bli hur stort som helst.

## Minimikrav på projektet

- Godkänd projektplan som ska innehålla design av databas, Java-appen och REST-API:et.
- GUI och logik utvecklat i Java där modell och grafiskt gränssnitt ska separeras enligt MVC-principen.
- Data sparas i MySQL via ett REST-API gjort i PHP.
- REST-API:et har flera olika "endpoints" för att hämta och spara data:
    - Unika användare med inloggning och utloggning
    - Kunna skapa nya glosor.
    - Kunna radera glosa.
    - Kunna hämta glosa.
    - Kunna "svara på" en glosa och få veta om det var rätt. Rättning ska ske via end-point.

## Tips till Programmering 2

- För att skicka information till servern med POST använder vi den klass som hittas här (som ni också fått ut i exemplet): <http://www.codejava.net/java-se/networking/an-http-utility-class-to-send-getpost-request>
- För att tolka datan vi får från servern (Json) använder vi oss av Gson som kan laddas hem här: <http://www.java2s.com/Code/Jar/g/Downloadgson224jar.htm>
- För att få iordning klasser för tolkning av Gson kan detta vara till hjälp: <http://www.jsonschema2pojo.org/>

## Tips till Webbserverprogrammering 1

- Kika på och utgå ifrån det enkla MVC du kan hitta på följande repository: <https://gitlab.com/Hambern/mvc>
- Installera JSON Viewer för att kunna ta del av json-svar direkt i webbläsaren: <https://chrome.google.com/webstore/detail/json-viewer/gbmdgpbipfallnflgajpaliibnhdgobh>
- Installera Talend API Tester för att kunna skicka och ta emot svar i ditt API: <https://chrome.google.com/webstore/detail/talend-api-tester-free-ed/aejoelaoggembcahagimdiliamlcdmfm>. För att lära dig hur Talend fungerar kan du använda dig av json-filerna under denna mapp. Importera dem till Talend och försök lista ut hur de fungerar.
- När du lägger till nya klasser försök att hålla dig till "regeln" att varje klass bör ha en egen fil med samma namn som klassen.

## Exempel på endpoints

#### Skapa en användare

- Url: `/users/create`
- Skicka:
    - `first_name`
    - `last_name`
    - `email`
    - `password`
    - `password_confirm`
- Svar: `token`

#### Logga in

- Url: `/users/login`
- Skicka:
    - `email`
    - `password`
- Svar: `token`

#### Logga ut

- Url: `/users/logout`
- Skicka: `token`

#### Index

- Url: `/users`
- Skicka: `token`
- Svar: `users`

## Arbetsgång

Första målet ska inte vara en färdig produkt utan en MVP-release. Ni bör därför i projektplanen vara noga med att beskriva vad ni minst behöver för ett färdigt projekt:

1. En förstudie i form av en "brainstorming"
    - Tidigare klassers anteckningar kan ni se här: https://docs.google.com/document/d/17SKZhPdtvxH0Z3RcccZw_6NlKlg5GdzdFEl-Matc_7I/edit?usp=sharing
    - Brainstorma själva i detta dokument: https://ornskoldsvik-my.sharepoint.com/:w:/g/personal/mattias_hamberg_ornskoldsvik_se/Eab_iWv26R5Fsrp4Ym4fvPcBaVRbLZlPP4-6Jhq8aD_i7A?e=nxwnwD
2. Lista alla "use cases". Lämpligt kan vara att lista Java-delen och REST-API:et för sig
    - Anteckna dina egna use cases i din projektplan. Tänk att ett use case i API-delen ungefär motsvarar en metod i en controller. `users/login` är alltså ett use case och `users/logout` är ett annat.
3. En design av databas och Java-appen
    - Visa upp de databastabeller du behöver skapa. Det finns sätt att skriva tabeller i markdown. Var också noga med hur databaserna hänger ihop. Ett sådant exempel är att en glosa kan tillhöra en användare. Då måste glos-tabellen ha en kolumn som heter exempelvis `user_id` för att man ska kunna matcha ihop dem.
4. En dokumentation (i markdown) av hur API:et fungerar där du listar de olika endpointsen som i sin tur motsvarar use cases (se exemplen ovanför). Beskriv också där vilken information som behöver skickas till endpointen, samt vilket slags svar du kan förvänta dig.
5. En realistisk tidsplan utifrån det ni gjort ovan. Kolla om det verkar rimligt, om inte - revidera den eftersom
6. Det som återstår sedan är en färdig godkänd projektplan
7. Och en slutredovisning

## Redovisning

Ni ska enligt ett givet körschema visa vad ni har gjort (ni får 10 min på er). Ni har inte så mycket tid att redovisa på så se till att ni har kört igenom er redovisning flera gånger innan ni verkligen redovisar. Det är viktigt att ni gör detta så att ni är säkra på att hinna visa allt på den tid ni har fått.

- Ni ska lämna in den slutgiltiga projektplanen som PDF (den som matchar det ni har gjort) via git till Joakim och via inlämning i vklass till Daniel senast den 1/6 kl 23.59.
- Ni ska lämna in koden till Daniel via inlämning i vklass. Gör en ZIP-fil av de filer som hör till projektet (.java-filer ur src-mappen och om ni använt andra resurser som t.ex. bilder).
- Ni ska ha gittat in koden till Gitlab.

## OpenAI ChatGPT

Om du kör fast i din kodning, tveka inte att ställa frågor till Open AI:s chattbot ChatGPT som är förvånansvärt skicklig på att skriva kod. Var bara tydlig med vilket slags språk du vill ha hjälp med, exempelvis HTML, CSS, PHP eller Java: <https://chat.openai.com/>. Undvik dock att använda tjänsten för att svara på dina frågor och lösa dina uppgifter eftersom det förhindrar din egen inlärning. Men som assistent som svarar på dina frågor och funderar är det ett bra verktyg.
