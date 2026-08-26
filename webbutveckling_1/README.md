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

## Webbutveckling — GY25 Ämnesplan

**Kurskod:** WEBB1000X (Nivå 1)  
**Omfattning:** 100 poäng

### Ämnets syfte
Undervisningen i ämnet webbutveckling ska syfta till att eleverna utvecklar färdigheter i att skapa produkter med hjälp av olika webbtekniker. Undervisningen ska bidra till att eleverna utvecklar förståelse av hur webbteknik har utvecklats och används i samhället.

Eleverna ska ges möjlighet att utveckla kunskaper om olika webbteknikers konstruktion och funktionalitet samt om samspelet mellan beställare, användare, formgivare och utvecklare. Genom undervisningen ska eleverna ges möjlighet att utveckla produkter som följer standarder och riktlinjer för god praxis, användbarhet och tillgänglighet. Undervisningen ska även leda till att eleverna utvecklar kunskaper om lagar och andra bestämmelser inom området samt förmåga att göra webbrelaterade etiska överväganden.

I undervisningen ska eleverna ges möjlighet att utveckla kunskaper om och färdigheter i att använda verktyg för att producera och kontrollera den kod som hanteras av webbklienten. Eleverna ska även ges möjlighet att utveckla förmåga att använda relevant terminologi.

Undervisningen ska ge eleverna möjlighet att arbeta praktiskt med utveckling av delar till en webbplats. Undervisningen ska också ge eleverna tillfälle till arbete i projektform. På så vis ska eleverna ges möjlighet att omsätta sina kunskaper i webbutveckling till omdömesgilla handlingar.

---

### Centralt innehåll (Nivå 1)

Undervisningen i ämnet webbutveckling på nivå 1 ska behandla följande centrala innehåll:

#### Webbens betydelse och funktion
- Webben som plattform och dess samhällspåverkan.
- Teknisk orientering om webbens protokoll, adresser och samspelet mellan klient och server.
- Grundläggande terminologi inom området webbutveckling.

#### Webbsidor
- Märkspråk och deras inbördes roller, syntax och semantik med fokus på standarderna för HTML (hypertext markup language) och CSS (cascading style sheets).
- Skapande av webbsidor med HTML och CSS.
- Introduktion till responsiv design.
- Översikt av alternativa metoder för att skapa och redigera webbsidor.
- Användning av bilder och media i lämpliga format för webben.
- Kvalitetssäkring av webblösningars funktion och validering av koders kvalitet.
- Teckenkodning, begrepp, standarder och handhavande.
- Introduktion till typsnitt, färgscheman och principer för layout av gränssnitt.
- Orientering om javascript och DOM (dokumentobjektsmodellen).

#### Tillgänglighet
- Riktlinjer för god praxis och tillgänglighet inom webbutveckling.
- Introduktion till hantering och anpassning av kod, bilder och media för att uppnå tillgänglighet.
- Interoperabilitet genom standarder och testning på olika användaragenter.

#### Webbutvecklingsprocessen
- Utvecklingsprocessen för ett mindre webbprojekt med målsättning, planering och specifikation av struktur och design. Kodning och verifiering av funktion och dokumentation.

#### Lagar och andra bestämmelser
- Riktlinjer, lagar och andra bestämmelser som styr hantering av digital information, till exempel upphovsrätt och bestämmelser som gäller hantering av personuppgifter.
- Etiska överväganden i samband med webbutveckling.

---

### Betygskriterier (GY25)

#### Betyget E
- Eleven visar **godtagbara** kunskaper om webbens betydelse och funktion.
- Eleven skapar webblösningar med **viss** anpassning till syfte, användare och tillgänglighet.
- Eleven planerar och genomför webbutvecklingsprojekt med **viss säkerhet**. Eleven utvärderar process och resultat med **enkla** omdömen.
- Eleven gör med **viss säkerhet** etiska överväganden samt arbetar i enlighet med lagar och andra bestämmelser inom webbutveckling.

#### Betyget D
Elevens kunskaper bedöms sammantaget vara mellan C och E.

#### Betyget C
- Eleven visar **goda** kunskaper om webbens betydelse och funktion.
- Eleven skapar webblösningar med **god** anpassning till syfte, användare och tillgänglighet.
- Eleven planerar och genomför webbutvecklingsprojekt med **säkerhet**. Eleven utvärderar process och resultat med **utvecklade** omdömen.
- Eleven gör med **säkerhet** etiska överväganden samt arbetar i enlighet med lagar och andra bestämmelser inom webbutveckling.

#### Betyget B
Elevens kunskaper bedöms sammantaget vara mellan A och C.

#### Betyget A
- Eleven visar **mycket goda** kunskaper om webbens betydelse och funktion.
- Eleven skapar webblösningar med **mycket god** anpassning till syfte, användare och tillgänglighet.
- Eleven planerar och genomför webbutvecklingsprojekt med **god säkerhet**. Eleven utvärderar process och resultat med **välutvecklade** omdömen.
- Eleven gör med **god säkerhet** etiska överväganden samt arbetar i enlighet med lagar och andra bestämmelser inom webbutveckling.