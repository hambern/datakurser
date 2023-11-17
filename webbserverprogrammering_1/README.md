# Webbserverprogrammering 1

Denna mapp innehåller uppgifter och genomgångar till kursen Webbserverprogrammering 1

## Uppgifter

1. [git_uppgift_1](git/git_uppgift_1)
2. [git_uppgift_2](git/git_uppgift_2)
3. [git_uppgift_3](git/git_uppgift_3)
4. [linux_uppgift_2](linux/linux_uppgift_2)
5. [linux_uppgift_3](linux/linux_uppgift_3)
6. [git_uppgift_4](git/git_uppgift_4)
7. [git_uppgift_5](git/git_uppgift_5)
9. [markdown_uppgift_1](markdown/markdown_uppgift_1)
10. [linux_uppgift_5](linux/linux_uppgift_5)
11. [git_uppgift_6](git/git_uppgift_6)
12. [git_uppgift_7](git/git_uppgift_7)
13. [git_uppgift_8](git/git_uppgift_8)
14. [sql_uppgift_1](sql/sql_uppgift_1)
15. [sql_uppgift_2](sql/sql_uppgift_2)
16. [sql_uppgift_3](sql/sql_uppgift_3)
17. [sql_uppgift_4](sql/sql_uppgift_4)
18. [projekt_chat](projekt/projekt_chat/)
19. [projekt_riksdagen](projekt/projekt_riksdagen)
20. [projekt_mvc](projekt/projekt_mvc)
21. [projekt_glosa](projekt/projekt_glosa)

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

## Windows Terminal

I denna kurs kan du använda dig av PhpStorm och "Start SSH Session...". Men det är minst lika smidigt och framförallt snabbare och coolare att använda sig av ett terminalprogram. Då kan du logga in med ssh och arbeta direkt på din server med Vim. Du kan ladda ner Windows terminal via följande länk: <https://aka.ms/terminal>

### Logga in med SSH-nyckel

1. I terminalen skriver du `ssh-keygen` för att generera en nyckel. Tryck enter på alla frågor.
2. Kopiera den till din server med `scp -P 3690 C:\Users\ditt_användarnamn\.ssh\id_rsa.pub ditt_login@student.oedu.se:~`
3. Logga in till din server med lösenordet `ssh -p 3690 ditt_login@student.oedu.se`
4. Spara innehållet i nyckeln till filen med godkända nycklar med `cat ~/id_rsa.pub >> ~/.ssh/authorized_keys`
5. Ta bort den skickade nyckelfilen med `rm ~/id_rsa.pub`

### Autostarta på student-servern

För att autostarta som inloggad på din användare på studentservern måste du genomgå följande steg:

1. Gå in på "Settings" i Windows-terminalen
2. Skapa en ny profil via "+ Add a new profile"
3. Duplicera Windows PowerShell
4. Ge profilen ett namn ex "Student-servern"
5. Sätt command line till `ssh -p 3690 ditt_login@student.oedu.se` och spara profilen
6. Gå in på "Startup" via vänstermenyn
7. Ändra "Default profile" till den profil du precis skapade

### Börja i en speciell mapp på servern (överkurs)

Om du vill börja på en speciell mapp på servern som inte är root-mappen `~/` byter du ut command line-kommandot till: `ssh -t -p 3690 ditt_login@student.oedu.se "cd public_html/din_mapp && bash"`. Notera att cd-kommandot måste vara inom dubbla citationstecken och avslutas med `&& bash`

## Visual Studio Code

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
