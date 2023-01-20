# Projekt - MVC

MVC är ett arkitekturmönster för systemutveckling. Trygve Reenskaug skapade MVC när han arbetade på Smalltalk 1979 som gästforskare vid Xerox Palo Alto Research Center (PARC) i slutet av 1970-talet. Han ville ha ett mönster som kunde användas för att strukturera alla program där användare interagerar med en stor datamängd. Hans design hade från början fyra delar: Model, View, Thing och Editor. Efter att ha diskuterat det med de andra Smalltalk-utvecklarna bestämde han sig och resten av gruppen för Model, View och Controller istället.

- _Controller_ bearbetar och svarar på händelser, som användarinteraktion, och kan framkalla ändringar i model och view.
- _Model_ utgör den information som applikationen bearbetar och arbetar i regel emot en databas.
- _View_ renderar en lämplig vy för användaren. I webbapplikationer är det här vi hittar själva HTML-koden.

### En liknelse

Man kan likna applikationen - din kod - med ett företag som har tre anställda:

- _En receptionist_ (controller) som tar emot kundens förfrågningar
- _En lagerarbetare_ (model) som tar emot och lämnar ut varor
- _En leverantör_ (view) som paketerar varan på dett sätt kunden vill ha den

Då man ibland kan måsta byta ut en receptionist, lagerarbetare eller leverantör kan det vara klokt att separera dessa arbetsuppgifter ifrån varandra så att en nyanställd får en begränsad mängd arbetsuppgifter att sätta sig in i. Att dela upp ansvarsområden på olika anställda är också ett bra sätt att undvika onödiga konflikter om hur saker ska göras, så länge var och an av dem sköter sina respektive uppgifter.

![](https://media.geeksforgeeks.org/wp-content/uploads/20210629165722/mvc.png)

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

Titta också på den kod du hittar på <https://gitlab.com/Hambern/mvc>, eller <https://gitlab.com/Hambern/whattodo> som använder samma mvc-system som bas.

## Visual Studio Code

Du får gärna fortsätta jobba i terminalen även här. Men till projekt av den här storleken underlättar det onekligen att använda sig av en IDE (Integrated Development Environment). Du är vid det här laget säkert bekväm att arbeta i PhpStorm, och det kan du göra även med denna uppgift. Men ge gärna Visual Studio Code en chans i denna uppgift:

- Ladda ner programmet här: <https://code.visualstudio.com/>
- Installera därefter extension-paketet "Remote - SSH": <https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-ssh>

Då kan du arbeta direkt emot din utvecklingsserver utan att behöva ha några lokala kopior i din egen dator.

## Instruktioner

I denna uppgift ska du skapa ditt eget MVC-ramverk. Även om det finns färdiga ramverk du kan använda är det nyttigt att sätta sig in i vad dessa ramverk faktiskt gör, och då finns det inget bättre sätt än att själv bygga ett.

1. Ta del av materialet ovan och bilda dig en bild av vad det är du ska bygga
2. Skapa en mapp direkt under din `public_html`-mapp som heter `mvc`. Använd exempelvis kommandot `mkdir ~/public_html/mvc`
3. I den mappen ska du skapa följande mappstruktur:

~~~bash
.
├── app
│   ├── controllers
│   ├── core
│   ├── models
│   └── views
│       ├── home
│       └── students
├── assets
└── partials
~~~

4. Nu är det dags att skapa ett nytt projekt på GitLab och gitta in ditt eget MVC-ramverk dit. Detta kan du sedan återanvända som startpunkt i dina framtida projekt.
5. Titta sedan i repositoryt <https://gitlab.com/Hambern/mvc> vilka filer som ska ligga i dessa mappar. Titta gärna i filerna men undvik att kopiera innehållet rakt av. Genom att faktiskt skriva koden själv får man en bättre hum om vad man gör
6. Glöm inte att hela tiden testa din kod i webbläsaren, så att allt fungerar.
7. Skapa de filer du behöver. Börja med `index.php` (tänk på vilka filrättigheter filen behöver ha) och skapa sedan de filer som behövs för att undvika de felmeddelanden du får. Testa din kod hela tiden via webbläsaren.
8. När du fått allt att fungera ska du gitta in din kod och svara på följande frågor i filen `projekt_mvc.md` i `projekt`-mappen i ditt kursrepository:
    1. Vad gör `.htaccess` i root-mappen?
    2. Vad gör `.htaccess` i `app`-mappen?
    3. Vilken funktion har funktionen `spl_autoload_register()` i filen `app/init.php`?
    4. Vilken funktion har funktionen `call_user_func_array()` i filen `app/core/App.php`?
    5. Både `app/core/App.php` och `app/core/Model.php` innehåller metoden `__construct()`. Vad gör den?
    6. Vad är poängen med att metoden `view()` ligger i `app/core/Controller.php` istället för i ex `app/controllers/home.php`?
    7. När du besöker url:en `/students` kommer applikationen läsa in följande filer. Men vi vilken ordning?
        1. `app/views/students/index.php`
        2. `app/core/App.php`
        3. `app/controllers/students.php`
        4. `index.php`
        5. `app/models/Student.php`
        6. `app/init.php`
    8. Skapa sidan `/contact` där du kan ange ditt telefonnummer och e-postadress. För detta behöver du ingen databaskoppling. Vilka tillägg behöver du göra?
    9. Om du istället för HTML vill visa datan som en json-array. Var skulle du behöva göra dina förändringar?
9. Gitta in svaren på ovanstående frågor till ditt kurs-repository

## OpenAI ChatGPT

Om du kör fast i din kodning, tveka inte att ställa frågor till Open AI:s chattbot ChatGPT som är förvånansvärt skicklig på att skriva kod. Var bara tydlig med vilket slags språk du vill ha hjälp med, exempelvis HTML, CSS, PHP eller Java: <https://chat.openai.com/>. Undvik dock att använda tjänsten för att svara på dina frågor och lösa dina uppgifter eftersom det förhindrar din egen inlärning. Men som assistent som svarar på dina frågor och funderar är det ett bra verktyg.
