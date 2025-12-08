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
2.  **Winter CMS:** Byggt på Laravel. Mer tekniskt och flexibelt för utvecklare. *Rekommenderas för dig som vill ha en utmaning (Betyg C/A).*
3.  **Grav / Kirby:** Flat-file CMS (kräver ingen databas). Snabbt och modernt.

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
-   **Innehåll:** Skapa minst 3 undersidor/inlägg (t.ex. "Om oss", "Kontakt", "Tjänster").
-   **Funktion:** Installera minst ett plugin (t.ex. Kontaktformulär, SEO-verktyg, Bildgalleri).

### Fas 4: Slutrapport
Skriv en kort reflektion i din `markdown`-fil (eller en PDF-rapport):
-   Hur var installationen? (Problem/Lösningar)
-   Vilka plugins valde du och varför?
-   Hur har du jobbat med tillgänglighet/användarvänlighet?

---

## Bedömning

| Nivå | Kriterier |
| :--- | :--- |
| **E** | Webbplatsen fungerar och har innehåll. Ett tema är valt. Grundläggande projektplan finns. |
| **C** | Webbplatsen är anpassad med CSS (inte bara default-utseende). Du har installerat vettiga plugins. Strukturen är logisk. |
| **A** | Webbplatsen har en professionell design och UX. Du har kanske gjort djupare ingrepp i koden (PHP/HTML) eller använt ett mer avancerat CMS (som Winter). Prestanda och tillgänglighet (SEO) är optimerad. |

## Resurser
- [WordPress.org](https://wordpress.org/download/)
- [WinterCMS.com](https://wintercms.com/)
- [GetGrav.org](https://getgrav.org/)