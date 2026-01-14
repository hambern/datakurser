# Projektuppgift: Bygg en webbplats med CMS

## Syfte
Du ska installera och konfigurera ett **Content Management System (CMS)** för att bygga en professionell webbplats. Syftet är att förstå hur man hanterar webbinnehåll dynamiskt utan att koda allt från grunden, samt hur man anpassar färdiga system efter egna behov.

## Mål
Efter avslutat projekt ska du kunna:
- **Installation:** Sätta upp ett CMS på en server (och vid behov koppla det till en databas).
- **Konfiguration:** Installera teman och tillägg (plugins) för att utöka funktionalitet.
- **Anpassning:** Modifiera utseendet med CSS och HTML ("Child Themes" eller "Custom CSS").
- **Innehållsstrategi:** Strukturera menyer, kategorier och innehåll (sidor/inlägg).

---

[![](https://img.youtube.com/vi/WyNnDhywU5w/maxresdefault.jpg)](https://www.youtube.com/watch?v=WyNnDhywU5w)

## Välj ditt CMS
Du har frihet att välja system, men här är några vanliga alternativ:
1. **WordPress:** Världens mest populära CMS. Extremt enkelt att komma igång med, enormt utbud av plugins. *Bra för nybörjare.*
2. **Grav:** Flat-file CMS (kräver ingen databas). Snabbt, modernt och kodnära.
3. **Winter CMS**: Byggt på ramverket Laravel. Ett kraftfullt open-source-alternativ för dig som vill ha struktur och flexibilitet bortom färdiga mallar. *Bra för dig som vill utvecklas som programmerare*.

Oavsett vilket CMS du väljer bör du ta dig tid och kolla igenom dokumentationen på deras hemsida.

[![](https://img.youtube.com/vi/ZFGRB8KV_oA/maxresdefault.jpg)](https://www.youtube.com/watch?v=ZFGRB8KV_oA)

[![](https://img.youtube.com/vi/Qj9GKSkH21k/maxresdefault.jpg)](https://www.youtube.com/watch?v=Qj9GKSkH21k)

## Arbetsgång

### Fas 1: Planering
Skapa en kort projektplan (markdown-fil) där du besvarar:
-   **Syfte:** Vad är det för sida? (Blogg, Portfolio, Företagssida?)
-   **CMS-val:** Vilket system väljer du och varför?
-   **Målgrupp:** Vem vänder du dig till?

### Fas 2: Installation
1.  Ladda ner CMS:ets installationsfiler (zip).
2.  Ladda upp dem till din mapp på servern (`public_html/ditt_projekt`).
3.  **Om du valt WordPress:** Skapa en MySQL-databas i kontrollpanelen (notera databasnamn, användare och lösenord).
4.  Kör installationen genom att besöka URL:en i webbläsaren.

### Fas 3: Bygg & Anpassa
-   **Tema:** Välj ett tema som passar syftet.
-   **Modifiera:** Använd CSS för att ändra färger, typsnitt och layout så det blir personligt. *Att bara använda ett färdigt tema rakt av ger lågt betyg.*
-   **Innehåll:** Skapa minst 3 undersidor/inlägg (t.ex. "Blogg", "Om oss", "Kontakt", "Tjänster").
-   **Funktion:** Installera minst ett plugin/tillägg (t.ex. Kontaktformulär, SEO-verktyg, Bildgalleri).

### Fas 4: Slutrapport
Skriv en kort reflektion i din `markdown`-fil (eller direkt på sidan i någon form):
-   Hur fungerade installationen? (Problem/Lösningar)
-   Vilka plugins/tillägg valde du och varför?
-   Hur har du jobbat med tillgänglighet/användarvänlighet?
-   Vilka regler angående upphovsrätt har du följt under arbetets gång?
-   Har du gjort några specifika förändringar i koden (CSS/HTML/PHP)?

---

## Bedömning

| Bedömningsområde | E | C | A |
| :--- | :--- | :--- | :--- |
| **Produkt & Kod** | Webbplatsen är publicerad och har relevant innehåll. Du har installerat systemet och gjort grundläggande anpassningar i HTML och CSS. Koden följer standarder tillräckligt väl för att sidan ska fungera. | Webbplatsen är responsiv och fungerar väl på mobila enheter. Designen är anpassad med egen CSS bortom standardmallen och innehåller enklare skript/plugins. Koden är validerad och följer god praxis. | Webbplatsen har en professionell design med hög användarvänlighet och tillgänglighet. Du har optimerat prestandan (laddtider) och gjort mer avancerade ingrepp i koden/temat för att styra utseendet exakt. |
| **Process & Testning** | Du har följt en enkel projektplan och testat att sidan fungerar i en webbläsare. Dokumentationen beskriver översiktligt vilka moment du har genomfört. | Du har följt en genomarbetad plan och använt verktyg för att testa koden. Säkerhetsaspekter (som uppdateringar) har hanterats. Dokumentationen redogör för arbetsprocessen. | Du har reviderat planeringen vid behov och testat produkten omfattande på olika plattformar och enheter. Dokumentationen analyserar tekniska val och ger förslag på förbättringar. |
| **Lagar & Upphovsrätt** | Du redogör översiktligt för upphovsrätten och följer den i ditt arbete (använder lagligt material). | Du redogör utförligt för upphovsrättsliga bestämmelser och tillämpar dem korrekt på allt innehåll på webbplatsen. | Du för välgrundade och nyanserade resonemang kring upphovsrätt, licensiering (t.ex. Creative Commons) och hur det påverkar publicering på webben. |