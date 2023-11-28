# SQL - Uppgift 5

I denna uppgift ska du få se hur du kan länka ihop tre olika databastabeller. Du ska jobba i terminalen och skriva dina svar i en fil som heter `sql_uppgift_5.md` i mappen `sql`. Läs gärna följande delar i W3Schools:

- <https://www.w3schools.com/mysql/mysql_join.asp>
- <https://www.w3schools.com/mysql/mysql_join_inner.asp>
- <https://www.w3schools.com/mysql/mysql_join_left.asp>
- <https://www.w3schools.com/mysql/mysql_join_right.asp>
- <https://www.w3schools.com/mysql/mysql_count_avg_sum.asp>
- <https://www.w3schools.com/mysql/mysql_groupby.asp>
- <https://www.w3schools.com/mysql/mysql_having.asp>

## Tabellerna

I databasen `student_select` finns följande tabeller du ska använda till följande uppgifter:

~~~
mysql> DESC users;
+------------+------------+------+-----+---------+----------------+
| Field      | Type       | Null | Key | Default | Extra          |
+------------+------------+------+-----+---------+----------------+
| id         | int        | NO   | PRI | NULL    | auto_increment |
| login      | mediumtext | NO   |     | NULL    |                |
| first_name | mediumtext | NO   |     | NULL    |                |
| last_name  | mediumtext | NO   |     | NULL    |                |
+------------+------------+------+-----+---------+----------------+
4 rows in set (0.00 sec)
~~~

~~~
mysql> DESC birds;
+-------+------------+------+-----+---------+----------------+
| Field | Type       | Null | Key | Default | Extra          |
+-------+------------+------+-----+---------+----------------+
| id    | int        | NO   | PRI | NULL    | auto_increment |
| name  | mediumtext | NO   |     | NULL    |                |
| sort  | int        | NO   |     | 0       |                |
+-------+------------+------+-----+---------+----------------+
3 rows in set (0.01 sec)
~~~

~~~
mysql> DESC observations;
+---------+--------------+------+-----+-------------------+-------------------+
| Field   | Type         | Null | Key | Default           | Extra             |
+---------+--------------+------+-----+-------------------+-------------------+
| id      | int          | NO   | PRI | NULL              | auto_increment    |
| user_id | int          | NO   | MUL | 0                 |                   |
| bird_id | int          | NO   | MUL | 0                 |                   |
| date    | datetime     | NO   | MUL | CURRENT_TIMESTAMP | DEFAULT_GENERATED |
| plot    | int unsigned | NO   |     | 0                 |                   |
| info    | mediumtext   | NO   |     | NULL              |                   |
+---------+--------------+------+-----+-------------------+-------------------+
6 rows in set (0.00 sec)
~~~

## Instruktioner

I `student_select` finns tabellerna `users`, `birds` och `observations`. De hör på så sätt att flera `users` kan observera flera `birds`. Detta innebär att varje `bird` också kan bli observerad av flera `users`. Detta är en användbar relationstyp som tillåter saker i en tabell höra ihop med en sak i en annan tabell, via en tredje tabell - i detta fall tabellen `observations`. Använd dessa tabeller för att svara på följande frågor:

1. Hur ser den fråga ut som listar de 50 senaste fågelobservationerna på detta sätt?

~~~
+------------+-----------------+-------------+---------------------+
| first_name | last_name       | name        | date                |
+------------+-----------------+-------------+---------------------+
| Jörgen     | Wiklund         | Strömstare  | 2006-01-22 22:23:36 |
| Jörgen     | Wiklund         | Storskrake  | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Sparvhök    | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Fiskmås     | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Gråtrut     | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Vittrut     | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Tamduva     | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Sidensvans  | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Talltita    | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Svartmes    | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Blåmes      | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Talgoxe     | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Skata       | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Kaja        | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Grå kråka   | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Pilfink     | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Grönfink    | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Gråsiska    | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Domherre    | 2006-01-22 22:22:32 |
| Jörgen     | Wiklund         | Gulsparv    | 2006-01-22 22:22:32 |
| Helen      | Forsgren        | Knipa       | 2006-01-22 22:14:43 |
| Helen      | Forsgren        | Gråtrut     | 2006-01-22 22:14:43 |
| Helen      | Forsgren        | Björktrast  | 2006-01-22 22:14:43 |
| Gunn       | Collin          | Björktrast  | 2006-01-22 21:03:25 |
| Liam       | Martin          | Sångsvan    | 2006-01-22 17:49:13 |
| Liam       | Martin          | Alfågel     | 2006-01-22 17:49:13 |
| Liam       | Martin          | Salskrake   | 2006-01-22 17:49:13 |
| Liam       | Martin          | Varfågel    | 2006-01-22 17:49:13 |
| Liam       | Martin          | Domherre    | 2006-01-22 17:49:13 |
| Johanna    | Martin          | Sångsvan    | 2006-01-22 15:44:12 |
| Johanna    | Martin          | Alfågel     | 2006-01-22 15:44:12 |
| Johanna    | Martin          | Salskrake   | 2006-01-22 15:44:12 |
| Johanna    | Martin          | Varfågel    | 2006-01-22 15:44:12 |
| Johanna    | Martin          | Domherre    | 2006-01-22 15:44:12 |
| Jan        | Schützer        | Orre        | 2006-01-21 23:14:19 |
| Hasse      | Bäckström       | Grönsiska   | 2006-01-21 16:04:50 |
| Hasse      | Bäckström       | Nötväcka    | 2006-01-21 16:01:57 |
| Hasse      | Bäckström       | Grönfink    | 2006-01-21 16:01:57 |
| Hasse      | Bäckström       | Steglits    | 2006-01-21 16:01:57 |
| Hasse      | Bäckström       | Grönsiska   | 2006-01-21 16:01:57 |
| Anna       | Lindgren        | Snösiska    | 2006-01-20 14:44:11 |
| Tony       | Hagelqvist      | Talgoxe     | 2006-01-18 21:25:47 |
| Anita      | Bäckström       | Björktrast  | 2006-01-16 17:02:27 |
| Anita      | Bäckström       | Steglits    | 2006-01-16 17:02:27 |
| Peeter     | Boldt-Christmas | Bofink      | 2006-01-15 21:05:11 |
| Jan        | Schützer        | Gräsand     | 2006-01-15 20:18:45 |
| Jan        | Schützer        | Ormvråk     | 2006-01-15 20:18:45 |
| Jan        | Schützer        | Kungsfågel  | 2006-01-15 20:18:45 |
| Jan        | Schützer        | Stare       | 2006-01-15 20:18:45 |
| Jan        | Schützer        | Pilfink     | 2006-01-15 20:18:45 |
+------------+-----------------+-------------+---------------------+
50 rows in set (0.03 sec)
~~~

2. Vilken fråga behöver du ställa för att få detta svar?

~~~
+------------+-----------------+--------------+
| first_name | last_name       | observations |
+------------+-----------------+--------------+
| Jörgen     | Wiklund         |          490 |
| Jan        | Schützer        |          489 |
| Liam       | Martin          |          406 |
| Joakim     | Forsgren        |          397 |
| Helen      | Forsgren        |          395 |
| Johanna    | Martin          |          360 |
| Fritz      | Forsgren        |          329 |
| Anita      | Bäckström       |          321 |
| Hasse      | Bäckström       |          291 |
| Anna       | Lindgren        |          290 |
| Ulla       | Forsgren        |          253 |
| Nina       | Ödmark          |          224 |
| Gunn       | Collin          |          202 |
| Jeanette   | Bäckström       |          194 |
| Mikael     | Ödmark          |          184 |
| Kristina   | Wiklund         |          166 |
| Kajsa      | Forsgren        |          157 |
| Tony       | Hagelqvist      |          155 |
| Edvin      | Forsgren        |          155 |
| Åke        | Collin          |          147 |
| Julia      | Ödmark          |           94 |
| Martin     | Edman           |           86 |
| Leif       | Andersson       |           77 |
| Åsa        | Wanhainen       |           63 |
| Anette     | Andersson       |           52 |
| Oskar      | Forsgren        |           48 |
| Felix      | Ödmark          |           48 |
| Peeter     | Boldt-Christmas |           45 |
| Mattis     | Gustavsson      |           42 |
| Jonas      | Forsgren        |           33 |
| jessica    | Andersson       |            5 |
| Margareta  | Solax           |            5 |
+------------+-----------------+--------------+
32 rows in set (0.06 sec)
~~~

3. Vilken fråga bör du ställa för att få denna lista över de mest observerade fåglarna?

~~~
+-------------------+--------------+
| name              | observations |
+-------------------+--------------+
| Skata             |           79 |
| Talgoxe           |           78 |
| Grå kråka         |           76 |
| Blåmes            |           74 |
| Pilfink           |           71 |
| Bofink            |           70 |
| Björktrast        |           70 |
| Större hackspett  |           69 |
| Grönfink          |           69 |
| Fiskmås           |           69 |
+-------------------+--------------+
10 rows in set (0.08 sec)
~~~