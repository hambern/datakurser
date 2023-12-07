# SQL Cheatsheet

## Grundläggande select
~~~sql
-- Allt från tabellen students:
SELECT * FROM students;
 
-- Allt från tabellen students där villkoret efter where är uppfyllt, % betyder fritt antal av valfira tecken like används för att jämföra strängar och man måste sätta strängen inom enkelsnuff.
SELECT * FROM students WHERE first_name LIKE '%et%';
 
-- first_name och gender från tabellen students:
SELECT first_name, gender FROM students;
 
-- Alla med ett id mindre än 10:
SELECT * FROM students WHERE id < 10;
 
-- 5Alla med ett id större än eller lika med 10 och mindre än eller lika med 15:
SELECT * FROM students WHERE id >= 10 AND id <= 15;
 
-- 5Alla med ett id större än eller lika med 10 eller mindre än eller lika med 15, OBS! Kommer ju att bli alla...:
SELECT * FROM students WHERE id >= 10 OR id <= 15;
 
-- Alla som har ett last_name som slutar på ström: 
SELECT * FROM students WHERE last_name LIKE '%ström';
 
-- Alla som har ett last_name som inte slutar på ström: 
SELECT * FROM students WHERE last_name NOT LIKE '%ström';
 
-- Allt från tabellen students men visar bara de 4 första raderna:
SELECT * FROM students LIMIT 4;
 
-- Allt från tabellen students sorterat på last_name stigande men hoppar över de 14 första och visar sedan 20 rader till:
SELECT * FROM students ORDER BY last_name LIMIT 14,20;
 
-- Allt från tabellen students sorterat på last_name fallande men visar bara de 4 första raderna:
SELECT * FROM students ORDER BY last_name DESC LIMIT 4;
 
-- Allt från tabellen students sorterat på last_name fallande, first_name stigande men visar bara de 4 första raderna:
SELECT * FROM students ORDER BY last_name DESC, first_name ASC LIMIT 4;
~~~

## Räkning och summering

~~~sql
-- Visa endast unika efternamn
SELECT DISTINCT last_name FROM students;

-- Räkna antalet kvinnor och män bland studenterna
SELECT gender, COUNT(*) AS count FROM students GROUP BY gender;

-- Räkna antalet av varje valör i valutan kronor
SELECT valor, COUNT(*) AS valors FROM money WHERE currency = 'Kr' GROUP BY valor;

-- Lägg till den totala summan i varje valör
SELECT valor, COUNT(*) AS count, valor * COUNT(*) AS sum FROM money WHERE currency = 'KR' GROUP BY valor;

-- Räkna antalet och den totala summan pengar i varje valuta
SELECT currency, COUNT(*) AS count, SUM(valor) AS sum FROM money GROUP BY currency;
~~~

## Relationer och alias

~~~sql

-- Alla observationer tillsammans med användar-informationen
SELECT date, first_name, last_name FROM observations AS o INNER JOIN users AS u ON o.user_id = u.id;

-- En kortare variant av samma fråga
SELECT date, first_name, last_name FROM observations o JOIN users u ON o.user_id = u.id;

-- Hämtar också ut vilken fågel som skådades
SELECT date, first_name, last_name, name FROM observations o JOIN users u ON o.user_id = u.id JOIN birds as b ON o.bird_id = b.id;

-- Hämtar ut hur många observationer varje användare gjort av varje fågel
SELECT date, first_name, last_name, name, COUNT(*) count FROM observations o JOIN users u ON o.user_id = u.id JOIN birds as b ON o.bird_id = b.id GROUP BY user_id, bird_id;

-- En tydligare visualisering av ovanstående fråga
SELECT  date, first_name, last_name, name, COUNT(*) count
FROM observations o
JOIN users u ON o.user_id = u.id
JOIN birds as b ON o.bird_id = b.id
GROUP BY user_id, bird_id;

-- Hämtar alla observerade fåglar
SELECT name, COUNT(*) count FROM observations o JOIN birds b ON o.bird_id = b.id GROUP BY bird_id ORDER BY count DESC;

-- Hämtar även oobserverade fåglar
SELECT name, COUNT(bird_id) count FROM observations o RIGHT JOIN birds b ON o.bird_id = b.id GROUP BY bird_id ORDER BY count DESC;

-- Hämtar alla användare och visar antalet observationer
SELECT first_name, last_name, COUNT(bird_id) count FROM observations o RIGHT JOIN users u ON o.user_id = u.id GROUP BY user_id ORDER BY count DESC;
~~~