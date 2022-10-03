# SQL - Uppgift 1

I den här uppgiften ska du få lära dig att logga in på en databas och titta på dess innehåll. Poängen är att du ska lära dig hur du navigerar dig fram i databasen via terminalen. Läs följande sidor på W3Schools:

- <https://www.w3schools.com/sql/default.asp>
- <https://www.w3schools.com/sql/sql_intro.asp>
- <https://www.w3schools.com/sql/sql_select.asp>
- [cheatsheet.md](cheatsheet.md)

## Kom igång

1. Logga in i MySQL med terminalkommandot: `mysql -u select -p -h localhost`. Ange lösenordet `select` när du ombeds göra det. `-u` står för "user", `-p` står för att du ska ange lösenord och `-h` står för "host".
2. Ange nu MySQL-kommandot: `SHOW DATABASES;` (glöm inte det avslutande semikolonet) för att visa alla databaser du har tillgång till.
3. Välj vilken databas du vill använda med kommandot: `USE select;`
4. För att se alla tabeller i databasen anger du kommandot: `SHOW TABLES;` 
5. För att se hur en viss tabell ser ut anger du kommandot: `DESC birds;`
6. För att se alla rader i tabellen bird anger du kommandot: `SELECT * FROM birds`

## Instruktioner

1. Skapa filen `sql_uppgift_1.md` i mallen `sql/` i ditt eget respository
2. Besvara följande frågor utifrån tabellen `names`. Använd gärna [cheatsheet.md](cheatsheet.md):
    
    1. Visa alla personer har ett efternamn som slutar på "son"?
    2. Visa alla personer har ett förnamn som inte innehåller "a"?
    3. Visa alla personer som har både ett för- och ett efternamn som börjar på "e" och du vill har dem sorterade efter förnamn?
    4. Hur många rader innehåller tabellen?

3. Besvara följande frågor utifrån tabellen `students`:
    
    5. Hur många elever är kvinnor och har ett efternamn som börjar på "An"?
    6. Du vill endast ha ut den äldsta eleven
    7. Du vill endast ha ut den yngsta eleven
    8. Du vill ha alla som bor på "Storgatan" eller "Skogsvägen"

4. Spara filen och gitta in den till ditt repository. Lämna därefter in url-addressen till filen på GitLab.
