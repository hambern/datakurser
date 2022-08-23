# Linux - Uppgift 2

## Instruktioner

I denna uppgift ska du lära dig mer om filrättigheter. Läs informationen nedan under rubriken "Rättigheter" och gör följande saker. Skriv gärna ner svaren på frågorna.

1. Vilka rättigheter är det på filen `konto.txt` på din användare och vilka har rätt att göra ändringar i den?
2. Vilka rättigheter är det på mappen `public_html/` och vilka har rätt att se innehållet i den?
3. Vilket `chmod`-kommando bör du köra för att ge följande rättigheter till mappen `temp` och _allt_ dess innehåll?
   1. Ägaren ska kunna läsa, skriva och köra alla filer
   2. Gruppen ska kunna läsa och köra, men inte skriva
   3. Övriga ska kunna köra, men varken läsa eller skriva

## Rättigheter

För att ändra rättigheterna till en fil eller mapp använder man följande kommando:

- `chmod <rättigheter> <fil/mapp>`
- eller `chmod -R <rättigheter> <mapp>` om man vill ändra rättigheterna till allt som finns under denna mapp också

### Exempel:

- `chmod 755 /var/www/vhosts/domännamn.se/httpdocs` sätter 755 rättigheter till mappen `/var/www/vhosts/domännamn.se/httpdocs`.
- `chmod -R 755 /var/www/vhosts/domännamn.se/httpdocs` sätter 755 rättigheter till mappen `/var/www/vhosts/domännamn.se/httpdocs` och allt som ligger under denna mapp.

För att kolla rättigheterna:

- `ls -la <mapp>` eller `ll <mapp>` visar filerna som finns i denna mapp. Om ingen mapp anges visas filerna i mappen som användaren befinner sig i.

Första bokstaven är `d` om den är en mapp och `-` om den är en fil.

### 3 grupper

- Den första gruppen är user/owner rättigheter.
- Den andra gruppen är group rättigheter.
- Den tredje gruppen är others rättigheter.

### 3 bokstäver

- `r` = read permission
- `w` = write permission
- `x` = execute permission
- `-` = no permission

### Exempel på fil med 740 rättigheter:

`-rw-r----- 1 root admin 8187 2010-11-22 13:35`

- `rw-` användaren "root" har read och write rättigheter.
- `r--` "admin" gruppen har read rättigheter.
- `---` andra användare har inga rättigheter.

### I siffror

- 4 = read (r)
- 2 = write (w)
- 1 = execute (x)
- 0 = no permission (-)

### I bokstäver

- `rwx` = 4 + 2 + 1 = 7
- `r--` = 4 + 0 + 0 = 4
- `---` = 0 + 0 + 0 = 0

### Alla siffrorna

- 0 = `---` = 0 + 0 + 0
- 1 = `--x` = 0 + 0 + 1
- 2 = `-w-` = 0 + 2 + 0
- 3 = `-wx` = 0 + 2 + 1
- 4 = `r--` = 4 + 0 + 0
- 5 = `r-x` = 4 + 0 + 1
- 6 = `rw-` = 4 + 2 + 0
- 7 = `rwx` = 4 + 2 + 1