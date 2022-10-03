# Cheatsheet - Uppgift 1

~~~sql
-- Ex 1. Allt från tabellen students:
SELECT * FROM students;
 
-- Ex 2. Allt från tabellen students där villkoret efter where är uppfyllt, % betyder fritt antal av valfira tecken like används för att jämföra strängar och man måste sätta strängen inom enkelsnuff.
SELECT * FROM students WHERE first_name LIKE '%et%';
 
-- Ex 3. first_name och gender från tabellen students:
SELECT first_name, gender FROM students;
 
-- Ex 4. Alla med ett id mindre än 10:
SELECT * FROM students WHERE id < 10;
 
-- Ex 5a. Alla med ett id större än eller lika med 10 och mindre än eller lika med 15:
SELECT * FROM students WHERE id >= 10 AND id <= 15;
 
-- Ex 5b. Alla med ett id större än eller lika med 10 eller mindre än eller lika med 15, OBS! Kommer ju att bli alla...:
SELECT * FROM students WHERE id >= 10 OR id <= 15;
 
-- Ex 6. Alla som har ett last_name som slutar på ström: 
SELECT * FROM students WHERE last_name LIKE '%ström';
 
-- Ex 7. Alla som har ett last_name som inte slutar på ström: 
SELECT * FROM students WHERE last_name NOT LIKE '%ström';
 
-- Ex 8. Allt från tabellen students men visar bara de 4 första raderna:
SELECT * FROM students LIMIT 4;
 
-- Ex 9. Allt från tabellen students sorterat på last_name stigande men hoppar över de 14 första och visar sedan 20 rader till:
SELECT * FROM students ORDER BY last_name LIMIT 14,20;
 
-- Ex 10. Allt från tabellen students sorterat på last_name fallande men visar bara de 4 första raderna:
SELECT * FROM students ORDER BY last_name DESC LIMIT 4;
 
-- Ex 11. Allt från tabellen students sorterat på last_name fallande, first_name stigande men visar bara de 4 första raderna:
SELECT * FROM students ORDER BY last_name DESC, first_name ASC LIMIT 4;
~~~
