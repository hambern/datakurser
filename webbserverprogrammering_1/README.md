# Webbserverprogrammering 1

Denna mapp innehåller uppgifter och genomgångar till kursen Webbserverprogrammering 1

## Mappar

I denna mapp finns följande mappar:

- [extrauppgifter](extrauppgifter)
- [git](git)
- [lektioner](lektioner)
- [linux](linux)
- [projekt](projekt)
- [sql](sql)

## Uppgifter

1. [linux_uppgift_1](linux/linux_uppgift_1)
2. [git_uppgift_1](git/git_uppgift_1)
3. [git_uppgift_2](git/git_uppgift_2)
4. [git_uppgift_3](git/git_uppgift_3)
5. [linux_uppgift_2](linux/linux_uppgift_2)
6. [linux_uppgift_3](linux/linux_uppgift_3)
7. [git_uppgift_4](git/git_uppgift_4)
8. [git_uppgift_5](git/git_uppgift_5)
9. [linux_uppgift_4](linux/linux_uppgift_4)
10. [markdown_uppgift_1](markdown/markdown_uppgift_1)
11. [linux_uppgift_5](linux/linux_uppgift_5)
12. [git_uppgift_6](git/git_uppgift_6)

## Validering

Ta gärna för vana att alltid validera dina filer innan inlämning. På så vis får du veta om du gjort något fel, och det är dessutom det första jag gör när jag rättar de uppgifter du lämnar in.

- Validering av HTML5: http://html5.validator.nu
- Validering av CSS: http://jigsaw.w3.org/css-validator (Ange CSS nivå 3 under "Fler val" och ställ in "Alla" under "Varningar")

## Information om skolans server

### Information om utvecklingsservern som vi jobbar på

- Servernamn: `student.oedu.se`
- För phpmyadmin: `admin.student.oedu.se`
- Din hemsida: `student.oedu.se/~ditt_login`

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

### Kolla så att ni kan:

1. Föra över filer till servern hemifrån
2. Logga in på servern hemifrån
3. Redigera filer som ligger på servern
4. Titta på din egen sida via `http://student.oedu.se/~ditt_login` i en webbläsare
5. Ansluta en mapp i PhpStorm till servern

## Windows Terminal

I denna kurs kan du använda dig av PhpStorm och "Start SSH Session...". Men det är minst lika smidigt och framförallt snabbare och coolare att använda sig av ett terminalprogram. Då kan du logga in med ssh och arbeta direkt på din server med Vim. Du kan ladda ner Windows terminal via följande länk: <https://aka.ms/terminal>

### Koppla din dator till ditt studentkonto

För att kunna logga in utan att behöva skriva lösenordet varje gång måste du använda dig av SSH-nycklar:

1. I terminalen skriver du `ssh-keygen` för att generera en nyckel. Tryck enter på alla frågor.
2. Kopiera den till din server med `scp -P 3690 C:\Users\ditt_användarnamn\.ssh\id_rsa.pub ditt_login@student.oedu.se:~`
3. Logga in till din server med lösenordet `ssh -p 3690 ditt_login@student.oedu.se`
4. Öppna filen du skickade med `cat ~/id_rsa.pub` och kopiera innehållet
5. Skapa en fil för godkända nycklar med `vim ~/.ssh/authorized_keys`
6. Klistra in innehållet från punkt 5. Spara med `:wq`
7. Ta bort den skickade nyckelfilen med `rm ~/id_rsa.pub`

### Autostarta på student-servern

För att autostarta som inloggad på din användare på studentservern måste du genomgå följande steg:

1. Gå in på "Settings" i Windows-terminalen
2. Skapa en ny profil via "+ Add new profile"
3. Duplicera Windows PowerShell
4. Ge profilen ett namn ex "Student-servern"
5. Sätt command line till `ssh -p 3690 ditt_login@student.oedu.se` och spara profilen
6. Gå in på "Startup" via vänstermenyn
7. Ändra "Default profile" till den profil du precis skapade
