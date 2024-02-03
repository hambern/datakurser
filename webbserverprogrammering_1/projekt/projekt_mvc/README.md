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

I denna uppgift ska du skapa ett eget litet projekt utifrån ett färdigt, enkelt MVC-ramverk. Utgå ifrån repositoryt <https://gitlab.com/Hambern/mvc> som är ett exempel på hur man, med MVC-ramverket kan bygga en enkel studentchat. Din uppgift är att göra om koden så att den gör något helt annat och använder tabeller i din egen databas.

1. Klona repo: git clone https://gitlab.com/hambern/mvc.git
2. Navigera till projektets rotkatalog.
3. Konfigurera app/config.php med din databasinformation.
4. Besök index.php via din webbläsare för att starta applikationen.
5. Ta sedan bort .git-mappen och initiera ett nytt repository
6. Nu är det dags att skapa ett nytt projekt på GitLab och gitta in ditt projekt
7. Skapa ett helt eget projekt som använder tabeller i din egen databas

## OpenAI ChatGPT

Om du kör fast i din kodning, tveka inte att ställa frågor till Open AI:s chattbot ChatGPT som är förvånansvärt skicklig på att skriva kod. Var bara tydlig med vilket slags språk du vill ha hjälp med, exempelvis HTML, CSS, PHP eller Java: <https://chat.openai.com/>. Undvik dock att använda tjänsten för att svara på dina frågor och lösa dina uppgifter eftersom det förhindrar din egen inlärning. Men som assistent som svarar på dina frågor och funderar är det ett bra verktyg.
