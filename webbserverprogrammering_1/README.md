# Webbserverprogrammering 1

Denna mapp innehåller uppgifter och genomgångar till kursen Webbserverprogrammering 1

## Mappar

I denna mapp finns följande mappar:

- [git](git)
- [lektioner](git)
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

### Kolla så att ni kan:

1. Föra över filer till servern hemifrån.
2. Logga in på servern hemifrån.
3. Editera filer som ligger på servern.
4. Titta på din egen sida via `http://student.oedu.se/~ditt_login` i en webbläsare.