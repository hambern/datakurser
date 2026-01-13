# Projektuppgift: Bygg en webbplats med CMS

## Syfte
Du ska installera och konfigurera ett **Content Management System (CMS)** för att bygga en professionell webbplats. Syftet är att förstå hur man hanterar webbinnehåll dynamiskt utan att koda allt från grunden, samt hur man anpassar färdiga system efter egna behov.

## Mål
Efter avslutat projekt ska du kunna:
- **Installation:** Sätta upp ett CMS på en server och koppla det till en MySQL-databas.
- **Konfiguration:** Installera teman och plugins för att utöka funktionalitet.
- **Anpassning:** Modifiera utseendet med CSS och HTML ("Child Themes" eller "Custom CSS").
- **Innehållsstrategi:** Strukturera menyer, kategorier och innehåll (sidor/inlägg).

---

## Välj ditt CMS
Du har frihet att välja system, men här är några vanliga alternativ:
1.  **WordPress:** Världens mest populära CMS. Enkelt att komma igång med, enormt utbud av plugins. *Bra för nybörjare.*
2.  **Grav eller Kirby:** Flat-file CMS (kräver ingen databas). Snabbt och modernt.

---

## Arbetsgång

### Fas 1: Planering
Skapa en kort projektplan (markdown-fil) där du besvarar:
-   **Syfte:** Vad är det för sida? (Blogg, Portfolio, Företagssida?)
-   **CMS-val:** Vilket system väljer du och varför?
-   **Målgrupp:** Vem vänder du dig till?

### Fas 2: Installation
1.  Ladda ner CMS:ets installationsfiler (zip).
2.  Ladda upp dem till din mapp på servern (`public_html/ditt_projekt`).
3.  Skapa en MySQL-databas i kontrollpanelen (notera databasnamn, användare och lösenord).
4.  Kör installationen genom att besöka URL:en i webbläsaren.

### Fas 3: Bygg & Anpassa
-   **Tema:** Välj ett tema som passar syftet.
-   **Modifiera:** Använd CSS för att ändra färger, typsnitt och layout så det blir personligt. *Att bara använda ett färdigt tema rakt av ger lågt betyg.*
-   **Innehåll:** Skapa minst 3 undersidor/inlägg (t.ex. "Blogg", "Om oss", "Kontakt", "Tjänster").
-   **Funktion:** Installera gärna ett plugin (t.ex. Kontaktformulär, SEO-verktyg, Bildgalleri).

### Fas 4: Slutrapport
Skriv en kort reflektion i din `markdown`-fil eller i ett inlägg på sidan:
-   Vad är det för sida? (Blogg, Portfolio, Företagssida?)
-   Vilket system valde du och varför?
-   Vem vänder du dig till?
-   Hur var installationen? (Problem/Lösningar)
-   Vilka plugins valde du och varför?
-   Hur har du jobbat med tillgänglighet/användarvänlighet?
-   Har du gjort några förändringar till CMS:ets grundfunktioner?

---

## Bedömning

| Bedömningsområde | E | C | A |
| :--- | :--- | :--- | :--- |
| **Produkt & Kod** | Webbplatsen är publicerad och har relevant innehåll. Du har installerat systemet och gjort grundläggande anpassningar i HTML och CSS. Koden följer standarder tillräckligt väl för att sidan ska fungera. | Webbplatsen är responsiv och fungerar väl på mobila enheter. Designen är anpassad med egen CSS bortom standardmallen och innehåller enklare skript/plugins. Koden är validerad och följer god praxis. | Webbplatsen har en professionell design med hög användarvänlighet och tillgänglighet. Du har optimerat prestandan (laddtider) och gjort mer avancerade ingrepp i koden/temat för att styra utseendet exakt. |
| **Process & Testning** | Du har följt en enkel projektplan och testat att sidan fungerar i en webbläsare. Dokumentationen beskriver översiktligt vilka moment du har genomfört. | Du har följt en genomarbetad plan och använt verktyg för att testa koden. Säkerhetsaspekter (som uppdateringar) har hanterats. Dokumentationen redogör för arbetsprocessen. | Du har reviderat planeringen vid behov och testat produkten omfattande på olika plattformar och enheter. Dokumentationen analyserar tekniska val och ger förslag på förbättringar. |
| **Lagar & Upphovsrätt** | Du redogör översiktligt för upphovsrätten och följer den i ditt arbete (använder lagligt material). | Du redogör utförligt för upphovsrättsliga bestämmelser och tillämpar dem korrekt på allt innehåll på webbplatsen. | Du för välgrundade och nyanserade resonemang kring upphovsrätt, licensiering (t.ex. Creative Commons) och hur det påverkar publicering på webben. |

## Resurser
- [WordPress.org](https://wordpress.org/download/)
- [GetGrav.org](https://getgrav.org/)
- [GetKirby.com](https://getkirby.com/)