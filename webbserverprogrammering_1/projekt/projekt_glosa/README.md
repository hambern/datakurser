# Projekt - Glosa

I detta projekt - som är ett samarbete mellan webbserverprogrammeringen och programmering 2 - ska du skapa ett glosprogram med grundläggande funktioner som att lägga in och förhöra glosor. I programmet ska man kunna:

- Logga in
- Logga ut
- Lägga in glosor
- Ta bort glosor
- Svara på glosor

Men projektet kan i princip bli hur stort som helst.

## Minimikrav på projektet

- [ ] Godkänd projektplan som ska innehålla design av databas, Java-appen och REST-API:et.
- [ ] GUI och logik utvecklat i Java där modell och grafiskt gränssnitt ska separeras enligt MVC-principen.
- [ ] Data sparas i MySQL via ett REST-API gjort i PHP.
- [ ] REST-API:et har flera olika "endpoints" för att hämta och spara data:
    - [ ] Unika användare med inloggning och utloggning
    - [ ] Kunna skapa nya glosor.
    - [ ] Kunna radera glosa.
    - [ ] Kunna hämta glosa.
    - [ ] Kunna "svara på" en glosa och få veta om det var rätt. Rättning ska ske via end-point.

## Tips till Programmering 2

- För att skicka information till servern med POST använder vi den klass som hittas här (som ni också fått ut i exemplet): <http://www.codejava.net/java-se/networking/an-http-utility-class-to-send-getpost-request>
- För att tolka datan vi får från servern (Json) använder vi oss av Gson som kan laddas hem här: <http://www.java2s.com/Code/Jar/g/Downloadgson224jar.htm>
- För att få iordning klasser för tolkning av Gson kan detta vara till hjälp: <http://www.jsonschema2pojo.org/>

## Tips till Webbserverprogrammering 1

- Kika på och utgå ifrån det enkla MVC du kan hitta på följande repository: <https://gitlab.com/Hambern/mvc>
- Installera JSON Viewer för att kunna ta del av json-svar direkt i webbläsaren: <https://chrome.google.com/webstore/detail/json-viewer/gbmdgpbipfallnflgajpaliibnhdgobh>
- Installera Talend API Tester för att kunna skicka och ta emot svar i ditt API: <https://chrome.google.com/webstore/detail/talend-api-tester-free-ed/aejoelaoggembcahagimdiliamlcdmfm>. För att lära dig hur Talend fungerar kan du använda dig av json-filerna under denna mapp. Importera dem till Talend och försök lista ut hur de fungerar.
- När du lägger till nya klasser försök att hålla dig till "regeln" att varje klass bör ha en egen fil med samma namn som klassen.

## Arbetsgång

Första målet ska inte vara en färdig produkt utan en MVP-release. Ni bör därför i projektplanen vara noga med att beskriva vad ni minst behöver för ett färdigt projekt:

1. En förstudie i form av en "brainstorming"
2. Lista alla "use cases". Lämpligt kan vara att lista Java-delen och REST-API:et för sig
3. En design av databas och Java-appen
4. En dokumentation (i markdown) av hur API:et fungerar
5. En tidsplan utifrån det ni gjort ovan. Kolla om det verkar rimligt, om inte - revidera den
6. En färdig godkänd projektplan
7. En redovisning

## Redovisning

Ni ska enligt ett givet körschema visa vad ni har gjort (ni får 10 min på er). Ni har inte så mycket tid att redovisa på så se till att ni har kört igenom er redovisning flera gånger innan ni verkligen redovisar. Det är viktigt att ni gör detta så att ni är säkra på att hinna visa allt på den tid ni har fått.

- Ni ska lämna in den slutgiltiga projektplanen som PDF (den som matchar det ni har gjort) via git till Joakim och via inlämning i vklass till Daniel senast den 1/6 kl 23.59.
- Ni ska lämna in koden till Daniel via inlämning i vklass. Gör en ZIP-fil av de filer som hör till projektet (.java-filer ur src-mappen och om ni använt andra resurser som t.ex. bilder).
- Ni ska ha gittan in koden till Gitlab.

## OpenAI ChatGPT

Om du kör fast i din kodning, tveka inte att ställa frågor till Open AI:s chattbot ChatGPT som är förvånansvärt skicklig på att skriva kod. Var bara tydlig med vilket slags språk du vill ha hjälp med, exempelvis HTML, CSS, PHP eller Java: <https://chat.openai.com/>. Undvik dock att använda tjänsten för att svara på dina frågor och lösa dina uppgifter eftersom det förhindrar din egen inlärning. Men som assistent som svarar på dina frågor och funderar är det ett bra verktyg.
