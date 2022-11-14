# SQL - Uppgift 4

I denna uppgift ska du få se hur du kan länka ihop databastabeller. Du ska jobba i terminalen och skriva dina svar i en fil som heter `sql_uppgift_4.md` i mappen `sql`. Läs gärna följande delar i W3Schools:

- <https://www.w3schools.com/mysql/mysql_join.asp>
- <https://www.w3schools.com/mysql/mysql_join_inner.asp>
- <https://www.w3schools.com/mysql/mysql_join_left.asp>
- <https://www.w3schools.com/mysql/mysql_join_right.asp>
- <https://www.w3schools.com/mysql/mysql_count_avg_sum.asp>
- <https://www.w3schools.com/mysql/mysql_groupby.asp>
- <https://www.w3schools.com/mysql/mysql_having.asp>

## Instruktioner

I databasen `student_select` finns följande tabeller du ska använda till följande uppgifter:

~~~
mysql> DESC join_users;
+-------+--------------+------+-----+---------+----------------+
| Field | Type         | Null | Key | Default | Extra          |
+-------+--------------+------+-----+---------+----------------+
| id    | int          | NO   | PRI | NULL    | auto_increment |
| login | varchar(255) | NO   |     | NULL    |                |
| name  | varchar(255) | NO   |     | NULL    |                |
+-------+--------------+------+-----+---------+----------------+
3 rows in set (0.00 sec)
~~~

~~~
mysql> DESC join_posts;
+---------+------------+------+-----+---------+----------------+
| Field   | Type       | Null | Key | Default | Extra          |
+---------+------------+------+-----+---------+----------------+
| id      | int        | NO   | PRI | NULL    | auto_increment |
| user_id | int        | NO   | MUL | NULL    |                |
| content | mediumtext | NO   |     | NULL    |                |
| date    | datetime   | NO   |     | NULL    |                |
+---------+------------+------+-----+---------+----------------+
4 rows in set (0.00 sec)
~~~

1. Visa alla inlägg i `join_posts` som användaren med id `17` har gjort?
2. Visa alla inlägg som användaren med login `eb0027` har gjort?
3. Skriv en fråga som visar hur många inlägg användaren med id `17` har gjort (använd `COUNT`).
4. Skriv en fråga som visar hur många inlägg användaren med login `eb0027` har (använd `COUNT`).
5. Skriv en fråga som ger följande svarstabell:

~~~
+--------+-------------------------+-------+
| login  | name                    | posts |
+--------+-------------------------+-------+
| vm8563 | Victor Möller           |    12 |
| eb0027 | Emelie Boström          |    12 |
| jr0004 | Joel Rantala            |    12 |
| dm2156 | Darin Muhieddine        |    12 |
| jg0017 | Julius Gustafsson       |    11 |
| dn0007 | Didrik Nilsson          |    11 |
| js8177 | Josefin Sundström       |    11 |
| js0523 | Johan Skarin            |    11 |
| so0013 | Samuel Olofsson         |    11 |
| fo0003 | Fredrik Öberg           |    11 |
| jg0015 | Josef Gerhardsson       |    10 |
| ee7874 | Emil Eriksson           |    10 |
| ef5135 | Edvin Forsgren          |    10 |
| wn0001 | William Norberg         |    10 |
| ya0001 | Yasir Al-Latifi         |    10 |
| rg4999 | Rasmus Gustafsson       |    10 |
| jl0073 | Jim Lundin              |    10 |
| af0018 | Alva Forslund           |     9 |
| jj0020 | Jim Johansson           |     9 |
| dj9428 | David Gyll Jonsson      |     9 |
| jd0007 | Jacob Danielsson        |     8 |
| an0054 | Alexander Näslund       |     8 |
| mp0013 | Mattias Persson         |     8 |
| et0003 | Elias Tegström          |     8 |
| as0044 | André Sjöström          |     8 |
| js0015 | Jon Sellgren            |     7 |
| ss0032 | Samuel Sjöström         |     7 |
| jv0016 | Johan Vikström          |     7 |
| as0042 | Andreas Svensson        |     6 |
| hs0019 | Henrik Svensson         |     5 |
| jl5733 | Jesper Lindberg         |     5 |
| ab0043 | Alexander Bäckman       |     5 |
| mj0012 | Markus Johansson        |     4 |
| ms0005 | Martin Sjölund          |     4 |
| lv2726 | Leo Vedberg             |     3 |
| ae0042 | Alexander Eriksson      |     3 |
| pn9149 | Pelle Nordström         |     3 |
| vs0014 | Viktor Södersten        |     3 |
| mp0008 | Markus Pettersson       |     3 |
| ee2753 | Erik Elfving            |     3 |
| oa1675 | Oskar Andersson         |     2 |
| jw2123 | Joakim Wiklund          |     2 |
| ab0030 | Adrian Byström          |     2 |
| ro0002 | Robin Olsson            |     1 |
| lp0001 | Liza Pettersson         |     1 |
| an0050 | Anton Nilsson (te14)    |     1 |
| ka2211 | Khaled Al Moulla        |     0 |
| sh2998 | Simon Hägglund          |     0 |
| gn8265 | Gabriel Backman Norgren |     0 |
| jl0021 | Johan Lindström         |     0 |
| aa0024 | Adam Åström             |     0 |
| js0016 | Jonathan Söderlind      |     0 |
| dj0006 | Dennis Johansson        |     0 |
| av0018 | Albin von Ahn           |     0 |
+--------+-------------------------+-------+
~~~

7. Skriv en fråga som ger följande svarstabell, alltså bara de som inte har gjort något inlägg:

~~~
+--------+-------------------------+-------+
| login  | name                    | posts |
+--------+-------------------------+-------+
| dj0006 | Dennis Johansson        |     0 |
| ka2211 | Khaled Al Moulla        |     0 |
| gn8265 | Gabriel Backman Norgren |     0 |
| aa0024 | Adam Åström             |     0 |
| av0018 | Albin von Ahn           |     0 |
| sh2998 | Simon Hägglund          |     0 |
| jl0021 | Johan Lindström         |     0 |
| js0016 | Jonathan Söderlind      |     0 |
+--------+-------------------------+-------+
~~~
8. Denna uppgift ska du inte bara gitta upp till ditt repository utan även lämna in till vklass. Lämna in url-adressen till filen `sql_uppgift_4.md` på uppgiften "sql_uppgift_4" på Vklass.
