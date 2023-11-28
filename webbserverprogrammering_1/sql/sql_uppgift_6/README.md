# SQL - Uppgift 6

I denna uppgift ska du få skapa dina egna databastabeller och då behöver du veta ett och annat om datatyper. Börja med att läsa följande sidor:

- <https://www.w3schools.com/mysql/mysql_create_table.asp>
- <https://www.w3schools.com/mysql/mysql_drop_table.asp>
- <https://www.w3schools.com/mysql/mysql_alter.asp>
- <https://www.w3schools.com/mysql/mysql_constraints.asp>
- <https://www.w3schools.com/mysql/mysql_notnull.asp>
- <https://www.w3schools.com/mysql/mysql_unique.asp>
- <https://www.w3schools.com/mysql/mysql_primarykey.asp>
- <https://www.w3schools.com/mysql/mysql_default.asp>
- <https://www.w3schools.com/mysql/mysql_create_index.asp>
- <https://www.w3schools.com/mysql/mysql_autoincrement.asp>
- <https://www.w3schools.com/mysql/mysql_dates.asp>
- <https://www.w3schools.com/mysql/mysql_dates.asp>

## Din databas

Du ska jobba i din egen databas som ligger på student.oedu.se. Den information du behöver för att ansluta den är

- Värd: `localhost`
- Användarnamn: ditt login till student.oedu.se (två bokstäver följt av ett antal siffror)
- Lösenord: ditt lösenord till student.oedu.se (ett komplicerat autogenererat lösenord)
- Databas: ditt login

Ett smidigt sätt att redigera din databas är att använda dig av det grafiska gränssnittet på <https://admin.student.oedu.se>. Logga in med ditt användarnamn och ditt lösenord.

## Tabeller

Du får själv välja vilken typ av databas du ska skapa. Det enda jag kräver är att den består av minst tre tabeller varav den enda förenar de två övriga. Här är exempel på sådana databaser, men du är fri att själv hitta på egna varianter:

### 1. Recipes
- **recipes** (`id`, `name`, `description`, `cooking_time`)
- **ingredients** (`id`, `name`, `type`, `storage`)
- **ingredient_recipe** (`recipe_id`, `ingredient_id`, `quantity`, `remarks`)

### 2. Book reviews
- **members** (`id`, `name`, `email`, `membership_date`)
- **books** (`id`, `title`, `author`, `genre`)
- **book_member** (`member_id`, `book_id`, `reading_date`, `rating`)

### 3. Playlists
- **playlists** (`id`, `playlist_name`, `creator`, `creation_date`)
- **songs** (`id`, `title`, `artist`, `album`)
- **playlist_song** (`playlist_id`, `song_id`, `play_order`)

### 4. Sport teams
- **teams** (`id`, `team_name`, `founded_year`, `city`)
- **players** (`id`, `name`, `position`, `birth_date`)
- **player_team** (`team_id`, `player_id`, `start_date`, `end_date`)

### 5. Events
- **events** (`id`, `name`, `location`, `date`)
- **people** (`id`, `name`, `email`, `phone_number`)
- **event_participant** (`event_id`, `person_id`, `registration_date`, `status`)

### 6. Courses
- **students** (`id`, `name`, `program`, `start_year`)
- **courses** (`id`, `course_name`, `credits`, `instructor`)
- **course_student** (`student_id`, `course_id`, `registration_date`, `grade`)

