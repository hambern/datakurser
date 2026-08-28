# Webbserverprogrammering 1

Denna mapp innehåller uppgifter och genomgångar till kursen Webbserverprogrammering 1

## Läromedel & Färdighetsträning: Laracasts & PHP: The Right Way

I denna kurs använder vi videokurser från **[Laracasts](https://laracasts.com/)** som digitala läromedel samt **[PHP: The Right Way](https://phptherightway.com/)** som vårt officiella referensverk för modern backend-utveckling med PHP och MySQL.

> **💡 Frivilliga men varmt rekommenderade videoläromedel:**  
> Serierna på Laracasts fungerar som kursens genomgångar och digitala läroböcker. De är **frivilliga men varmt rekommenderade** att titta på i din egen takt (t.ex. som förberedelse och hemläxa). I klassrummet ägnar vi lektionstiden åt handledning, problemlösning och praktiskt kodande på de fyra projekten!

### 1. Grundläggande PHP: Laracasts (PHP for Beginners)
- **[Laracasts: PHP for Beginners (30 Days to Learn PHP)](https://laracasts.com/series/php-for-beginners-2023-edition)** – Gratis, modern videokurs i absolut världsklass av Jeffrey Way som lär dig modern PHP från grunden.

### 2. Versionshantering med Git & GitHub: Laracasts
I kursen arbetar vi med versionshantering i alla projekt. Som introduktion till Git och samarbetsflöden använder vi:
- **[Laracasts: Git Me Some Version Control](https://laracasts.com/series/git-me-some-version-control)** – Gratis och extremt pedagogisk videoserie av Jeffrey Way som lär dig grunderna i Git, staging, commits, branches och GitHub från grunden.
- **[Learn Git Branching](https://learngitbranching.js.org/?locale=sv_SE)** – Interaktivt, visuellt övningsspel i webbläsaren för att träna branches, checkout och merges.

### 3. Databasdesign & Modellering: Laracasts
- **[Laracasts: MySQL Database Design](https://laracasts.com/series/mysql-database-design)** – Gratis videoserie om hur man designar och modellerar relationsdatabaser, sätter primär-/främmande nycklar och hanterar tabellrelationer (1:1, 1:N, N:M).

### 4. Digital referenshandbok: PHP: The Right Way
**[PHP: The Right Way](https://phptherightway.com/)** fungerar som kursens kvalitetsstandard och uppslagsverk för modern god praxis:
- **Databaser & PDO:** Korrekt databasåtkomst och hantering av prepared statements.
- **Säkerhet & Validering:** Riktlinjer för att förhindra säkerhetshål som XSS, CSRF och SQL-injections.
- **Kodstandarder:** PSR-standarder och ren, professionell kodstruktur.
- 📱 **PDF / E-bok:** För dig som föredrar att läsa offline, på iPad eller Kindle finns boken att ladda ner gratis via **[PHP: The "Right" Way (Leanpub PDF/EPUB/Kindle)](https://leanpub.com/phptherightway)**.

### 5. Kompletterande resurser för SQL-träning
- **[SQLBolt](https://sqlbolt.com/)** & **[SQL Murder Mystery](https://mystery.knightlab.com/)** – Interaktiva och roliga sätt att öva SQL-frågor och tabellrelationer.
- **SQL-videospellista:** <https://www.youtube.com/playlist?list=PLP9IO4UYNF0UQkBXlTMSw0CYsxv-GDkkI>

### 6. Mikroramverket Flight PHP
Flight PHP är ett modernt och lättviktigt PHP-mikroramverk som gör det enkelt att bygga professionella och snabba webbapplikationer med routing och MVC. Vi använder skolans officiella startmall för Flight PHP:
- [Startmall på GitHub](https://github.com/hambern/boilerplate-flight)
- [Flight PHP:s officiella dokumentation](https://docs.flightphp.com/)

## ⚡ Kodexperiment & Sandlåda: StackBlitz (Kopplat till GitHub)

Vill du snabbt skissa på en frontend-idé, en layout eller dela kod för snabb felsökning utan att ändra på din skarpa server?
- Använd **[StackBlitz](https://stackblitz.com/)** direkt i webbläsaren.
- **💡 Logga in med GitHub:** Klicka på *"Sign In with GitHub"* så sparas dina experiment på samma utvecklarprofil som du använder i kurserna.
- Perfekt för att skissa på HTML/CSS/JavaScript-gränssnitt eller dela en koddialog i Teams innan du bygger in det i ditt PHP-projekt.

## 🧭 Kursens Projektuppgifter

Kursen är uppbyggd kring fyra stegvis fördjupande projekt där du går från din första databaskoppling till en komplett MVC-applikation:

| Projekt | Beskrivning | Vad du lär dig |
| :--- | :--- | :--- |
| **1. [Databasdriven Gästbok](projekt/projekt_gastbok/)** | Bygg en databasdriven gästbok med PHP och MySQL som du länkar in från din portalsida. | Introduktion till PHP, PDO, MySQL och SQL (`CREATE TABLE`, `INSERT`, `SELECT`). Skydd mot SQL-injection (Prepared Statements med `?`) och XSS. Grundläggande versionshantering med Git och GitHub. |
| **2. [ToDo-applikation](projekt/projekt_todo/)** | Skapa en att-göra-lista med kategorier, statusmarkering och dynamisk filtrering. | Full CRUD (`INSERT`, `SELECT`, `UPDATE`, `DELETE`), databasrelationer (en-till-många med `JOIN`), SQL `WHERE`/`ORDER BY` samt Feature Branching i Git (`git checkout -b`). |
| **3. [Recensionsapplikation](projekt/projekt_recension/)** | Samarbeta i par för att bygga en komplett plattform för recensioner med inloggning och följarflöde. | Professionellt teamflöde i Git (Pull Requests, Code Reviews, Issues), databassynkning via SQL-filer, många-till-många-relationer (kopplingstabeller) och säker sessionshantering (`password_hash`, `$_SESSION`). |
| **4. [Examinerande MVC-Projekt](projekt/projekt_mvc/)** | Bygg en komplett, skalbar webbapplikation med mikroramverket Flight PHP utifrån startmallen på GitHub. | Strikt Model-View-Controller (MVC)-arkitektur, routing, Composer & PSR-4 autoloading, Front Controller-mönstret, säkerhetsarkitektur och projektrapport. |

## 🧩 Roliga kluringar & Backend-spel (Frivillig träning & bonus)

När du blir klar tidigt med en uppgift eller vill ta en paus från ditt huvudsakliga kodande kan du träna dina backend-, SQL- och säkerhetsfärdigheter på ett lekfullt sätt:

### Databas- & SQL-mysterier
1. **[SQL Murder Mystery](https://mystery.knightlab.com/)** - Ett mord har begåtts i SQL City! Använd dina SQL-kunskaper för att förhöra vittnen, granska alibin och hitta mördaren i polisens relationsdatabas.
2. **[SQL Police Department](https://sqlpd.com/)** - Lös kluriga brottsfall som datautredare med hjälp av SQL-frågor och tabellkopplingar.
3. **[SQLBolt](https://sqlbolt.com/)** - Snabba interaktiva övningar direkt i webbläsaren för att bemästra `SELECT`, `JOIN` och databasmanipulering.

### Terminal-, Säkerhets- & Logikspel
1. **[OverTheWire: Bandit](https://overthewire.org/wargames/bandit/)** - Bli en mästare i Linux-terminalen! Ett "escape room"-spel över SSH där varje nivå ger dig lösenordet till nästa konto om du kan använda rätt Linux-kommandon.
2. **[Hack This Site! – Basic Missions](https://www.hackthissite.org/)** - Träna på hur formulär, backend-validering, dolda fält och enkla säkerhetsmissar fungerar i uppdragsform.
3. **[OverTheWire: Natas](https://overthewire.org/wargames/natas/)** - Webbsäkerhet från grunden. Lär dig hur servrar, cookies, lösenordshantering och SQL-injections fungerar bakom kulisserna.
4. **[Regex Crossword](https://regexcrossword.com/)** - Lös korsord med hjälp av reguljära uttryck. Extremt beroendeframkallande kluring som gör dig till expert på textmönster och inputvalidering.

### Information om utvecklingsservern som vi jobbar på

- Servernamn: `student.oedu.se`
- För phpmyadmin: <https://admin.student.oedu.se>
  - För att logga in i övningsdatabaserna använder du login `student` och lösenordet `student`. När du ska göra egna tabeller använder du ditt eget login tillsammans med ditt lösenord.
- Din hemsida: <https://student.oedu.se/~ditt_login>

### Din databas

Du har tillgång till en databas som ligger på student.oedu.se. Den information du behöver för att ansluta den är

- Värd: `localhost`
- Användarnamn: ditt login till student.oedu.se (två bokstäver följt av ett antal siffror)
- Lösenord: ditt lösenord till student.oedu.se (ett komplicerat autogenererat lösenord)
- Databas: ditt login

Du kan titta på innehållet i din databas genom att logga in via <https://admin.student.oedu.se>

### Filöverföring

Man kan skicka filer via ssh (sftp), standard port är 22 men på denna server är den satt till 3690. Det finns flera olika sätt föra över filer.

### Logga in via ssh på port 3690

```bash
ssh -p 3690 ditt_login@student.oedu.se
```

## Använd Visual Studio Code med Remote - SSH

Vi rekommenderar och använder **[Visual Studio Code](https://code.visualstudio.com/)** som gemensam kodredigerare i alla kurser. Med tillägget **Remote - SSH** jobbar du direkt mot utvecklingsservern i realtid:

- Ladda ner och installera programmet här: <https://code.visualstudio.com/>
- Installera därefter följande extension-paket:
  - "Remote - SSH": <https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-ssh>
  - "SSH key generator": <https://marketplace.visualstudio.com/items?itemName=AmadeusITGroup.ssh-key-generator>
- Klicka på ikonen till vänster som ser ut som en skärm med en liten ring längst ner till höger
- Lägg till servern student.oedu.se och ange dina inloggningsuppgifter:
  - Klicka på "+" bredvid SSH
  - Skriv in SSH-kommandot: `ssh -p 3690 ditt_login@student.oedu.se`
  - Spara anslutningen till `C:\Users\ditt_login\.ssh\config`
- Nu är det dags att generera din SSH-nyckel för att kunna ansluta utan lösenord:
  - Öppna upp kommando-paletten med `Ctrl + Shift + P` och kör kommandot `SSH: Generate SSH key`.
  - Välj den server du vill koppla ihop dig med: `student.oedu.se`
  - Ange ditt lösenord till servern
- Nu bör du kunna ansluta till din server utan att behöva ange ditt lösenord
- Om du blir ombedd att ange vilken typ av server det är så är det en Linux-server

Då kan du arbeta direkt emot din utvecklingsserver utan att behöva ha några lokala kopior i din egen dator.

## Slå på PHP:s felrapportering

Medan du utvecklar din PHP-kod kan det vara en god idé att slå på PHP:s felrapportering. Detta gör du enklast genom att skapa en fil som heter `.htaccess` i din projektmapp. Den bör innehålla följande kod:

~~~
php_flag display_errors on
php_flag display_startup_errors on
php_value error_reporting -1
~~~

## Namnge filer och mappar

1. **Skiftlägeskänslighet:** På en Linux-server är filnamn känsliga för skiftläge. Använd små bokstäver för att undvika förväxling.
2. **Hantering av svenska tecken:** Det är säkrast att undvika svenska tecken som å, ä och ö i filnamn på en webbserver.
3. **Separering utan mellanslag:** Använd understreck (_) eller bindestreck (-) istället för mellanslag i filnamn.
4. **Korta och beskrivande namn:** Välj namn som är tillräckligt korta men ändå beskrivande nog att förstå innehållet.
5. **Specialteckens risker:** Undvik specialtecken i filnamn för att förhindra oväntade problem.
6. **Standardisering av filändelser:** Använd standardiserade filändelser som .html, .php och .js.
7. **Startsidan index.html:** Filen `index.html` fungerar som webbplatsens startsida, vilket gör den till en central del i webbplatsens struktur.
8. **Strukturerad organisation:** Organisera filerna i meningsfulla mappar och undvik överbelastning i enskilda kataloger.

## 🤖 En viktig notis om AI och kodgenerering (ChatGPT, Copilot m.fl.)

Moderna AI-verktyg är kraftfulla, men **för dig som lär dig backend-programmering och databaser är de ett tveeggat svärd**.

> *"För nybörjare leder användning av AI-kodgenerering ofta till stora kunskapsluckor och en falsk trygghet (The Illusion of Competence). Programmering handlar inte om att generera text snabbt, utan om att träna din hjärna i problemlösning, logiskt tänkande och felsökning. Den kampen kan inte en AI göra åt dig."*

Inom backend är detta extra kritiskt: AI-genererad kod innehåller ofta dolda säkerhetsluckor (som bristande validering eller SQL-injections) som en nybörjare inte har förutsättningar att upptäcka.

### 🛑 Kursens regler för AI-användning:

1. **Skriv all din backend-kod själv:**  
   Under kursens obligatoriska uppgifter ska du skriva och förstå varje rad kod själv. Stäng av automatisk kodgenerering (som GitHub Copilot / Tab-autocomplete) så att du bygger en stabil mental modell av hur PHP, SQL-frågor och MVC samverkar.
2. **AI som tutor – INTE som facit:**  
   Om du kör fast får du gärna be en AI *förklara ett felmeddelande* eller *hjälpa dig förstå varför en SQL-fråga inte returnerar förväntad data*. Be aldrig en AI att *"lösa uppgiften åt mig"*.
3. **Muntliga kodavstämningar:**  
   Vid examination kommer du att få förklara din databasarkitektur och dina säkerhetsåtgärder muntligt, samt göra små live-ändringar i koden. Om du inte kan redogöra för hur din applikation fungerar kan den inte godkännas.
4. **Egna fria sidoprojekt:**  
   När du väl behärskar grunderna och vill bygga egna hobbyappar på fritiden är det fritt fram att utforska AI-assistenter som komplement. Startmallen för Flight PHP innehåller då filen `AGENTS.md` som ger AI-verktyg full kontext om projektet.

## Webbserverprogrammering (WES)
**Typ:** GY11 Kursplan

### Ämnets syfte

Undervisningen i ämnet webbserverprogrammering ska syfta till att eleverna utvecklar färdigheter i att skapa funktionalitet för webbplattformar. Eleverna ska ges möjlighet att utveckla kunskaper om olika webbteknikers konstruktion och funktionalitet samt samspelet mellan olika typer av applikationslogik. Genom undervisningen ska eleverna ges möjlighet att utveckla produkter som följer standarder samt riktlinjer för god praxis och säkerhet.

I undervisningen ska eleverna ges möjlighet att utveckla kunskaper om och färdigheter i att använda utvecklingsverktyg för att producera och testa framställning av den mjukvara som driver webbplatser eller applikationer. Eleverna ska också ges möjlighet att utveckla färdigheter i administration av webbservrar och databaser.

Undervisningen ska ge eleverna möjlighet att utveckla kunskaper om projekt som arbetsmetod och tillfälle till arbete i projektform.

#### Undervisningen i ämnet webbserverprogrammering ska ge eleverna förutsättningar att utveckla följande:
- Kunskaper om de tekniker som används för att bygga dynamiska webbplatser och webbapplikationer inklusive datalagring samt dessa teknikers vidgade roll inom annan mjukvaruutveckling.
- Förmåga att planera, genomföra, kvalitetssäkra, dokumentera och utvärdera utvecklingsprojekt för webbplatser rörande funktionalitet för webbplattformen.
- Förmåga att utveckla webbapplikationer som fungerar oberoende av användarens val och konfiguration av plattform.
- Kunskaper om applikationsarkitektur inklusive separation av olika slags logik.
- Förmåga att utveckla applikationer enligt standarder och riktlinjer för god praxis.
- Förmåga att utveckla applikationslogik för såväl server- som klientsidan.
- Kunskaper om säkerhet och förmåga att identifiera och motarbeta attacker genom effektiva åtgärder.
- Förmåga att kommunicera med andra och färdigheter i att använda fackspråk.

### Kurser i ämnet
- **Webbserverprogrammering 1**, 100 poäng, som bygger på kursen webbutveckling 1 och kursen programmering 1.
- **Webbserverprogrammering 2**, 100 poäng, som bygger på kursen webbserverprogrammering 1.
- **Webbtjänster**, 100 poäng. Kursen får bara anordnas i vidareutbildning i form av ett fjärde tekniskt år i gymnasieskolan.

## Webbserverprogrammering 1 (WESWEB01) — 100 poäng

**Beskrivning:**  
Kursen webbserverprogrammering 1 omfattar punkterna 1–8 under rubriken Ämnets syfte, med särskild betoning på punkt 1.

### Centralt innehåll

Undervisningen i kursen ska behandla följande centrala innehåll:
- Webbserverns och dynamiska webbplatsers funktionalitet.
- Utvecklingsprocessen för ett webbtekniskt projekt med målsättningar, krav, begränsningar, planering och uppföljning. Specifikation av struktur och design, kodning, testning samt driftsättning.
- Dokumentation av utvecklingsprocess och färdig produkt.
- En översikt över olika lösningar eller språk som finns för att skapa dynamiska webbplatser.
- Grundfunktionen i ett programspråk för dynamiska webbplatser.
- Teknisk orientering om webbens protokoll, adresser, säkerhet samt samspelet mellan klient och server.
- Datalagring i relationsdatabas eller med annan teknik.
- Teckenkodning. Begrepp, standarder och handhavande.
- Kodning och dokumentation enligt vedertagen praxis för vald teknik.
- Applikationsarkitektur och separation av olika slags logik.
- Kvalitetssäkring av dynamiska webbapplikationers funktionalitet, säkerhet och kodkvalitet.
- Grundläggande säkerhet och sätt att identifiera hot och sårbarheter samt hur attacker kan motverkas genom effektiva åtgärder.

### Betygskriterier

#### Betyget E
Eleven beskriver **översiktligt** tekniken bakom dynamiska webbplatser och hur de samspelar med olika tekniker på webben.

Eleven gör en **enkel** projektplan för en tänkt webbapplikation. I projektplanen beskriver eleven **översiktligt** applikationens funktion. Utifrån projektplanen utvecklar eleven **i samråd** med handledare applikationen där presentationslogiken **i begränsad utsträckning** är skild från applikationens övriga logik. I arbetet utvecklar eleven kod som **i begränsad utsträckning** är **läsbar** och **översiktligt** kommenterad. Applikationen uppvisar **enkel** funktionalitet med ett språk för webbserverprogrammering och tillhandahåller en **enkel** lösning för **datapersistens mellan sidvisningar**. Produkten är av **tillfredsställande** kvalitet och följer etablerad god praxis.

När arbetet är utfört gör eleven en **enkel** dokumentation av de moment som har utförts samt utvärderar med **enkla** omdömen sitt arbete och resultat. Eleven identifierar ett **fåtal** sårbarheter eller hot och vidtar **enkla** åtgärder för att förhindra att produkten utnyttjas. När eleven kommunicerar med andra använder hon eller han **med viss säkerhet enkel** terminologi.

#### Betyget D
Elevens kunskaper bedöms sammantaget vara mellan C och E.

#### Betyget C
Eleven beskriver **utförligt** tekniken bakom dynamiska webbplatser och hur de samspelar med olika tekniker på webben.

Eleven gör en **genomarbetad** projektplan för en tänkt webbapplikation. I projektplanen beskriver eleven **utförligt** applikationens funktion **och arkitektur**. Utifrån projektplanen utvecklar eleven **efter samråd** med handledare applikationen där presentationslogiken är skild från applikationens övriga logik. I arbetet utvecklar eleven kod som **följer en given kodningsstandard** och är **översiktligt** kommenterad. Applikationen uppvisar funktionalitet med ett språk för webbserverprogrammering och tillhandahåller en **enkel** lösning för **permanent datalagring**. Produkten är av **tillfredsställande** kvalitet och följer etablerad god praxis. **Detta kontrollerar eleven med hjälp av några tester.**

När arbetet är utfört gör eleven en **noggrann** dokumentation av de moment som har utförts samt utvärderar med **nyanserade** omdömen sitt arbete och resultat. Eleven identifierar sårbarheter eller hot och vidtar åtgärder för att förhindra att produkten utnyttjas. När eleven kommunicerar med andra använder hon eller han **med viss säkerhet** terminologi.

#### Betyget B
Elevens kunskaper bedöms sammantaget vara mellan A och C.

#### Betyget A
Eleven beskriver **utförligt och nyanserat** tekniken bakom dynamiska webbplatser och hur de samspelar med olika tekniker på webben.

Eleven gör en **genomarbetad** projektplan för en tänkt webbapplikation. **Vid behov reviderar eleven planen.** I projektplanen beskriver eleven **utförligt och nyanserat** applikationens funktion, **arkitektur och mjukvarugränssnitt**. Utifrån projektplanen utvecklar eleven **efter samråd** med handledare applikationen där presentationslogiken är skild från applikationens övriga logik. I arbetet utvecklar eleven kod som **följer en given kodningsstandard** och är **utförligt** kommenterad. Applikationen uppvisar funktionalitet med ett språk för webbserverprogrammering **för att driva en helt databaserad webbplats eller en jämförbart avancerad produkt** och tillhandahåller en lösning **med viss komplexitet** för **permanent datalagring**. Produkten är av **god** kvalitet och följer etablerad god praxis. **Detta kontrollerar eleven med hjälp av flera tester, även manuella.**

När arbetet är utfört gör eleven en **noggrann och utförlig** dokumentation av de moment som har utförts samt utvärderar med **nyanserade** omdömen sitt arbete och resultat **samt ger förslag på hur arbetet kan förbättras**. Eleven identifierar **flera** sårbarheter eller hot och vidtar **avancerade** åtgärder för att förhindra att produkten utnyttjas. När eleven kommunicerar med andra använder hon eller han **med säkerhet** terminologi.
