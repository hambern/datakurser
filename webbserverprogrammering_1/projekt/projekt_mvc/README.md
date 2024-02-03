# Projekt - MVC

MVC (Model-View-Controller) är ett välbeprövat arkitekturmönster inom systemutveckling som först introducerades av Trygve Reenskaug under hans tid som gästforskare vid Xerox Palo Alto Research Center (PARC) i slutet av 1970-talet. Ursprungligen utvecklat för Smalltalk-programmering, syftade Reenskaug till att skapa en metod för att effektivisera hanteringen och presentationen av komplexa datamängder i mjukvaruapplikationer. Hans initiala koncept omfattade fyra komponenter: Model, View, Thing och Editor, men efter samråd med andra Smalltalk-utvecklare, konsoliderades detta till de tre komponenterna Model, View och Controller som vi känner till idag.

### Komponenternas roller

- **Model**: Denna komponent representerar applikationens datastruktur, ofta genom att interagera med en databas. Den hanterar data, logik och regler av applikationen. Modellen ansvarar för att hämta, lagra och uppdatera data i databasen samt utföra bearbetningar av datan.
- **View**: View-komponenten är ansvarig för att presentera data för användaren. I webbapplikationer utgörs detta av den HTML som genereras och skickas till klientens webbläsare. View är skiktet som användaren interagerar med visuellt, där datan presenteras på ett lättförståeligt och estetiskt tilltalande sätt.
- **Controller**: Controllern fungerar som en mellanhand mellan Model och View. Den bearbetar användarinput (t.ex., klick och tangenttryckningar), gör anrop till modellen för datamanipulation eller hämtning, och bestämmer sedan vilken vy som ska presenteras baserat på den aktuella applikationsstatusen. Controllern är alltså central för hanteringen av användarinteraktioner och applikationsflödet.

### Liknelse med ett företag

Att förstå MVC kan underlättas genom en analogi med ett företag där arbetsuppgifterna är uppdelade mellan tre nyckelpersoner:

- **Receptionisten (Controller)**: Tar emot kundens förfrågningar och dirigerar dem till rätt avdelning eller person. Receptionisten bestämmer vad som behöver göras baserat på kundens behov och vilka resurser som är tillgängliga.
- **Lagerarbetaren (Model)**: Hanterar företagets varor (datan) genom att ta emot, uppdatera och leverera dem enligt receptionistens (controllerns) anvisningar.
- **Leverantören (View)**: Förpackar och presenterar varan (datan) på ett sätt som är tilltalande och begripligt för kunden, baserat på de specifikationer som angetts av receptionisten.

Denna uppdelning av ansvarsområden underlättar introduktionen av nya anställda (komponenter) eftersom varje roll har en klart definierad uppgift. Det ökar även systemets flexibilitet och underhållbarhet, eftersom ändringar i en komponent kan genomföras med minimal påverkan på de övriga. Dessutom bidrar det till att minska komplexiteten och förbättra samarbete inom teamet, vilket gör det lättare att hantera och utveckla applikationen över tid.

Genom att använda MVC-mönstret kan utvecklare skapa applikationer som är lättare att underhålla, utöka och testa, vilket resulterar i snabbare utvecklingscykler och mer robusta system.

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

1. Klona repo: `git clone https://gitlab.com/hambern/mvc.git`
2. Navigera till projektets rotkatalog
3. Konfigurera `app/config.php` med din databasinformation
4. Besök `index.php` via din webbläsare för att starta applikationen
5. Studera och läs nogrannt igenom alla filer i MVC-ramverket tills du förstår vad varje fil gör. Fråga om det är något som känns oklart.
6. Ta sedan bort `.git`-mappen och initiera ett nytt repository
7. Nu är det dags att skapa ett nytt projekt på GitLab och gitta in ditt projekt
8. Skapa ett helt eget projekt som använder tabeller i din egen databas

## OpenAI ChatGPT

Om du kör fast i din kodning, tveka inte att ställa frågor till Open AI:s chattbot ChatGPT som är förvånansvärt skicklig på att skriva kod. Var bara tydlig med vilket slags språk du vill ha hjälp med, exempelvis HTML, CSS, PHP eller Java: <https://chat.openai.com/>. Undvik dock att använda tjänsten för att svara på dina frågor och lösa dina uppgifter eftersom det förhindrar din egen inlärning. Men som assistent som svarar på dina frågor och funderar är det ett bra verktyg.
