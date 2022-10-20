# SQL - Uppgift 3

I denna uppgift ska du också jobba emot student-databasen.

## Instruktioner

Logga in i MySQL med terminalkommandot: `mysql -u student -p -h localhost`. Ange lösenordet `student` när du ombeds göra det. `-u` står för "user", `-p` står för att du ska ange lösenord och `-h` står för "host". Använd sedan databasen `student_select`. I den finns det en tabell som heter `money`. Det är till denna du ska ställa dess frågor.

Skriv dina svar i en fil vid namn `sql_uppgift_3.md` under mappen `sql`.

1. Skriv en fråga som ger en rad till svar och det är hur många rader det finns i tabellen.
2. Skriv en fråga som ger en rad till svar och det är hur många rader det finns av valutan 'Kr'.
3. Skriv en fråga som visar alla rader som inte är av valutan 'Kr'.
4. Skriv en fråga som summerar hur mycket det finns av dollar i tabellen.
5. Skriv en fråga som visar vilka olika valutor som finns i tabellen. En rad per valuta. Använd `DISTINCT`
6. Skriv en fråga som visar vilka olika valörer som finns i tabellen. En rad per valör. Använd `DISTINCT`
7. Skriv en fråga som visar vilka olika valörer av varje valuta som finns i tabellen. En rad per valuta och valör. Använd `DISTINCT`
8. Om du vill veta hur många det finns av varje valör i en valuta, hur tar du reda på det? Använd `GROUP BY`. Ex på godkänt resultat för kr:

~~~sql
+----------------------+------------+
|  valor               |  quantity  |
+----------------------+------------+
|                    1 |      16308 |
|                    5 |       2648 |
|                   10 |       8124 |
|                   20 |      16277 |
|                   50 |      16687 |
|                  100 |       5484 |
|                  500 |          2 |
|                 1000 |          1 |
+----------------------+------------+
~~~

9. Om du vill veta hur mycket pengar det totalt finns i valutan Kr. Hur ser frågan ut? Använd `GROUP BY`.