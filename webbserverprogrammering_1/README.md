# Webbserverprogrammering 1

Denna mapp innehåller uppgifter och genomgångar till kursen Webbserverprogrammering 1

## Färdighetsträning

Det första vi måste göra i denna kurs är att lära oss PHP, MySQL och Git. MySQL används för att lagra och hämta information från en databas och Git är ett versionshanteringssystem som gör att vi kan följa projektens utveckling över tid och gå tillbaka till tidigare versioner av koden. För att göra detta kommer vi använda oss av W3Schools plattform "Pathfinder": <https://pathfinder.w3schools.com/>. Pathfinder håller reda på var du är i ditt lärande så att det är lätt att fortsätta där du slutade senast.

- Gå in på <https://pathfinder.w3schools.com/> och spara det som ett bokmärke
- Skapa en användare. Använd gärna ditt privata e-postkonto för att kunna fortsätta ditt lärande även efter utbildningen
- Lägg till följande "målsättningar". Se hur du gör här: <https://www.youtube.com/watch?v=Urahol7qsLc>
   - PHP - Intermediate
   - MySQL - Intermediate
   - Git - Beginner
   - Laravel - Beginner 
- Välj en studiehastighet på 8 timmar i veckan (spelar egentligen ingen roll)
- Därefter ska vi gå lära oss de olika punkterna i ovanstående ordning.
- Tänk på att det viktiga inte är att bli klar utan att lära sig. Se därför till att du förstår en del innan du går vidare till nästa.
- Är du en sådan som gillar att lära dig via video är denna spellista en bra resurs:
  - SQL - <https://www.youtube.com/playlist?list=PLP9IO4UYNF0UQkBXlTMSw0CYsxv-GDkkI>

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

## Använd Visual Studio Code

Jag rekommenderar att du i kursen använder programmet Visual Studio Code. Då kan du jobba direkt emot utvecklingsservern och behöver inte tänka på att "deploya". Följ nedanstående guide:

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

Om du kör fast i din kodning, tveka inte att ställa frågor till Open AI:s chattbot ChatGPT som är förvånansvärt skicklig på att skriva kod. Var bara tydlig med vilket slags språk du vill ha hjälp med, exempelvis HTML, CSS, PHP eller JavaScript: <https://chat.openai.com/>. Men undvik att använda AI-teknik för att generera redan färdig kod. En bättre strategi är att använda tekniken för att felsöka och för att förklara i detalj vad funktioner etc gör.