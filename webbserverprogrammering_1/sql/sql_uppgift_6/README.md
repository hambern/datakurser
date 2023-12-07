# SQL - Uppgift 6

I denna uppgift ska du få skapa dina egna databastabeller och då behöver du veta ett och annat om datatyper. Börja med att läsa följande sidor:

- Skapa och underhålla databaser: [Läs igenom denna lektion](../../lektioner/skapa_databaser/README.md)
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
- **ingredient_recipe** (`ingredient_id`, `recipe_id`, `quantity`, `remarks`)

### 2. Book reviews
- **members** (`id`, `name`, `email`, `membership_date`)
- **books** (`id`, `title`, `author`, `genre`)
- **book_member** (`book_id`, `member_id`, `reading_date`, `rating`)

### 3. Playlists
- **playlists** (`id`, `playlist_name`, `creator`, `creation_date`)
- **songs** (`id`, `title`, `artist`, `album`)
- **playlist_song** (`playlist_id`, `song_id`, `play_order`)

### 4. Sport teams
- **teams** (`id`, `team_name`, `founded_year`, `city`)
- **players** (`id`, `name`, `position`, `birth_date`)
- **player_team** (`player_id`, `team_id`, `start_date`, `end_date`)

### 5. Events
- **events** (`id`, `name`, `location`, `date`)
- **persons** (`id`, `name`, `email`, `phone_number`)
- **event_person** (`event_id`, `person_id`, `registration_date`, `status`)

### 6. Courses
- **students** (`id`, `name`, `program`, `start_year`)
- **courses** (`id`, `course_name`, `credits`, `instructor`)
- **course_student** (`course_id`, `student_id`, `registration_date`, `grade`)

## Laravel Naming Convention

Laravel Naming Convention är en uppsättning riktlinjer för namngivning som används inom Laravel-ramverket för PHP. Dessa konventioner hjälper till att hålla kodbasen konsekvent och gör det enklare att förstå och underhålla koden. Här är några av de centrala principerna:

1. **Tabellnamn i pluralform**: Tabeller i en databas namnges i pluralform för att indikera att de innehåller samlingar av entiteter. Till exempel, en tabell som lagrar användarinformation skulle heta `users` istället för `user`.
2. **Snake case för kolumnnamn och tabellnamn**: Kolumnnamn och tabellnamn skrivs i snake_case, vilket innebär att ord separeras med understreck och all text är i små bokstäver. Till exempel, `created_at` eller `email_address`.
3. **Primärnycklar**: Standardnamnet för primärnyckeln är `id`. Laravel förväntar sig att varje tabell har en primärnyckel med detta namn, om inte annat anges.
4. **Främmande nycklar**: Främmande nycklar namnges enligt mönstret `[singularform_av_relaterad_tabell]_id`. Till exempel, om det finns en relation mellan en `users`-tabell och en `posts`-tabell, skulle den främmande nyckeln i `posts`-tabellen som hänvisar till `users`-tabellen vara `user_id`.
5. **Pivot-tabeller**: För många-till-många-relationer används en pivot-tabell (eller förenande tabell). Namnet på en pivot-tabell är vanligtvis en kombination av de pluraliserade namnen på de två relaterade tabellerna, sorterade i alfabetisk ordning. Till exempel, för en relation mellan `users` och `roles` skulle pivot-tabellen heta `role_user`.
6. **Timestamps**: Laravel förväntar sig att varje tabell har två tidsstämplar: `created_at` och `updated_at`. Dessa kolumner används för att automatiskt spara tidpunkter för när en post skapades och senast uppdaterades.

Dessa konventioner är djupt integrerade i Laravels Eloquent ORM (Object-Relational Mapping), vilket underlättar interaktionen med databasen genom att minska mängden nödvändig konfiguration. Genom att följa dessa konventioner kan utvecklare dra nytta av många av Laravels automatiska funktioner och göra kodbasen mer intuitiv och enhetlig.

