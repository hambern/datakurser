# Skapa en databasdriven gästbok

### Syfte
Denna uppgift syftar till att introducera dig till MySQL och Git, två grundläggande verktyg inom webbserverprogrammering. Genom att omvandla din tidigare skapade gästbok till en databasdriven applikation får du praktisk erfarenhet av att skapa och hantera databaser samt använda versionshantering för att följa utvecklingen av ditt projekt.

### Mål
Efter att ha slutfört denna uppgift ska du kunna:
- Använda MySQL för att skapa och hantera databastabeller.
- Använda PHP för att kommunicera med en MySQL-databas.
- Använda Git för att hantera versionshantering i ditt projekt.
- Skapa, läsa och visa data från en databas i en webbapplikation.

### Beskrivning


#### 1. Skapa en tabell i din MySQL-databas:
   - Logga in på din MySQL-databas via phpMyAdmin <https://admin.student.oedu.se> eller kommandoraden.
   - Skapa en tabell för att lagra gästboksinlägg:
     ```sql
     CREATE TABLE guestbook_posts (
         id INT AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(100) NOT NULL,
         message TEXT NOT NULL,
         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );
     ```

#### 2. Anslut PHP till din MySQL-databas:
   - Skapa ett PHP-skript som ansluter till databasen:
     ```php
     <?php
     $servername = "localhost";
     $username = "ditt_användarnamn";
     $password = "ditt_lösenord";
     $dbname = "ditt_användarnamn";

     // Skapa anslutning
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Kontrollera anslutning
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     ?>
     ```

#### 3. Lagra gästboksinlägg i databasen:
   - Ändra ditt formulär så att det skickar data till databasen:
     ```php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $name = $_POST['name'];
         $message = $_POST['message'];

         $sql = "INSERT INTO guestbook_posts (name, message) VALUES ('$name', '$message')";

         if ($conn->query($sql) === TRUE) {
             $message = "New record created successfully";
         } else {
             $message = "Error: " . $sql . "<br>" . $conn->error;
         }
     }
     ```

#### 4. Visa gästboksinlägg från databasen:
   - Hämta och visa alla gästboksinlägg på din sida:
     ```php
      <?php
      $sql = "SELECT id, name, message, created_at FROM guestbook_posts ORDER BY created_at DESC";
      $result = $conn->query($sql);
      ?>

      <?php while($row = $result->fetch_assoc()) : ?>
      
        <div>
          <h3><?= $row['name'] ?></h3>
          <p><?= $row['message'] ?></p>
          <p><?= $row['created_at'] ?></p>
        </div>

      <?php else ?>

        <p>No post found</p>

      <?php endif ?>
     ```

#### 5. Skapa ett Git-repository
   - Skapa en lokal kopia av din befintliga gästbok om du inte redan har det.
   - Gå till din projektmapp och initiera ett Git-repository:
     ```sh
     git init
     ```
   - Lägg till alla filer från din ursprungliga gästbok och gör din första commit:
     ```sh
     git add .
     git commit -m "Initial commit of guestbook project"
     ```

#### 6. Versionshantering med Git:
   - Gör en commit varje gång du gör en betydande ändring i koden. Fortsätt att använda Git för att hantera alla framtida ändringar av ditt projekt:
     ```sh
     git add .
     git commit -m "Added database integration to guestbook"
     ```

#### 7. Skapa SSH-nyckel
- Generera en SSH-nyckel:
   ```sh
   ssh-keygen
   ```
- Tryck **Enter** tills du är tillbaka i prompten (ingen passphrase behövs om du inte vill ha en).
- Kopiera nyckeln:
   ```sh
   cat ~/.ssh/id_rsa.pub
   ```

#### 8. Lägg till SSH-nyckeln i GitLab
- Gå till [GitLab](https://gitlab.com) och logga in.
- Gå till **Profile settings** → **SSH Keys**.
- Klistra in nyckeln och klicka på **Add key**.

#### 9. Skapa ett tomt GitLab-repository (utan README)
- Gå till **New Project** på GitLab.
- Välj **Create blank project**.
- Namnge ditt projekt, exempelvis `guestbook`.
- Avmarkera alternativet för att skapa en README (lämna det tomt för att undvika merge-konflikter).
- Klicka på **Create project**.

#### 10. Länka och synka ditt lokala repository med GitLab
- Länka ditt lokala repository med SSH:
   ```sh
   git remote add origin git@gitlab.com:ditt_användarnamn/guestbook.git
   ```
- Pusha din kod till GitLab:
   ```sh
   git push -u origin master
   ``` 

Det här formatet gör det lite enklare och tydligare att följa stegen i din process.

### Bedömning

| **Kriterium**              | **Betyg E**                                        | **Betyg C**                                  | **Betyg A**                            |
|----------------------------|---------------------------------------------------|--------------------------------------------------|---------------------------------------------------|
| **Databasanvändning**       | Skapa och hantera tabeller i MySQL.               | Effektiv användning av MySQL med parametrar.      | Användning av avancerade SQL-operationer.          |
| **Versionshantering**       | Grundläggande användning av Git för versionshantering. | Regelbundna commits med tydliga meddelanden.      | Avancerad användning av Git, inklusive branching.  |
| **PHP-integration**         | Enkel PHP-kod används för att interagera med databasen. | PHP-kod är strukturerad och följer bästa praxis.  | PHP-kod är välstrukturerad och säker.              |

#### Tips och resurser
- [W3Schools - MySQL Tutorial](https://www.w3schools.com/php/php_mysql_intro.asp)
- [PHP Official Documentation](https://www.php.net/manual/en/)

Denna uppgift hjälper dig att snabbt komma in i MySQL och Git samt att skapa en fungerande databasdriven gästbok, vilket ger dig en solid grund för kommande projekt i Webbserverprogrammering 1.