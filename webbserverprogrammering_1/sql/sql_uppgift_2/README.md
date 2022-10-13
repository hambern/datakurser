# SQL - Uppgift 2

I denna uppgift ska du få testa på några av de olika funktioner som finns inbyggda i MySQL i ett labbformat. Utgå ifrån denna lista av MySQL-funktioner:

- <https://www.w3schools.com/mysql/mysql_ref_functions.asp>

## Instruktioner

-  Skapa en fil i ditt kurs-repository med namnet `sql_uppgift_2.md` i din sql-mapp. I den ska du svara på frågorna nedan.
- Logga in i MySQL med terminalkommandot: `mysql -u student -p -h localhost`. Ange lösenordet `student` när du ombeds göra det. -u står för "user", -p står för att du ska ange lösenord och -h står för "host".
- Lös följande uppgifter med mysql-prompten och anteckna dina kommandon i `sql_uppgift_2.md`:
    1. (5+3)*14
    2. Värdet av PI
    3. Arean av en cirkel med radien 4
    4. Hur skriver man 1234 binärt med hjälp av CONV
    5. Hur skriver man 1234 med basen 16 med hjälp av CONV
    6. När man jobbar med HEX koder på färger så är den högsta färgen `FFFFFF`, vilket tal är det?
    7. Vilken *tid och datum* är det just nu?
    8. Vilket *år* det är det just nu?
    9. Vilken *vecka* är det nu? Om ni får fel beror det på att man räknar veckor lite olika i världen. Fixa så att det blir rätt. Läs om WEEK och olika argument. Det finns 7 olika sätt att beräkna veckonummer på... Vilket sätt använder vi oss av i Sverige?
    10. Hur många fler dagar jag har har tillbringat på denna jord jämfört med er! (Jag är född 1982-09-21) **Tips** DATEDIFF
    11. Denna månads namn med MONTHNAME, för att få det på svenska kan man först skriva: `SET lc_time_names = 'sv_SE';`
    12. Använd `DATE_FORMAT(date,format)` för att få ut tiden just nu på formatet: '13 februari år 2009 kl 13.37'
    13. Tiden 1 timme in i framtiden. **Tips** DATE_ADD
    14. Tiden för 1 timme sedan. **Tips** DATE_SUB
