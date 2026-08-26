# Webbserverprogrammering 1

Denna mapp innehåller uppgifter och genomgångar till kursen Webbserverprogrammering 1

## Läromedel & Färdighetsträning: The Odin Project & Moderna Resurser

I denna kurs använder vi **[The Odin Project](https://www.theodinproject.com/)** som vårt digitala läromedel för webbserverns grunder, Git, databaskoncept och arkitektur, tillsammans med moderna PHP- och SQL-resurser.

### 1. The Odin Project som konceptuell lärobok:
1. Gå in på **<https://www.theodinproject.com/>** och spara som bokmärke.
2. **Skapa ett användarkonto:**
   > **💡 Tips för registrering:** Registrera dig gärna med din **privata e-postadress**. Då följer din profil, dina sparade framsteg och ditt framtida portfolio med dig även efter skoltiden. Det är dock självklart helt tillåtet att använda din skoladress om du föredrar det.
3. Använd The Odin Project för att lära dig och fördjupa dig i:
   - **Git & GitHub/GitLab:** Versionshantering på riktigt.
   - **Hur webben fungerar:** Klient/Server, HTTP-protokollet, Request/Response och statuskoder.
   - **Databaser & SQL:** Relationsdatabaser, tabeller, datamodellering och CRUD.
   - **Arkitektur & Säkerhet:** MVC-mönstret, autentisering, sessioner och skydd mot sårbarheter.

### 2. Kompletterande resurser för PHP & SQL:
Eftersom The Odin Project fokuserar på generella backend-koncept använder vi följande resurser för PHP-specifik träning:
- **[PHP: The Right Way](https://phptherightway.com/)** – En fantastisk guide till modern god praxis i PHP (PDO, säkerhet, PSR-standarder).
- **[Exercism PHP Track](https://exercism.org/tracks/php)** – Gratis interaktiv kodträning i modern PHP med automatiserade tester.
- **[SQL Murder Mystery](https://mystery.knightlab.com/)** & **[SQLBolt](https://sqlbolt.com/)** – Interaktiva och roliga sätt att öva SQL-frågor.
- **SQL-videospellista:** <https://www.youtube.com/playlist?list=PLP9IO4UYNF0UQkBXlTMSw0CYsxv-GDkkI>

### Flight PHP

Flight PHP är ett modernt och lättviktigt PHP-mikroramverk som gör det enkelt att bygga professionella och snabba webbapplikationer med routing och MVC. Vi använder skolans officiella startmall för Flight PHP:

- [Startmall på GitLab](https://gitlab.com/ornskoldsviks-gymnasium/flight)
- [Flight PHP:s officiella dokumentation](https://docs.flightphp.com/)

## Uppgifter

Här är en översikt av uppgifterna för kursen i Webbserverprogrammering 1, med fokus på att gradvis bygga upp dina färdigheter i databasprogrammering och webbutveckling. Varje uppgift bygger vidare på den tidigare och hjälper dig att stegvis lära dig tekniker som PHP, MySQL, Git, och Laravel.

### [Gästbok med databas](projekt/projekt_gastbok/)

| **Uppgift** | **Beskrivning** | **Vad du lär dig** |
| :--- | :--- | :--- |
| **Gästbok med databas** | Omvandla din befintliga gästbok till att använda en MySQL-databas för att spara inlägg. | Introduktion till MySQL och SQL. Grunder i att skapa tabeller, infoga och hämta data med `INSERT` och `SELECT`. Introduktion till Git och versionshantering. |

### [ToDo-applikation](projekt/projekt_todo/)

| **Uppgift** | **Beskrivning** | **Vad du lär dig** |
| :--- | :--- | :--- |
| **Grundläggande ToDo-applikation** | Skapa en enkel applikation där användare kan lägga till och visa uppgifter. | Grunder i PHP, HTML, och CSS. Skapa och hantera en MySQL-databas. Använd `SELECT` och `INSERT` SQL-operationer. |
| **Markera uppgifter som klara** | Lägg till funktionalitet för att markera uppgifter som klara. | Lär dig använda `UPDATE`-operationen i SQL och hantera formulärinmatningar med PHP. |
| **Kategorisera uppgifter** | Introducera kategorier för att sortera uppgifter. | Skapa relationer mellan tabeller (en-till-många) och använd `JOIN` för att hämta relaterad data. |
| **Filtrera och sortera uppgifter** | Lägg till funktioner för att filtrera och sortera uppgifter baserat på status och kategori. | Avancerade SQL-förfrågningar med `WHERE` och `ORDER BY`. Lär dig att skapa dynamiska webbsidor. |
| **Användarhantering** | Implementera användarhantering för att varje användare ska kunna hantera sina egna uppgifter. | Skapa en-till-många-relationer mellan användare och uppgifter. Hantera användarsäkerhet med `password_hash`. |

### [Recensions-sida](projekt/projekt_recension/)

| **Uppgift** | **Beskrivning** | **Vad du lär dig** |
| :--- | :--- | :--- |
| **Skapa en projektplan** | Planera och fördela uppgifter, skapa en tidsplan och dokumentera arbetsfördelningen. | Projektplanering, tidsuppskattning, samarbete och dokumentation. |
| **Användarhantering och personliga recensioner** | Implementera användarhantering där användare kan logga in och se sina egna recensioner. | Bygg en-till-många-relationer mellan användare och recensioner. Hantera användarinloggning och sessions. |
| **Grundläggande recensions-sida** | Skapa en applikation där användare kan lägga till och visa recensioner av olika objekt. | Grunder i PHP, HTML, och CSS. Använd `INSERT` och `SELECT` för att hantera data i MySQL-databasen. |
| **Kategorisera recensioner** | Lägg till funktionalitet för att sortera recensioner i olika kategorier, såsom böcker, filmer, etc. | Skapa relationer mellan recensioner och kategorier (en-till-många). Använd `JOIN`-operationer. |
| **Topplistor för kategorier** | Lägg till topplistor för de bäst rankade objekten inom varje kategori. | Använd aggregeringsfunktioner i SQL som `AVG` och `GROUP BY` för att skapa topplistor. |
| **Följare och personliga flöden** | Lägg till funktionalitet för att användare ska kunna följa andra och se deras senaste recensioner i ett flöde. | Implementera många-till-många-relationer i databasen och hantera mer komplexa databasoperationer. |
| **Internt meddelandesystem (Valfritt)** | Lägg till ett meddelandesystem där användare kan skicka privata meddelanden till varandra. | Bygg en-till-en-relationer för meddelanden och skapa ett användarvänligt gränssnitt för kommunikation. |

### [MVC-Projekt](projekt/projekt_mvc/)

| **Uppgift** | **Beskrivning** | **Vad du lär dig** |
| :--- | :--- | :--- |
| **Examinerande MVC-Projekt** | Bygg en komplett applikation med **Model-View-Controller (MVC)**-arkitektur och mikroramverket **Flight PHP** (utifrån [startmallen på GitLab](https://gitlab.com/ornskoldsviks-gymnasium/flight)). Uppgiften inkluderar obligatorisk användarhantering (login, register, profil) och ett fritt valt tema (blogg, recept, etc.) med full CRUD-funktionalitet. | Strikt **Model-View-Controller (MVC)**-arkitektur. Använda ett PHP-mikroramverk (Flight PHP), routing och en Front-Controller. Hantera **sessions**, säker användarautentisering (`password_hash`) och skydda routes. Bygga skalbar kod enligt "God Praxis" och DRY-principen. |

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

`ssh -p 3690 ditt_login@student.oedu.se`

Du kan också, när du fyllt i korrekt information i PhpStorm, logga in via ssh genom `Tools > Start SSH Session` i menyn.

## Använd Visual Studio Code

Jag rekommenderar att du i kursen använder programmet Visual Studio Code. Då kan du jobba direkt emot utvecklingsservern och behöver inte tänka på att "deploya". Följ nedanstående guide:

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

## 🚀 Egna sidoprojekt & AI-verktyg (Antigravity, Cursor m.fl.)

Ett av de absolut bästa och roligaste sätten att bli en riktigt vass utvecklare är att **bygga egna projekt vid sidan av kursens obligatoriska uppgifter**. 

Att förverkliga egna idéer ger massor av praktisk erfarenhet. Det kan vara vad som helst du tycker är intressant:
- En personlig portfolio eller blogg
- En poängräknare, statistik-app eller matchlogg för ditt favoritspel
- Ett quiz, en träningsdagbok eller ett film-/bokningssystem
- En webbapp för din förening, ditt UF-företag eller din hobby

### Frihet att experimentera med AI-agenter i egna projekt!
I dina **egna sidoprojekt** är det helt fritt fram att utforska och experimentera med moderna **AI-agenter och kodassistenter** som t.ex.:
- **Google Antigravity**
- **Cursor**
- **GitHub Copilot**
- **Claude Code & ChatGPT**

Genom att arbeta med AI-agenter i egna projekt lär du dig prompt-engineering, att läsa och granska AI-genererad kod, och hur man snabbt tar en idé från skiss till fungerande applikation.

> **💡 Tips:** Startmallen för Flight PHP ([gitlab.com/ornskoldsviks-gymnasium/flight](https://gitlab.com/ornskoldsviks-gymnasium/flight)) innehåller filen `AGENTS.md`, vilket gör att AI-agenter automatiskt förstår projektets arkitektur och hjälper dig bygga rätt!

> **⚠️ Tänk på vid kursens obligatoriska inlämningar:**
> Vid kursens bedömningsuppgifter är det dina egna kunskaper och din egen förståelse som mäts. Använd gärna AI som en personlig lärare/tutor för att förklara felmeddelanden eller diskutera idéer, men se till att du själv förstår och kan förklara varje rad kod du lämnar in.

---

## Webbserverprogrammering 1

**Kurskod:** WESWEB01

Kursen webbserverprogrammering 1 omfattar punkterna 1–8 under rubriken Ämnets syfte, med särskild betoning på punkt 1.

### Centralt innehåll

#### Undervisningen i kursen ska behandla följande centrala innehåll:

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

Eleven gör en **genomarbetad** projektplan för en tänkt webbapplikation. I projektplanen beskriver eleven **utförligt** applikationens funktion **och arkitektur**. Utifrån projektplanen utvecklar eleven **efter samråd** med handledare applikationen där presentationslogiken är skild från applikationens övriga logik. I arbetet utvecklar eleven kod som **följer en given kodningsstandard** och är **översiktligt** kommenterad. Applikationen uppvisar funktionalitet med ett språk för webbserverprogrammering och tillhandahåller en **enkel** lösning för **permanent datalagring**. Produkten är av **tillfredsställande** kvalitet och följer etablerad god praxis. **Detta kontrollerar eleven med hjälp av** **några tester.**

När arbetet är utfört gör eleven en **noggrann** dokumentation av de moment som har utförts samt utvärderar med **nyanserade** omdömen sitt arbete och resultat. Eleven identifierar sårbarheter eller hot och vidtar åtgärder för att förhindra att produkten utnyttjas. När eleven kommunicerar med andra använder hon eller han **med viss säkerhet** terminologi.

#### Betyget B

Elevens kunskaper bedöms sammantaget vara mellan A och C.

#### Betyget A

Eleven beskriver **utförligt och nyanserat** tekniken bakom dynamiska webbplatser och hur de samspelar med olika tekniker på webben.

Eleven gör en **genomarbetad** projektplan för en tänkt webbapplikation. **Vid behov reviderar eleven planen.** I projektplanen beskriver eleven **utförligt och nyanserat** applikationens funktion, **arkitektur och mjukvarugränssnitt**. Utifrån projektplanen utvecklar eleven **efter samråd** med handledare applikationen där presentationslogiken är skild från applikationens övriga logik. I arbetet utvecklar eleven kod som **följer en given kodningsstandard** och är **utförligt** kommenterad. Applikationen uppvisar funktionalitet med ett språk för webbserverprogrammering **för att driva en helt databaserad webbplats eller en jämförbart avancerad produkt** och tillhandahåller en lösning **med viss komplexitet** för **permanent datalagring**. Produkten är av **god** kvalitet och följer etablerad god praxis. **Detta kontrollerar eleven med hjälp av** **flera tester,** **även manuella.**

När arbetet är utfört gör eleven en **noggrann och utförlig** dokumentation av de moment som har utförts samt utvärderar med **nyanserade** omdömen sitt arbete och resultat **samt ger förslag på hur arbetet kan förbättras**. Eleven identifierar **flera** sårbarheter eller hot och vidtar **avancerade** åtgärder för att förhindra att produkten utnyttjas. När eleven kommunicerar med andra använder hon eller han **med säkerhet** terminologi.
