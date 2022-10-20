# Projekt - Riksdagen

I denna uppgift ska du få skapa, lägga in, radera och hämta ut information ur en databas. Den information ni ska jobba med ska ni hämta ifrån riksdagens öppna api. Mer information om hur api:et fungerar hittar du på <https://data.riksdagen.se/data/ledamoter/skapa-sokfraga-for-ledamotsdata/>

## Instruktioner

1. Skapa en tabell via phpMyAdmin i din egen databas som heter `rik_members`
2. Den ska förrutom en `id`-kolumn med `auto increment primary key` även lagra följande information:
    - `born` - året ledamoten föddes
    - `gender` - ledamotets könstillhörighet
    - `last_name` - ledamotens efternamn
    - `first_name` - ledamotens förnamn
    - `party` - ledamotens partibeteckning
    - `state` - ledamotens valkrets
    - `image` - url-adressen till en porträttbild av ledamoten
3. Utgå ifrån `index.php` och följ instruktionerna där. När man lägger till `?c=update` ska du tömma din lokala tabell, hämta ut den senaste informationen från riksdagen, lagra informationen i din databastabell och visa informationen på hemsidan.
4. Om du inte lägger till `?c=update` ska du _enbart_ visa din information du har i din databas
5. Gör det möjligt för din besökare att via exempelvis:
    - `?party=S` - endast visa S-politiker
    - `?gender=kvinna` - endast visa kvinnor
    - `?name=Åke` - endast visa ledamöter vars för- eller efternamn innehåller "Åke"
    - `?sort=born` - sortera resultaten utifrån födelseår
6. Lek vidare med ditt eget api genom att lägga till ytterligare sätt för din att påverka hämtningen av data
