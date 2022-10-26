# Projekt - MVC

MVC är ett arkitekturmönster för systemutveckling. Trygve Reenskaug skapade MVC när han arbetade på Smalltalk 1979 som gästforskare vid Xerox Palo Alto Research Center (PARC) i slutet av 1970-talet. Han ville ha ett mönster som kunde användas för att strukturera alla program där användare interagerar med en stor datamängd. Hans design hade från början fyra delar: Model, View, Thing och Editor. Efter att ha diskuterat det med de andra Smalltalk-utvecklarna bestämde han sig och resten av gruppen för Model, View och Controller istället.

- _Controller_ bearbetar och svarar på händelser, som användarinteraktion, och kan framkalla ändringar i model och view.
- _Model_ utgör den information som applikationen bearbetar och arbetar i regel emot en databas.
- _View_ renderar en lämplig vy för användaren. I webbapplikationer är det här vi hittar själva HTML-koden.

![](https://upload.wikimedia.org/wikipedia/commons/b/b5/ModelViewControllerDiagram2.svg)

## MVC i praktiken

Idag byggs de allra flesta mer komplexa hemsidor utifrån MVC-principen. Detta innebär dock inte att man inför varje projekt måste börja koda hela infrastrukturen. Vanligast är att man väljer ett redan färdigt MVC-ramverk och börjar arbeta därifrån. Exempel på sådana ramverk är:

- <https://laravel.com>
- <https://codeigniter.com>
- <https://yiiframework.com>
- <https://fuelphp.com/>
- <https://cakephp.org/>

## Fördjupa dig

Fördjupa dina kunskaper om MVC-principen genom att titta på följande filmer:

[![](https://img.youtube.com/vi/DUg2SWWK18I/0.jpg)](https://www.youtube.com/watch?v=DUg2SWWK18I)

[![](https://img.youtube.com/vi/OsCTzGASImQ/0.jpg)](https://www.youtube.com/watch?v=OsCTzGASImQ&list=PLfdtiltiRHWGXVHXX09fxXDi-DqInchFD)

Titta också på den kod du hittar på:

<https://gitlab.com/Hambern/mvc>


## Instruktioner

I denna uppgift ska du skapa ditt eget MVC-ramverk. Även om det finns färdiga ramverk du kan använda är det nyttigt att sätta sig in i vad dessa ramverk faktiskt gör, och då finns det inget bättre sätt än att själv bygga ett. Jag ser gärna att du arbetar i terminalen även här. Men till projekt av den här storleken underlättar det onekligen att använda sig av exempelvis PhpStorm.

1. Ta del av materialet ovan och bilda dig en bild av vad det är du ska bygga
2. Skapa en mapp direkt under din `public_html`-mapp som heter `mvc`. Använd exempelvis kommandot `mkdir ~/public_html/mvc`
3. I den mappen ska du skapa följande mappstruktur:

~~~
├── app
│   ├── controllers
│   ├── core
│   ├── models
│   └── views
│       ├── home
│       └── users
├── public
│   ├── assets
│   └── partials
~~~

4. Nu är det dags att skapa ett nytt projekt på GitLab och gitta in ditt eget MVC-ramverk dit. Detta kan du sedan återanvända som startpunkt i dina framtida projekt.
5. Titta sedan i repositoryt <https://gitlab.com/Hambern/mvc> vilka filer som ska ligga i dessa mappar. Titta gärna i filerna men undvik att kopiera innehållet rakt av. Genom att faktiskt skriva koden själv får man en bättre hum om vad man gör.
6. Skapa de filer du behöver. Börja med `index.php` i `public`-mappen och skapa sedan de filer som behövs för att undvika felmeddelanden. Testa din kod hela tiden via webbläsaren.
7. När du fått allt att fungera ska du gitta in din kod och svara på följande frågor i filen `projekt_mvc.md` i `projekt`-mappen i ditt kursrepository:
    1. Vad gör `.htaccess` i `public`-mappen?
    2. Vad gör `.htaccess` i `app`-mappen?
    3. Vilken funktion har funktionen `spl_autoload_register()` i filen `app/init.php`?
    4. Vilken funktion har funktionen `call_user_func_array()` i filen `app/core/App.php`?
    5. Både `app/core/App.php` och `app/core/Model.php` innehåller metoden `__construct()`. Vad gör den?
    6. Vad är poängen med att metoden `view()` ligger `app/core/Controller.php` istället för i ex `app/controllers/home.php`?
    7. 
