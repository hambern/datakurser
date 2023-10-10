# Webbutveckling 1

Denna mapp innehåller uppgifter och genomgångar till kursen Webbutveckling 1

## Uppgifter

1. [html_uppgift_1](html/html_uppgift_1)
2. [html_uppgift_2](html/html_uppgift_2)
3. Vänta här in dina kamrater. Gör en extrauppgift eller en kul kluring
4. [css_uppgift_1](css/css_uppgift_1)
5. [css_uppgift_2](css/css_uppgift_2)
6. [css_uppgift_3](css/css_uppgift_3)
7. Vänta här in dina kamrater. Gör en extrauppgift eller en kul kluring
8. [css_uppgift_4](css/css_uppgift_4)
9. [css_uppgift_5](css/css_uppgift_5)
10. [css_uppgift_6](css/css_uppgift_6)
11. [projekt_fragesport](projekt/projekt_fragesport)
12. [projekt_gastbok](projekt/projekt_gastbok)
13. [projekt_blogg](projekt/projekt_blogg)
14. [projekt_riksdagen](projekt/projekt_riksdagen)
15. [projekt_slut](projekt/projekt_slut)

Det finns också ett antal [extrauppgifter](extrauppgifter) för dig som vill göra något annat en stund.

## Övningar

På W3Scools finns det små självrättande interaktiva övningar. Gör gärna dessa för att testa dig själv:

- HTML-övningar: <https://www.w3schools.com/html/exercise.asp>
- CSS-övningar: <https://www.w3schools.com/css/exercise.asp>

## Roliga kluringar

1. [Hambergs kluring 1](https://student.oedu.se/~mh6802/kul/mattias_kul_01/)
2. [Hambergs kluring 2](https://student.oedu.se/~mh6802/kul/mattias_kul_02/)
3. [Hambergs kluring 3](https://student.oedu.se/~mh6802/kul/mattias_kul_03/)
4. [Notpron](http://notpron.org/notpron/)

## CSS-spel

1. Grid Garden: <https://cssgridgarden.com/#sv> - Lär dig använda CSS-grid
2. Flexbox Froggy: <https://flexboxfroggy.com/#sv> - Lär dig använda Flexbox
3. Flexbox Defense: <http://www.flexboxdefense.com/>
4. CSSBattle: <https://cssbattle.dev> - Supersvåra dagliga CSS-utmaningar för designers


## Validering

Ta gärna för vana att alltid validera dina filer innan inlämning. På så vis får du veta om du gjort något fel, och det är dessutom det första jag gör när jag rättar de uppgifter du lämnar in.

- Validering av HTML5: http://html5.validator.nu
- Validering av CSS: http://jigsaw.w3.org/css-validator (Ange CSS nivå 3 under "Fler val" och ställ in "Alla" under "Varningar")

## Information om skolans server

### Information om utvecklingsservern som vi jobbar på

- Servernamn: `student.oedu.se`
- För phpmyadmin: <https://admin.student.oedu.se>
- Din hemsida: <https://student.oedu.se/~ditt_login>

### Din databas

Du har tillgång till en databas som ligger på student.oedu.se. Den information du behöver för att ansluta den är

- Värd: `localhost`
- Användarnamn: ditt login till student.oedu.se (två bokstäver följt av ett antal siffror)
- Lösenord: ditt lösenord till student.oedu.se (ett komplicerat autogenererat lösenord)
- Databas: ditt login

Du kan titta på innehållet i din databas genom att logga in via <https://admin.student.oedu.se>

### Filöverföring

Man kan skicka filer via ssh (sftp), standard port är 22 men på denna server är den satt till 3690. Det finns flera olika sätt föra över filer.

### Logga in via ssh på port 3690

`ssh -p 3690 ditt_login@student.oedu.se`

Du kan också, när du fyllt i korrekt information i PhpStorm, logga in via ssh genom `Tools > Start SSH Session` i menyn.

### Anslut via PhpStorm

1. Gå via menyn in på `File > Settings > Build, Execution, Deployment > Depolyment`
2. Lägg till en server via `+`-symbolen av typen `SFTP` och ange exempelvis namnet `student.oedu.se`
3. Ange följande information under "Connection":
   1. Host: `student.oedu.se`
   2. Port: `3690`
   3. Username: Ditt login till servern (börjar i regel med dina initialer följt av en serie siffror)
   4. Password: Det lösenord du fått till servern
   5. Root path: `home/students/vt24/ditt_login`
   6. Web server url: `http://student.oedu.se/~ditt_login`
4. Ange följande information under "Mappings"
   1. Local path: Välj den mapp på datorn du vill använda. Skapa exempelvis en mapp som synkas till OneDrive med namnet `Kod`
   2. Deplyment path: `/public_html`
   3. Web path: `/`

## Använd Visual Studio Code

Det är också möjligt att i kursen använda Visual Studio Code. Då kan du jobba direkt emot utvecklingsservern och behöver inte tänka på att "deploya". Följ bara nedanstående guide:

- Ladda ner och installera programmet här: <https://code.visualstudio.com/>
- Installera därefter följande extension-paket:
   - "Remote - SSH": <https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-ssh>
   - "SSH key generator": <https://marketplace.visualstudio.com/items?itemName=AmadeusITGroup.ssh-key-generator>
- Klicka på ikonen till vänster som ser ut som en skärm med en liten ring längst ner till höger
- Lägg till servern student.oedu.se och ange dina inloggningsuppgifter:
   - Klicka på "+" bredvid SSH
   - Skriv in SSH-kommandot: `ssh -p 3690 ditt_login@student.oedu.se`
   - Spara anslutningen till `C:\Users\ditt_login\.ssh\config`
- Nu är det dags att generera din SSH-nyckel för att kunna ansluta utan lösenord:
   - Öppna upp kommando-paletten med `Ctrl + Shift + P` och kör kommandot `SSH: Generate SSH key`.
   - Välj den server du vill koppla ihop dig med: `student.oedu.se`
   - Ange ditt lösenord till servern
- Nu bör du kunna ansluta till din server utan att behöva ange ditt lösenord
- Om du blir ombedd att ange vilken typ av server det är så är det en Linux-server

Då kan du arbeta direkt emot din utvecklingsserver utan att behöva ha några lokala kopior i din egen dator.

### Andra bra extension-paket

Du kan hitta tusentals extensions till Visual Studio Code på <https://marketplace.visualstudio.com> men dessa vill jag särskilt rekommendera:

- HTML CSS Support: <https://marketplace.visualstudio.com/items?itemName=ecmel.vscode-html-css>
- HTMLHint: <https://marketplace.visualstudio.com/items?itemName=HTMLHint.vscode-htmlhint>
- Live Server: <https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer>

## Namnge filer och mappar

1. **Skiftlägeskänslighet:** På en Linux-server är filnamn känsliga för skiftläge. Använd små bokstäver för att undvika förväxling.
2. **Hantering av svenska tecken:** Det är säkrast att undvika svenska tecken som å, ä och ö i filnamn på en webbserver.
3. **Separering utan mellanslag:** Använd understreck (_) eller bindestreck (-) istället för mellanslag i filnamn.
4. **Korta och beskrivande namn:** Välj namn som är tillräckligt korta men ändå beskrivande nog att förstå innehållet.
5. **Specialteckens risker:** Undvik specialtecken i filnamn för att förhindra oväntade problem.
6. **Standardisering av filändelser:** Använd standardiserade filändelser som .html, .php och .js.
7. **Startsidan index.html:** Filen `index.html` fungerar som webbplatsens startsida, vilket gör den till en central del i webbplatsens struktur.
8. **Strukturerad organisation:** Organisera filerna i meningsfulla mappar och undvik överbelastning i enskilda kataloger.

## OpenAI ChatGPT

Om du kör fast i din kodning, tveka inte att ställa frågor till Open AI:s chattbot ChatGPT som är förvånansvärt skicklig på att skriva kod. Var bara tydlig med vilket slags språk du vill ha hjälp med, exempelvis HTML, CSS, PHP eller Java: <https://chat.openai.com/>. Undvik dock att använda tjänsten för att svara på dina frågor och lösa dina uppgifter eftersom det förhindrar din egen inlärning. Men som assistent som svarar på dina frågor och funderar är det ett bra verktyg.
