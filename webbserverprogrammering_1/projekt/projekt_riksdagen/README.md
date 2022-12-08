# Projekt - Riksdagen

I denna uppgift ska du få skapa, lägga in, radera och hämta ut information ur en databas. Den information ni ska jobba med ska ni hämta ifrån riksdagens öppna api. Mer information om hur api:et fungerar hittar du på <https://data.riksdagen.se/data/ledamoter/skapa-sokfraga-for-ledamotsdata/>. Läs följande delar i W3Schools innan du sätter igång:

### MySQL

- <https://www.w3schools.com/mysql/mysql_datatypes.asp>
- <https://www.w3schools.com/mysql/mysql_ref_functions.asp>
- <https://www.w3schools.com/mysql/mysql_autoincrement.asp>
- <https://www.w3schools.com/mysql/func_mysql_truncate.asp>

### PHP

- <https://www.w3schools.com/php/php_mysql_intro.asp>
- <https://www.w3schools.com/php/php_mysql_connect.asp>
- <https://www.w3schools.com/php/php_mysql_insert.asp>
- <https://www.w3schools.com/php/php_mysql_insert_multiple.asp>
- <https://www.w3schools.com/php/php_mysql_select.asp>
- <https://www.w3schools.com/php/php_mysql_delete.asp>
- <https://www.w3schools.com/php/php_mysql_select_limit.asp>

## Visual Studio Code

Du får gärna fortsätta jobba i terminalen även här. Men till projekt av den här storleken underlättar det onekligen att använda sig av en IDE (Integrated Development Environment). Du är vid det här laget säkert bekväm att arbeta i PhpStorm, och det kan du göra även med denna uppgift. Men ge gärna Visual Studio Code en chans i denna uppgift:

- Ladda ner programmet här: <https://code.visualstudio.com/>
- Installera därefter extension-paketet "Remote - SSH": <https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-ssh>

Då kan du arbeta direkt emot din utvecklingsserver utan att behöva ha några lokala kopior i din egen dator.

## Instruktioner

Din uppgift är att skapa ett eget API som spottar ur sig riksdagsledamöter. Använd följande plugins till Chrome för att underlätta arbetet:

- [JSON Viewer](https://chrome.google.com/webstore/detail/json-viewer/gbmdgpbipfallnflgajpaliibnhdgobh) för att formattera json-koden på ett läsbart sätt
- [Talend API Tester](https://chrome.google.com/webstore/detail/talend-api-tester-free-ed/aejoelaoggembcahagimdiliamlcdmfm) för att testa ditt API

1. Skapa en tabell via phpMyAdmin i din egen databas som heter `rik_members`
2. Den ska förrutom en `id`-kolumn med `auto increment primary key` även lagra följande information:
    - `born` - året ledamoten föddes. Använd `YEAR`
    - `gender` - ledamotets könstillhörighet. Använd `ENUM`
    - `last_name` - ledamotens efternamn. Använd `VARCHAR`
    - `first_name` - ledamotens förnamn. Använd `VARCHAR`
    - `party` - ledamotens partibeteckning. Använd `VARCHAR`
    - `state` - ledamotens valkrets. Använd `VARCHAR`
    - `image` - url-adressen i textformat till en porträttbild av ledamoten. Använd `VARCHAR`
    - `updated_at` - klockslaget informationen uppdaterades senast. Använd `DATETIME`. Använd gärna `NOW()` som default.
3. Utgå ifrån `index.php` och `riksdagen_api.php` du hittar i denna mapp.
    - Innan du gör något annat bör du skapa en databaskoppling. Använd gärna den objektorienterade varianten på: <https://www.w3schools.com/php/php_mysql_connect.asp>
4. När man lägger till `?do=update` ska du:
    - Tömma din lokala tabell. Använd `TRUNCATE` <https://www.w3schools.com/mysql/func_mysql_truncate.asp>
    - Hämta ut den senaste informationen från riksdagen. Använd `get_riksdagen_members()`
    - Lagra informationen i din databastabell. Använd `INSERT`
    - Hämta ut informationen från databasen. Använd `SELECT`
    - Visa den på hemsidan i json-format
5. Om du inte lägger till `?do=update` ska du _enbart_ visa din information du har i din databas. Inget anrop ska då göras till riksdagens API.
6. Gör det möjligt för din besökare att via post-anrop (för att skicka post-anrop kan du använda Talend API Tester):
    - `$_POST['party'] = S` - visa endast S-politiker
    - `$_POST['gender'] = kvinna` - visa endast kvinnor
    - `$_POST['name'] = Åke` - visa endast ledamöter vars för- eller efternamn innehåller "Åke"
    - `$_POST['sort'] = born` - sortera resultaten utifrån födelseår
    - `$_POST['limit'] = 3` - endast visa tre ledamöter
6. Försök gärna att få ditt skript att - om personen redan finns i databasen - uppdatera informationen istället för att först radera den
7. Kolla så att din kod följer dessa principer <https://blog.unitybuddy.com/top-10-coding-principles-every-developer-must-know>
8. Lek gärna vidare med ditt api genom att lägga till ytterligare columner i din databas och ytterligare sätt för användarna av ditt API att påverka hämtningen av data
