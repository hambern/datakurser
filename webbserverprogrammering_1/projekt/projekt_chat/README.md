# Projekt - Chat

Följande delar på W3Schools kan vara bra att kolla på i denna uppgift:

- <https://www.w3schools.com/php/php_mysql_connect.asp>
- <https://www.w3schools.com/php/php_mysql_insert.asp>
- <https://www.w3schools.com/php/php_mysql_prepared_statements.asp>
- <https://www.w3schools.com/php/php_mysql_select.asp>
- <https://www.w3schools.com/php/php_mysql_delete.asp>
- <https://www.w3schools.com/php/php_mysql_update.asp>

Vi ska bygga en gemensam chat. Vi ska använda den gemensamma `student_chat`-databasen och bygga varsitt interface till den. Interfacet får se ut hur som helst. Rekommendationen är att du använder PHP, HTML och CSS, men vill du lösa uppgiften på annat sätt är det okej. Tanken är att vi alla ska bygga varsin chat, som alla jobbar emot samma databas och som alltså kommer att ha tillgång till samma användare och samma inlägg.

## Instruktioner

Du ska bygga en fungerande chat som uppfyller följande kriterier:

1. Man ska kunna skapa en användare och logga in
2. Man ska kunna läsa och skriva meddelanden
3. Koden ska vara utförligt kommenterad
4. I koden ska du skilja mellan presentation och logik
5. Applikationen ska vara säker från SQL-injektioner
6. Applikationen ska ha en säker användarhantering

## Tabeller

De tabeller vi har att leka med är följande:

~~~
mysql> DESC users;
+------------+--------------+------+-----+-------------------+-------------------+
| Field      | Type         | Null | Key | Default           | Extra             |
+------------+--------------+------+-----+-------------------+-------------------+
| id         | int unsigned | NO   | PRI | NULL              | auto_increment    |
| first_name | varchar(100) | NO   |     | NULL              |                   |
| last_name  | varchar(100) | NO   |     | NULL              |                   |
| email      | varchar(50)  | NO   |     | NULL              |                   |
| password   | varchar(255) | NO   |     | NULL              |                   |
| token      | varchar(255) | YES  |     | NULL              |                   |
| created_at | datetime     | NO   |     | CURRENT_TIMESTAMP | DEFAULT_GENERATED |
| updated_at | datetime     | NO   |     | CURRENT_TIMESTAMP | DEFAULT_GENERATED |
| token_at   | datetime     | YES  |     | NULL              |                   |
+------------+--------------+------+-----+-------------------+-------------------+
9 rows in set (0.00 sec)
~~~

och

~~~
mysql> DESC posts;
+------------+----------+------+-----+-------------------+-------------------+
| Field      | Type     | Null | Key | Default           | Extra             |
+------------+----------+------+-----+-------------------+-------------------+
| id         | int      | NO   | PRI | NULL              | auto_increment    |
| user_id    | int      | NO   |     | NULL              |                   |
| content    | text     | NO   |     | NULL              |                   |
| created_at | datetime | NO   |     | CURRENT_TIMESTAMP | DEFAULT_GENERATED |
+------------+----------+------+-----+-------------------+-------------------+
4 rows in set (0.00 sec)
~~~

## Användare

### Förbereda PHP-skriptet

För att kunna skapa användare måste du skapa ett PHP-skript som ansluter till din MySQL-databas.

```php
$servername = "localhost";
$username = "student";
$password = "student";
$dbname = "student_chat";

// Skapa anslutning
$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollera anslutning
if ($conn->connect_error) {
    die("Anslutning misslyckades: " . $conn->connect_error);
}
```

Utgå gärna ifrån filen [index.php](index.php) du hittar i denna mapp.

### Samla användarinformation

Skapa ett formulär där du kan ange användarinformation. Exempelvis `first_name`, `last_name`, `email` och `password`.

### Olika sidor

Tänk på att du kan använda dig av olika sidor. Du kan t.ex. använda följande struktur:

- `index.php` - Välkomnar användare och ber den att antingen logga in eller registrera sig via två olika formulär.
- `register.php` - Kontrollerar och sparar formulärdatan och vidarebefordar användaren till `chat.php`.
- `login.php` - Kontrollerar formulärdatan och vidarebefordar användaren till `chat.php`.
- `chat.php` - Är själva chatten där man kan läsa och skriva meddelanden.
- `logout.php` - Tar bort satt session och vidarebefordrar användaren till `index.php`

Detta är bara ett förslag och du är fri att själv skapa ditt flöde.

### Hasha lösenordet
Använd PHP-funktionen `password_hash()` för att säkert hasha lösenordet innan du sparar det i databasen.

```php
$hashed_pwd = password_hash($_POST['password'], PASSWORD_BCRYPT);
```

### Kontrollera efter dubletter

Innan du lagrar en ny användare måste du kontrollera så att e-postadressen (som vi använder vid inloggning) inte redan finns i databasen. Det gör du genom en select-fråga och metoden `num_rows`.

~~~php
$sql = "SELECT * FROM users WHERE email = ' . $_POST['email'] . '";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Det finns redan en användare med den e-postadressen";
}
~~~

### Lägg till en användare i databasen

Skapa en SQL-fråga för att infoga den nya användaren i `users`-tabellen. Använd PHP-variabler för att hantera användarindata.

```php
$sql = "INSERT INTO users (first_name, last_name, email, password)
VALUES ('" . $_POST['first_name'] . "', '" . $_POST['last_name'] . "', '" . $_POST['email'] . "', '" . $hashed_pwd . "')";

if ($conn->query($sql) === TRUE) {
    echo "Ny användare skapad!";
} else {
    echo "Fel: " . $sql . "<br>" . $conn->error;
}
```

### Jämför lösenordet med det hashade Lösenordet

När du sedan ska logga in behöver du jämföra det angivna lösenordet med det lösenord som finns i databasen. Använd då `password_verify()`.

```php
if (password_verify($password, $hashed_pwd)) {
    echo "Inloggning lyckades!";
} else {
    echo "Felaktigt lösenord.";
}
```

Själva inloggningen kan du rent tekniskt lösa på lite olika sätt. Jag rekommenderar att du genererar en slumpmässig token, lagrar den i `users.token` och därefter lagrar samma token i `$_SESSION['token]`. Du kan då sedan kontrollera om `$_SESSION['token']` är satt och matcha den emot rätt användare.

### Stäng anslutningen

Stäng databasanslutningen när du är klar.

```php
$conn->close();
```

## Inlägg

Inlägg skapas på samma sätt som användare. Det enda kluriga du där måste tänka på att på något sätt registrera *vilken* användare som inlägget skapats av. Det gör du genom att ange användarens `id` i `user_id`-fältet.

## Viktigt

- Använd en säker metod för att hantera lösenord, som `password_hash()`. Lagra aldrig lösenord okrypterat i din databas.
- Kontrollera alltid användarindata för att undvika SQL-injektioner. Detta får du dock lägga till själv med hjälp av W3Schools: <https://www.w3schools.com/php/php_mysql_prepared_statements.asp> eller [läs igenom denna lektion](../../lektioner/skapa_databaser/README.md)
- Försök följa kodstandarden [PSR-2](https://www.php-fig.org/psr/psr-2/) när du skriver din PHP. Det är en standardmodell för hur PHP-dokument bör utformas.

## Bedömningsmatris

| E | C | A |
|---|---|---|
| Presentations­logiken i begränsad utsträckning är skild från applikationens övriga logik | Presentations­logiken är skild från applikationens övriga logik | |
| Koden är i begränsad utsträckning läsbar och översiktligt kommenterad | Koden följer en given kodningsstandard och är översiktligt kommenterad | Koden följer en given kodningsstandard och är utförligt kommenterad |
| Produkten är av tillfredsställande kvalitet och följer etablerad god praxis | | Produkten är av god kvalitet och följer etablerad god praxis |
| Eleven identifierar ett fåtal sårbarheter eller hot och vidtar enkla åtgärder för att förhindra att produkten utnyttja | Eleven identifierar sårbarheter eller hot och vidtar åtgärder för att förhindra att produkten utnyttjas | Eleven identifierar flera sårbarheter eller hot och vidtar avancerade åtgärder för att förhindra att produkten utnyttjas |