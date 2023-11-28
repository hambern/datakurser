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
+------------+-----------------+-------------------+---------------------+--------------+
| first_name | last_name       | latest_bird       | latest_observation  | observations |
+------------+-----------------+-------------------+---------------------+--------------+
| Anette     | Andersson       | Järpe             | 2004-02-13 21:09:46 |           52 |
| jessica    | Andersson       | Orre              | 2004-02-05 19:33:43 |            5 |
| Leif       | Andersson       | Skäggdopping      | 2004-05-02 21:07:19 |           77 |
| Peeter     | Boldt-Christmas | Större hackspett  | 2006-01-03 10:40:03 |           45 |
| Jeanette   | Bäckström       | Gräsand           | 2004-01-25 10:39:00 |          194 |
| Hasse      | Bäckström       | Sångsvan          | 2004-01-25 13:47:33 |          291 |
| Anita      | Bäckström       | Större hackspett  | 2004-01-25 10:11:51 |          321 |
| Gunn       | Collin          | Talltita          | 2004-02-15 10:24:37 |          202 |
| Åke        | Collin          | Blåmes            | 2004-02-14 17:14:58 |          147 |
| Martin     | Edman           | Gräsand           | 2005-01-04 20:47:32 |           86 |
| Helen      | Forsgren        | Skata             | 2004-01-12 18:38:59 |          395 |
| Edvin      | Forsgren        | Blåmes            | 2005-01-04 19:51:08 |          155 |
| Oskar      | Forsgren        | Blåmes            | 2005-01-02 11:50:04 |           48 |
| Jonas      | Forsgren        | Sångsvan          | 2004-12-25 11:20:25 |           33 |
| Ulla       | Forsgren        | Gräsand           | 2004-01-17 11:38:02 |          253 |
| Kajsa      | Forsgren        | Talgoxe           | 2004-01-14 16:46:40 |          157 |
| Fritz      | Forsgren        | Blåmes            | 2004-01-11 19:34:53 |          329 |
| Joakim     | Forsgren        | Orre              | 2004-01-11 19:11:44 |          397 |
| Mattis     | Gustavsson      | Skäggdopping      | 2005-04-17 20:41:25 |           42 |
| Tony       | Hagelqvist      | Blåmes            | 2004-02-03 08:53:53 |          155 |
| Anna       | Lindgren        | Knölsvan          | 2005-01-04 13:33:14 |          290 |
| Johanna    | Martin          | Fasan             | 2004-01-13 17:43:04 |          360 |
| Liam       | Martin          | Duvhök            | 2004-01-12 20:14:39 |          406 |
| Jan        | Schützer        | Sångsvan          | 2004-02-18 19:07:27 |          489 |
| Margareta  | Solax           | Sidensvans        | 2006-01-12 15:21:20 |            5 |
| Åsa        | Wanhainen       | Tofsvipa          | 2005-04-01 20:10:44 |           63 |
| Kristina   | Wiklund         | Sångsvan          | 2004-03-14 19:32:25 |          166 |
| Jörgen     | Wiklund         | Gräsand           | 2004-03-14 19:39:19 |          490 |
| Nina       | Ödmark          | Talgoxe           | 2004-01-12 20:35:18 |          224 |
| Felix      | Ödmark          | Skäggdopping      | 2005-05-14 09:48:16 |           48 |
| Julia      | Ödmark          | Större hackspett  | 2005-01-23 15:45:30 |           94 |
| Mikael     | Ödmark          | Knölsvan          | 2004-04-18 22:15:19 |          184 |
+------------+-----------------+-------------------+---------------------+--------------+
32 rows in set (0.09 sec)
~~~