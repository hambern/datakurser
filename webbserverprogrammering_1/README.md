# Webbserverprogrammering 1

Denna mapp innehåller uppgifter och genomgångar till kursen Webbserverprogrammering 1

## Mappar

I denna mapp finns följande mappar:

- [git](git)
- [lektioner](lektioner)
- [linux](linux)
- [projekt](projekt)
- [sql](sql)

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
2. Lägg till en server via +-symbolen av typen `SFTP` och ange exempelvis namnet `student.oedu.se`
3. Ange följande information under "Connection":
   1. Host: `student.oedu.se`
   2. Port: `3690`
   3. Username: Ditt login till servern (börjar i regel med dina initialer följt av en serie siffror)
   4. Password: Det lösenord du fått till servern
   5. Root path: `home/student/vt24/` följt av ditt användarnamn
   6. Web server url: `http://student.oedu.se/~` följt av ditt användarnamn
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