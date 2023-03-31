# Webbutveckling 1

Denna mapp innehåller uppgifter och genomgångar till kursen Webbutveckling 1

## Uppgifter

1. [html_uppgift_1](html/html_uppgift_1)
2. [html_uppgift_2](html/html_uppgift_2)
3. [css_uppgift_1](css/css_uppgift_1)
4. [css_uppgift_2](css/css_uppgift_2)
5. [css_uppgift_3](css/css_uppgift_3)
6. [css_uppgift_4](css/css_uppgift_4)
7. [css_uppgift_5](css/css_uppgift_5)
8. [projekt_riksdagen](projekt/projekt_riksdagen)
9. [projekt_fragesport](projekt/projekt_fragesport)
10. [projekt_gastbok](projekt/projekt_gastbok)
11. [projekt_blogg](projekt/projekt_blogg)
12. [projekt_slut](projekt/projekt_slut)

## Roliga kluringar

1. [Hambergs kluring 1](https://student.oedu.se/~mh6802/kul/mattias_kul_01/)
2. [Hambergs kluring 2](https://student.oedu.se/~mh6802/kul/mattias_kul_02/)
3. [Hambergs kluring 3](https://student.oedu.se/~mh6802/kul/mattias_kul_03/)
4. [Notpron](http://notpron.org/notpron/)

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
- Installera därefter extension-paketet "Remote - SSH": <https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-ssh>
- Klicka på ikonen till vänster som ser ut som en skärm med en liten ring längst ner till höger
- Lägg till servern student.oedu.se och ange dina inloggningsuppgifter
   - Klicka på "+" bredvid SSH
   - Skriv in SSH-kommandot: `ssh -p 3690 ditt_login@student.oedu.se` och spara anslutningen.
   - Ladda om dina anslutningar med cirkel-pilen så att du kan se den
   - Anslut till den aoch ange ditt lösenord till servern
   - Ange att servern är en Linux-server
- Därefter kan du klicka på ikonen med två papper längst upp och välja vilken mapp på din server du vill öppna, förslagsvis 'public_html'

Då kan du arbeta direkt emot din utvecklingsserver utan att behöva ha några lokala kopior i din egen dator. Nästa steg är att fixa en ssh-inloggning så att du slipper skriva in lösenordet varje gång.

## Skapa en ssh-inloggning till student-servern

- Öppna Visual Studio Code och välj `Terminal` > `New Terminal` i topp-menyn. Du bör då få upp ett terminalfält längst ner i gränssnittet.
- Kolla om du redan har en ssh-nyckel med kommandot: `cat ~/.ssh/id_rsa.pub`. Om du har en nyckel kommer du nu se en massa tecken som börjar med "ssh-rsa" och slutar med ditt användarnamn och dator-id
- Om du inte har en ssh-nyckel kan du skapa den med kommandot `ssh-keygen`. När du uppges att ange saker - tryck bara enter tills du är klar. Testa nu återigen kommandot `cat ~/.ssh/id_rsa.pub`.
- När du ser din ssh-nyckel kopierar du den, från och med ssh-rsa till och med ditt användarnamn och dator-id. Spara denna nyckel så att du kan hitta den senare.
- Logga nu in på din server i Visual Studio Code med hjälp av SSH-Remote. När du är inne kan du återigen öppna upp terminalen.
- Skriv där kommandot `vim ~/.ssh/authorized_keys`. Du kommer då skapa en fil som kommer att innehålla de nycklar vars anslutningar du kommer att tillåta även utan lösenord. Tryck på tangenten `i` för att hamna i insert-läge och klistra in din ssh-nyckel. Tryck på tangenten `esc` för att gå ur insert-läget och skriv därefter `:wq` för att spara och stänga av.
- Grattis! Om allt gått som det ska bör du nu kunna logga in utan lösenord

### Kolla så att ni kan:

1. Föra över filer till servern hemifrån
2. Logga in på servern hemifrån
3. Redigera filer som ligger på servern
4. Titta på din egen sida via `http://student.oedu.se/~ditt_login` i en webbläsare
5. Ansluta en mapp i PhpStorm till servern

## OpenAI ChatGPT

Om du kör fast i din kodning, tveka inte att ställa frågor till Open AI:s chattbot ChatGPT som är förvånansvärt skicklig på att skriva kod. Var bara tydlig med vilket slags språk du vill ha hjälp med, exempelvis HTML, CSS, PHP eller Java: <https://chat.openai.com/>. Undvik dock att använda tjänsten för att svara på dina frågor och lösa dina uppgifter eftersom det förhindrar din egen inlärning. Men som assistent som svarar på dina frågor och funderar är det ett bra verktyg.
