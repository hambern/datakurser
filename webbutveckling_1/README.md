# Webbutveckling 1

Denna mapp innehåller uppgifter och genomgångar till kursen **Webbutveckling 1** (`WEUWEB01`).

---

## Läromedel & Färdighetsträning: The Odin Project

I denna kurs använder vi **[The Odin Project (Foundations Course)](https://www.theodinproject.com/paths/foundations/courses/foundations)** som vårt huvudsakliga interaktiva läromedel och digitala lärobok.

The Odin Project är en världsledande, öppen och modern utbildningsplattform som lär dig modern webbutveckling från grunden på samma sätt som professionella utvecklare arbetar.

### Kom igång:
1. Gå till **<https://www.theodinproject.com/>** och spara sidan som ett bokmärke.
2. **Skapa ett användarkonto:**
   > **💡 Tips för registrering:** Registrera dig gärna med din **privata e-postadress**. Då följer din profil, din progression och ditt framtida portfolio med dig även efter avslutad skolgång. Det är dock självklart helt tillåtet att använda din skoladress om du föredrar det.
3. Klicka på **Foundations** och påbörja kursen:
   - **Introduction:** Hur webbutveckling fungerar och hur man löser problem.
   - **Prerequisites:** Grundläggande verktyg och installationer.
   - **HTML Foundations:** Semantisk HTML, struktur, formulär och länkar.
   - **CSS Foundations:** Box-modellen, Flexbox och modern styling.
   - **JavaScript Basics:** Grundläggande logik och DOM-manipulation.

---

## 🧪 Snabbstart & Lekstuga: CodePen (Första lektionen)

Innan vi sätter upp filer och mappar i Visual Studio Code börjar vi med att experimentera direkt i webbläsaren på **[CodePen.io](https://codepen.io/)**:
- **Noll krångel:** Ingen installation eller server behövs – klicka bara på *Start Coding* och skriv din första HTML och CSS direkt.
- **Direkt visuell feedback (Live Preview):** Så fort du ändrar en färg, text eller marginal ser du resultatet omedelbart.
- **Digitalt kladdpapper:** Perfekt under hela kursen för att snabbt testa en ny idé, en knappanimation eller en flexbox-layout innan du bygger in det i ditt riktiga projekt.
- **Enkelt att dela felsökning:** Har du kört fast? Klistra in din kod i en Pen och skicka länken i chatten (t.ex. via **Microsoft Teams**) till din lärare eller en klasskompis. De kan direkt se koden, testa ändringar och hjälpa dig hitta buggen!
- **Skapa ett gratiskonto:** Logga gärna in med din privata e-post eller GitHub så att dina experiment ("Pens") sparas och kan visas upp.

---

## 🧭 Kursens Projektuppgifter

Kursen är uppbyggd kring ett fåtal kreativa och engagerande projekt där du får stor frihet att välja eget tema och innehåll:

| Projekt | Beskrivning | Vad du lär dig |
| :--- | :--- | :--- |
| **1. [Portalsida](projekt/projekt_portalsida/)** | Skapa din personliga startsida och presentationshub på webbservern. | HTML5-struktur, semantik, CSS, länkning, filer på servern och responsiv viewport. |
| **2. [Informationssida om ditt intresse](projekt/projekt_komprimering/)** | Välj ett eget favoritämne och bygg en responsiv sajt med hero-video och bildgalleri. | CSS Flexbox/Grid, responsiv design (Media Queries), bild-/videokomprimering (WebP/MP4), tillgänglighet (`alt`-texter) och upphovsrätt. |
| **3. [Webbquiz om Internets Historia](projekt/projekt_fragesport/)** | Bygg ett interaktivt frågesportspel i webbläsaren med fakta från Internetmuseum. *(Valbart alternativ: [CMS-webbplats](projekt/projekt_cms/))*. | JavaScript, DOM-manipulation (`querySelector`, `addEventListener`), villkorsstyrd logik, poängräkning och `localStorage`. |
| **4. [Slutprojektet](projekt/projekt_slut/)** | Planera, producera, testa och lansera ett komplett webbprojekt med **fullständig kreativ frihet** kring idé och tema. | Hela utvecklingsprocessen: Projektplanering, responsiv layout (Grid/Flexbox), JavaScript-interaktivitet, Lighthouse-optimering och slutrapport. |

---

## 🧩 Roliga kluringar & CSS-spel (Frivillig träning & bonus)

När du blir klar tidigt med en uppgift eller vill ta en paus från ditt huvudsakliga kodande kan du träna dina färdigheter på ett lekfullt sätt:

### Roliga kluringar (Webbinspektören)
1. **[Kluringen (Webbgåtor)](projekt/projekt_kluring/)** - Skapa (eller lös) ett eget Notpron-liknande gåtspel med dolda ledtrådar i källkoden.
2. **[Hambergs kluring 1](https://student.oedu.se/~mh6802/kul/mattias_kul_01/)** - Enkel men klurig gåta där du måste undersöka sidan noggrant.
3. **[Hambergs kluring 2](https://student.oedu.se/~mh6802/kul/mattias_kul_02/)** - Mer utmanande gåta som kräver utforskande av sidans struktur.
4. **[Hambergs kluring 3](https://student.oedu.se/~mh6802/kul/mattias_kul_03/)** - Klurig gåta där du verkligen måste tänka utanför boxen.
5. **[Notpron](http://notpron.org/notpron/)** - Legendarisk onlinegåta känd som "världens svåraste webbspel".

### CSS-spel (Flexbox & Layout)
1. **[Flexbox Froggy](https://flexboxfroggy.com/#sv)** - Hjälp en groda till sin näckros med Flexbox.
2. **[Flexbox Adventure](https://codingfantasy.com/games/flexboxadventure)** - Äventyrsspel som tränar flexbox-positionering.
3. **[Flexbox Defense](http://www.flexboxdefense.com/)** - Försvara din bas genom att placera torn med CSS.
4. **[CSSBattle](https://cssbattle.dev)** - Tävla mot andra utvecklare i att återskapa grafiska mönster med så lite CSS som möjligt.

---

## Validering

Ta gärna för vana att alltid validera dina filer innan inlämning:
- **HTML5 Validator:** <http://html5.validator.nu>
- **CSS Validator:** <http://jigsaw.w3.org/css-validator>

---

## Information om skolans server

- **Servernamn:** `student.oedu.se`
- **Din webbadress:** `https://student.oedu.se/~ditt_login/`
- **SSH / SFTP-port:** `3690`

### Anslut via SSH i terminalen:
```bash
ssh -p 3690 ditt_login@student.oedu.se
```

### Använd Visual Studio Code med Remote - SSH
1. Installera **Visual Studio Code**: <https://code.visualstudio.com/>
2. Installera tillägget **"Remote - SSH"** (av Microsoft).
3. Klicka på den gröna ikonen längst ner till vänster och välj **Connect to Host...** -> **Add New SSH Host...**.
4. Skriv in: `ssh -p 3690 ditt_login@student.oedu.se`
5. Öppna din mapp `public_html` på servern. Nu redigerar du filer direkt på servern utan att behöva ladda upp manuellt!

---

## Namnge filer och mappar

1. **Små bokstäver:** På en Linux-server är filnamn skiftlägeskänsliga (`index.html` är inte samma som `Index.html`). Använd alltid små bokstäver.
2. **Undvik å, ä, ö:** Använd `a` och `o` istället för svenska tecken i fil- och mappnamn.
3. **Undvik mellanslag:** Använd understreck (`_`) eller bindestreck (`-`) istället för mellanslag.
4. **Startsidan:** Filen `index.html` fungerar automatiskt som webbplatsens startsida i varje mapp.
5. **Filändelser:** Använd standardiserade filändelser som `.html`, `.css` och `.js`.

---

## 🚀 Egna sidoprojekt & AI-verktyg (Antigravity, Cursor m.fl.)

Ett av de absolut bästa och roligaste sätten att bli en riktigt vass webbutvecklare är att **bygga egna projekt vid sidan av kursens obligatoriska uppgifter**. 

Att förverkliga egna idéer ger massor av praktisk erfarenhet. Det kan vara vad som helst du tycker är intressant:
- En personlig portfolio eller presentationssida
- En spelsida, ett interaktivt quiz eller en fan-site för din favoritartist
- En design-prototyp för en idé eller ett UF-företag
- Ett interaktivt verktyg eller en hobbyapp

### Frihet att experimentera med AI-agenter i egna projekt!
I dina **egna sidoprojekt** är det helt fritt fram att utforska och experimentera med moderna **AI-agenter och kodassistenter** som t.ex.:
- **Google Antigravity**
- **Cursor**
- **GitHub Copilot**
- **Claude Code & ChatGPT**

Genom att arbeta med AI-agenter i egna projekt lär du dig prompt-engineering, att granska kod och hur man snabbt tar en idé från skiss till färdig produkt.

> **⚠️ Tänk på vid kursens obligatoriska inlämningar:**
> Vid kursens bedömningsuppgifter är det dina egna kunskaper och din egen förståelse som mäts. Använd gärna AI som en personlig lärare/tutor för att förklara koncept och hitta buggar, men se till att du själv förstår och kan förklara varje rad kod du lämnar in.

---

## Webbutveckling 1 (Kursplan & Betygskriterier)

**Kurskod:** WEUWEB01  
**Omfattning:** 100 poäng

### Centralt innehåll

Undervisningen i kursen ska behandla följande centrala innehåll:
- Webben som plattform, dess historia och samhällspåverkan.
- Teknisk orientering om webbens protokoll, adresser, säkerhet och samspelet mellan klient och server.
- Publikation av webbplatser med och utan webbpubliceringssystem.
- Processen för ett webbutvecklingsprojekt med målsättningar, planering, specifikation av struktur och design, kodning, optimering, testning, dokumentation och uppföljning.
- Märkspråk och deras inbördes roller, syntax och semantik – där det huvudsakliga innehållet är standarderna för HTML och CSS samt orientering om ECMAScript och dokumentobjektsmodellen (DOM).
- Teckenkodning, begrepp, standarder och handhavande.
- Bilder och media med alternativa format, optimering och tillgänglighet.
- Riktlinjer för god praxis inom webbutveckling.
- Interoperabilitet genom att följa standarder och testa på olika användaragenter.
- Applikationer som fungerar oberoende av val av användaragent, operativsystem eller hårdvaruplattform och hur tillgänglighet uppnås även för användare med funktionsnedsättning.
- Kvalitetssäkring av applikationens funktion och validering av kodens kvalitet.
- Säkerhet och sätt att identifiera hot och sårbarheter samt hur attacker kan motverkas genom effektiva åtgärder.
- Lagar och andra bestämmelser som styr digital information, till exempel personuppgiftslagen (GDPR) och upphovsrätt.
- Terminologi inom området webbutveckling.

### Betygskriterier

#### Betyget E
Eleven beskriver **översiktligt** webbens historia och dess påverkan på samhället och de grundläggande tekniker som webben bygger på. Eleven använder med **visst** handlag webbpubliceringssystem och redogör **översiktligt** för dess funktionalitet.

Eleven upprättar en **enkel** projektplan för en tänkt produkt. Eleven utvecklar utifrån planen en produkt **i samråd** med handledare. I arbetet utvecklar eleven kod som med **tillfredsställande** resultat följer standarder och omfattar **någon** av de grundläggande teknikerna för märkspråk och stilmallar. Eleven bearbetar också **med viss säkerhet enkel** text, bild och eventuell annan media så att de anpassas till produkten.

Produkten är av **tillfredsställande** kvalitet och följer etablerad god praxis vilket eleven kontrollerar med **begränsade** tester. Eleven testar produkten i **någon** webbläsare. Eleven testar också produkten på **någon** plattform och vidtar **begränsade** åtgärder för att åstadkomma snabb överföring av bilder eller andra mediafiler. Dessutom bygger eleven en webbplats som med **tillfredsställande** resultat följer grundläggande principer för tillgänglighet.

När arbetet är utfört gör eleven en **enkel** dokumentation av de moment som har utförts och utvärderar med **enkla** omdömen sitt arbete och resultat. Eleven redogör **översiktligt** för innehållet i lagar och andra bestämmelser som rör publicering på webben samt följer dem i sitt arbete. Eleven redogör **översiktligt** för relevanta säkerhetslösningar samt hanterar lösenord och annan känslig data på ett etiskt riktigt sätt. Eleven för dessutom **enkla** resonemang om webbrelaterade frågor om etik och integritet. Eleven använder **med viss säkerhet** terminologi inom området.

#### Betyget D
Elevens kunskaper bedöms sammantaget vara mellan C och E.

#### Betyget C
Eleven beskriver **utförligt** webbens historia och dess påverkan på samhället och de grundläggande tekniker som webben bygger på. Eleven använder med **gott** handlag webbpubliceringssystem och redogör **utförligt** för dess funktionalitet.

Eleven upprättar en **genomarbetad** projektplan för en tänkt produkt. Eleven utvecklar utifrån planen en produkt **efter samråd** med handledare. I arbetet utvecklar eleven kod som med **tillfredsställande** resultat följer standarder och som omfattar **några** av de grundläggande teknikerna för märkspråk och stilmallar. **I produkten infogar eleven enkla skript**. Eleven bearbetar **med viss säkerhet och via flera moment** text, bild och eventuell annan media, så att de anpassas till produkten.

Produkten är av **tillfredsställande** kvalitet och följer etablerad god praxis vilket eleven kontrollerar med **automatiserade** tester. Eleven testar produkten i **några** webbläsare. Eleven testar också produkten på **några** plattformar **inklusive traditionella datorer eller mobila enheter** och vidtar åtgärder för att åstadkomma snabb överföring av bilder och andra mediafiler. Dessutom bygger eleven en webbplats som med **tillfredsställande** resultat följer grundläggande principer för tillgänglighet **och kontrollerar detta med några automatiserade tester**.

När arbetet är utfört gör eleven en **noggrann** dokumentation av de moment som har utförts och utvärderar med **nyanserade** omdömen sitt arbete och resultat. Eleven redogör **utförligt** för innehållet i lagar och andra bestämmelser som rör publicering på webben samt följer dem i sitt arbete. Eleven redogör **utförligt** för relevanta säkerhetslösningar samt hanterar lösenord och annan känslig data på ett etiskt riktigt sätt. Eleven för dessutom **välgrundade** resonemang om webbrelaterade frågor om etik och integritet. **Eleven beskriver även hur tredjepartskod kan innebära problem för produktens säkerhet**. Eleven använder **med viss säkerhet** terminologi inom området.

#### Betyget B
Elevens kunskaper bedöms sammantaget vara mellan A och C.

#### Betyget A
Eleven beskriver **utförligt och nyanserat** webbens historia och dess påverkan på samhället och de grundläggande tekniker som webben bygger på. Eleven använder med **mycket gott** handlag webbpubliceringssystem och redogör **utförligt och nyanserat** för dess funktionalitet.

Eleven upprättar en **genomarbetad** projektplan för en tänkt produkt och **reviderar den vid behov**. Eleven utvecklar utifrån planen en produkt **efter samråd** med handledare. I arbetet utvecklar eleven kod som med **gott** resultat följer standarder och som omfattar **flera** av de grundläggande teknikerna för märkspråk och stilmallar. **I produkten infogar eleven diskreta domskript**. Eleven bearbetar **med säkerhet och via flera moment** text, bild och eventuell annan media så att de anpassas till produkten.

Produkten är av **god** kvalitet och följer etablerad god praxis vilket eleven kontrollerar med **omfattande automatiserade och manuella** tester. Eleven testar produkten i **flera** webbläsare. Eleven testar också produkten på **flera** plattformar **inklusive traditionella datorer och mobila enheter**, vidtar **omfattande** åtgärder **samt optimerar** bilder eller andra mediafiler för att åstadkomma snabb överföring av dessa **och för att reducera antalet överföringar per sida**. Dessutom bygger eleven en webbplats som med **gott** resultat följer grundläggande principer för tillgänglighet **och kontrollerar detta med automatiserade tester och simuleringar**.

När arbetet är utfört gör eleven en **noggrann och utförlig** dokumentation av de moment som har utförts **med koppling till generella principer och testresultat** och utvärderar med **nyanserade** omdömen sitt arbete och resultat **samt ger förslag på hur arbetet kan förbättras**. Eleven redogör **utförligt och nyanserat** för innehållet i lagar och andra bestämmelser som rör publicering på webben samt följer dem i sitt arbete. Eleven redogör **utförligt och nyanserat** för relevanta säkerhetslösningar samt hanterar lösenord och annan känslig data på ett etiskt riktigt sätt. Eleven för dessutom **välgrundade och nyanserade** resonemang om webbrelaterade frågor om etik och integritet.