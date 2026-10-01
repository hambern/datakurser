# Projektuppgift: Informationssida om ditt intresse

## Syfte
Du ska bygga en modern, visuell och responsiv **informationssida om ett ämne du själv brinner för** (t.ex. din favoritartist, ett datorspel, motorsport, film/serier, en idrottsförening eller ett UF-företag). 

Projektet fokuserar på två av webbutvecklingens viktigaste hörnstenar:
1. **Modern layout med Flexbox & Responsivitet:** Använda **Flexbox** för att skapa elastiska och följsamma layouter som ser fantastiska ut på mobil, surfplatta och dator.
2. **Medieoptimering & Prestanda:** Bädda in film och bildgalleri med optimerade filstorlekar och moderna format (WebP och MP4) för blixtsnabb laddtid.

---

## 📚 Kunskapskrav & Länkar (The Odin Project)

Läs och genomför följande lektioner i **The Odin Project (Foundations)** innan och under tiden du bygger layouten:
- 📖 **[The Box Model](https://www.theodinproject.com/lessons/foundations-the-box-model)** — Förstå `margin`, `padding`, `border` och `box-sizing`.
- 📖 **[Block and Inline](https://www.theodinproject.com/lessons/foundations-block-and-inline)** — Skillnaden på block-element (`<div>`, `<section>`) och inline-element (`<span>`, `<a>`).
- 📖 **[Introduction to Flexbox](https://www.theodinproject.com/lessons/foundations-introduction-to-flexbox)** — Hur `display: flex` fungerar för moderna layouter.
- 📖 **[Growing and Shrinking](https://www.theodinproject.com/lessons/foundations-growing-and-shrinking)** — `flex-grow`, `flex-shrink` och `flex-basis`.
- 📖 **[Axes and Alignment](https://www.theodinproject.com/lessons/foundations-axes)** — Huvudaxel och tväraxel (`justify-content` och `align-items`).
- 📖 **[Flexbox Alignment Practice](https://www.theodinproject.com/lessons/foundations-alignment)** — Öva på Flexbox-justering.

---

## Mål
Efter avslutat projekt ska du kunna:
- **Flexbox:** Skapa flexibla layouter med `display: flex`, `flex-direction`, `flex-wrap` och `gap` utan gamla tabeller eller floats.
- **Responsiv design:** Använda *Media Queries* (`@media`) för att ställa om Flexbox-layouter mellan mobil och dator.
- **Medieoptimering:** Skala om och komprimera bilder (WebP/JPG) och video (MP4) för webben.
- **HTML5 Media:** Bädda in responsiva bilder och video med `<video>` och `<img>`.
- **Tillgänglighet & Upphovsrätt:** Skriva beskrivande `alt`-texter, säkerställa god färgkontrast och använda upphovsrättsskyddade medier på ett lagligt sätt.

---

## Kravspecifikation

### 1. Innehåll & Struktur
- **Tema:** Fritt valt intresseområde.
- **Hero-sektion:** En pampig toppsektion med rubrik, ingress och en inbäddad video eller stor bild.
- **Informationssektioner:** Uppbyggt med semantiska HTML5-taggar (`<header>`, `<nav>`, `<main>`, `<section>`, `<article>`, `<footer>`).
- **Kort- / Bildgalleri:** Bildgalleri eller infokort byggt **enbart med Flexbox** (`flex-wrap: wrap`).

### 2. Medieoptimering (Viktigt!)
Inga råfiler direkt från kameran får laddas upp!
- **Bilder:** Skala ner till rimlig webbupplösning (max 1920px bredd för hero, ca 600–800px för galleribilder) och spara som **WebP** eller **JPG** (under 200 KB per bild). Använd t.ex. [Squoosh.app](https://squoosh.app/).
- **Video:** Komprimera video med **Handbrake** eller **VLC** till MP4 (H.264).
- **Tillgänglighet & Prestanda:** Alla `<img>` ska ha beskrivande `alt`-text samt angiven `width` och `height` i HTML för att undvika att sidan hoppar när bilden laddas (Layout Shift).

### 3. Responsivitet (Mobil-först)
- Bygg mobilvyn först (standard CSS för smala skärmar).
- Använd minst en `@media (min-width: 768px)` query för att bryta om Flexbox-rader (t.ex. ställa om `flex-direction: column` till `row` eller låta kort ligga bredvid varandra).

---

## 💡 Kodexempel & Tips

### 1. Grundläggande CSS & Nollställning (`style.css`)
```css
/* Nollställ marginaler och aktivera korrekt box-model */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: system-ui, -apple-system, sans-serif;
  line-height: 1.6;
  color: #333;
  background-color: #f4f4f9;
}

/* Gör bilder och videor responsiva */
img, video {
  max-width: 100%;
  height: auto;
  display: block;
}
```

### 2. Navigeringsfält med Flexbox
```html
<header class="navbar">
  <h1 class="logo">Min Intressesida</h1>
  <nav>
    <ul class="nav-links">
      <li><a href="#om">Om</a></li>
      <li><a href="#galleri">Galleri</a></li>
      <li><a href="#video">Video</a></li>
    </ul>
  </nav>
</header>
```

```css
.navbar {
  display: flex;
  justify-content: space-between; /* Skjuter ut logotyp till vänster och meny till höger */
  align-items: center;            /* Centrerar vertikalt */
  background-color: #1a1a2e;
  color: #fff;
  padding: 1rem 2rem;
}

.nav-links {
  display: flex;
  gap: 1.5rem;                    /* Luft mellan menylänkarna */
  list-style: none;
}

.nav-links a {
  color: #fff;
  text-decoration: none;
}
```

### 3. Responsivt Kortgalleri med Flexbox
```html
<section class="card-container">
  <article class="card">
    <img src="images/foto1.webp" alt="Beskrivning av bilden" width="600" height="400">
    <h3>Rubrik</h3>
    <p>Kort beskrivande text om innehållet.</p>
  </article>
  <!-- Fler kort... -->
</section>
```

```css
/* Container för alla kort */
.card-container {
  display: flex;
  flex-wrap: wrap;       /* Tillåter korten att bryta till ny rad */
  gap: 20px;             /* Avstånd mellan korten */
  padding: 2rem;
}

/* Kort på mobil (tar 100% av bredden) */
.card {
  flex: 1 1 100%;
  background: #fff;
  padding: 1rem;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* För större skärmar (t.ex. surfplatta och dator) */
@media (min-width: 768px) {
  .card {
    /* 3 kolumner: 1/3 bredd minus gap */
    flex: 1 1 calc(33.333% - 20px);
    min-width: 250px;
  }
}
```

### 4. Inbäddad Video (HTML)
```html
<section class="video-section">
  <h2>Se videoklippet</h2>
  <video controls poster="images/poster.webp" width="1280" height="720">
    <source src="media/video.mp4" type="video/mp4">
    Din webbläsare stöder inte videotaggen.
  </video>
</section>
```

---

## 🛠️ Praktiska tips för elever

1. **Använd `gap` istället för `margin`:**
   När du har `display: flex` räcker det att sätta `gap: 1.5rem;` på föräldern för att få jämnt avstånd mellan alla barn. Du slipper mixtra med marginaler på enskilda element!
2. **Gör kort responsiva med `flex-wrap`:**
   Sätt `display: flex; flex-wrap: wrap;` på container-elementet och `flex: 1 1 100%;` på korten. I din `@media (min-width: 768px)` ändrar du kortens `flex` till t.ex. `flex: 1 1 calc(33.333% - 20px);`.
3. **Undvik att sidan "hoppar" (Layout Shift):**
   Ange alltid ursprunglig `width` och `height` direkt i HTML-koden på bilderna (t.ex. `width="600" height="400"`). Kombinerat med `max-width: 100%; height: auto;` i CSS kommer bilderna att skalas snyggt utan att sidan hoppar runt medan de laddas.

---

## Arbetsgång steg för steg

1. **Välj ämne & samla material:**
   - Samla 3–6 fina bilder och 1 kort videoklipp ([Pexels](https://www.pexels.com/) eller [Unsplash](https://unsplash.com/)).
2. **Optimera medierna:**
   - Skala och komprimera bilderna via [Squoosh.app](https://squoosh.app/) till WebP.
   - Komprimera videon med Handbrake eller VLC till MP4.
3. **Bygg HTML-strukturen:**
   - Skriv semantisk HTML5 i `index.html`.
4. **Styla med CSS & Flexbox:**
   - Bygg mobilvyn först (`flex-direction: column`).
   - Lägg till Flexbox för navigering och kortgalleri (`flex-wrap: wrap`).
   - Lägg till Media Queries (`@media (min-width: 768px)`) för datorvy.
5. **Kvalitetssäkra med Lighthouse:**
   - Öppna utvecklarverktygen i webbläsaren (F12) -> fliken **Lighthouse** -> kör analys för *Performance* och *Accessibility*. Målet är 90+!

---

## Bedömning

| Kvalitet / Betygsnivå | **Betyget E** | **Betyget C** | **Betyget A** |
| :--- | :--- | :--- | :--- |
| **Layout & Responsivitet** | Sidan har en fungerande HTML- och CSS-struktur. Layouten anpassar sig i viss mån till mobila skärmar med Flexbox. | Layouten är välstrukturerad med Flexbox. Sidan är helt responsiv med genomtänkta Media Queries för både mobil och desktop. | Mycket tilltalande och professionell layout med modern typografi, balanserad luft (padding/margin) och avancerad Flexbox-användning (`flex-grow`, `flex-shrink`, `flex-basis`, `gap`). |
| **Medieoptimering & Prestanda** | Bilder och video visas och är komprimerade under originalstorlek. `alt`-texter finns. | Medierna är optimalt skalade och komprimerade till moderna format (WebP/MP4). Sidan laddar snabbt och uppnår bra resultat i Lighthouse. | Omfattande optimering (under 100-200 KB per bild) med minimal layout shift (`width`/`height` angivet i HTML). Mycket höga poäng i Lighthouse. |
| **Källor & Tillgänglighet** | Materialet är lagligt använt. Grundläggande kontraster. | Källor/licenser redovisas tydligt (t.ex. Creative Commons/Pexels). Tillgängligheten är god med korrekta kontrastvärden och semantik. | Exemplarisk hantering av upphovsrätt och tillgänglighet med fullt semantisk HTML och genomtänkta alternativtexter. |

---

## Resurser & Verktyg
- [Squoosh.app](https://squoosh.app/) (Bildkomprimering till WebP)
- [Handbrake](https://handbrake.fr/) (Videokomprimering till MP4)
- [CSS Tricks: A Complete Guide to Flexbox](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)
- [Pexels](https://www.pexels.com/) & [Unsplash](https://unsplash.com/) (Gratis royaltyfria bilder och videor)