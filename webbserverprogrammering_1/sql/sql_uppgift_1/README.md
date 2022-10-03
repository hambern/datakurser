# SQL - Uppgift 1

I den här uppgiften ska du få lära dig att logga in på en databas och titta på dess innehåll. Poängen är att du ska lära dig hur du navigerar dig fram i databasen via terminalen.

## Instruktioner

1. Logga in i MySQL med terminalkommandot: `mysql -u select -p -h localhost`. Ange lösenordet `select` när du ombeds göra det. `-u` står för "user", `-p` står för att du ska ange lösenord och `-h` står för "host".
2. Ange nu MySQL-kommandot: `SHOW DATABASES;` (glöm inte det avslutande semikolonet) för att visa alla databaser du har tillgång till.
3. Välj vilken databas du vill använda med kommandot: `USE select;`.
4. För att se alla tabeller i databasen anger du kommandot: `SHOW TABLES;` .
5. För att se hur en viss tabell ser ut anger du kommandot: `DESC birds;`.
