# Projektuppgift: Informationssida om ditt intresse

## Syfte
Du ska bygga en modern, visuell och responsiv **informationssida om ett ämne du själv brinner för** (t.ex. din favoritartist, ett datorspel, motorsport, film/serier, en idrottsförening eller ett UF-företag). 

Projektet fokuserar på två av webbutvecklingens viktigaste hörnstenar:
1. **Modern layout & Responsivitet:** Använda **Flexbox** och **CSS Grid** så att sidan ser fantastisk ut på både mobil, surfplatta och dator.
2. **Medieoptimering & Prestanda:** Bädda in film och bildgalleri med optimerade filstorlekar och moderna format (WebP och MP4) för blixtsnabb laddtid.

---

## 📚 Kunskapskrav & Vad du behöver läsa på om

Läs och genomför följande lektioner i **The Odin Project (Foundations)** innan och under tiden du bygger layouten:
- 📖 **[The Box Model](https://www.theodinproject.com/lessons/foundations-the-box-model)** — Förstå hur element beräknar sin bredd, marginaler (`margin`), inre luft (`padding`) och ramar (`border`).
- 📖 **[Block and Inline](https://www.theodinproject.com/lessons/foundations-block-and-inline)** — Skillnaden på block-element (`<div>`, `<section>`) och inline-element (`<span>`, `<a>`).
- 📖 **[Introduction to Flexbox](https://www.theodinproject.com/lessons/foundations-introduction-to-flexbox)** — Hur `display: flex` fungerar för moderna layouter.
- 📖 **[Growing and Shrinking](https://www.theodinproject.com/lessons/foundations-growing-and-shrinking)** — `flex-grow`, `flex-shrink` och `flex-basis`.
- 📖 **[Axes and Alignment](https://www.theodinproject.com/lessons/foundations-axes)** — `justify-content` och `align-items`.
- 📖 **[Flexbox Alignment Practice](https://www.theodinproject.com/lessons/foundations-alignment)** — Praktiska övningar i Flexbox.

---

## Mål
Efter avslutat projekt ska du kunna:
- **Flexbox & Grid:** Skapa flexibla och snygga layouter utan gamla tabeller eller floats.
- **Responsiv design:** Använda *Media Queries* och `viewport` för att anpassa layouten sömlöst mellan mobil och desktop.
- **Medieoptimering:** Skala om och komprimera bilder (WebP/JPG) och video (MP4/Handbrake) för webben.
- **HTML5 Media:** Bädda in responsiva bilder och video med `<video>` och `<img>`.
- **Tillgänglighet & Upphovsrätt:** Skriva meningsfulla `alt`-texter, säkerställa god färgkontrast och använda upphovsrättsskyddat material på ett lagligt sätt (t.ex. Creative Commons eller Pexels/Unsplash).

---

## Kravspecifikation

### 1. Innehåll & Struktur
- **Tema:** Fritt valt intresseområde.
- **Hero-sektion:** En pampig toppsektion med en rubrik, kort ingress och en inbäddad videobakgrund eller presentationsvideo (`<video>`).
- **Informationssektioner:** Text och layout uppbyggd med semantiska taggar (`<header>`, `<main>`, `<section>`, `<article>`, `<footer>`).
- **Bildgalleri / Kort (Cards):** Ett bildgalleri eller en rutnätssektion byggd med **CSS Flexbox** eller **CSS Grid**.

### 2. Medieoptimering (Viktigt!)
Inga råfiler direkt från kameran får laddas upp!
- **Bilder:** Ska skalas ner till rimlig webbupplösning (max 1920px bredd för hero, mindre för galleribilder) och sparas som **WebP** eller **JPG** (rekommenderad filstorlek: under 200 KB per bild). Använd verktyg som [Squoosh.app](https://squoosh.app/) eller GIMP.
- **Video:** Komprimera din video med **Handbrake** eller **VLC** till MP4 (H.264) med rimlig bitrate så att den laddar snabbt utan lagg.
- **Tillgänglighet:** Alla bilder ska ha beskrivande `alt`-texter och sidans färger ska ha tillräcklig kontrast för god läsbarhet.

### 3. Responsivitet (Mobil-först)
- Sidan ska fungera och se lika snygg och genomtänkt ut på en smal mobilskärm som på en bred datorskärm.
- Använd minst en `@media (min-width: ...)` query för att bryta om layouten (t.ex. från 1 kolumn på mobil till 2-3 kolumner på dator).

---

## Arbetsgång steg för steg

1. **Välj ämne & samla material:**
   - Samla 3–6 fina bilder och 1 kort videoklipp (egna eller gratis från t.ex. [Pexels](https://www.pexels.com/) eller [Unsplash](https://unsplash.com/)).
2. **Optimera medierna:**
   - Skala och komprimera bilderna via [Squoosh.app](https://squoosh.app/) eller GIMP till WebP.
   - Komprimera videon med Handbrake eller VLC.
   - *Notera gärna filstorlekarna före och efter optimeringen!*
3. **Bygg HTML-strukturen:**
   - Skriv semantisk HTML5 i `index.html`.
4. **Styla med CSS:**
   - Bygg mobilvyn först, lägg till Flexbox för menyer och kort, och Grid för galleriet.
   - Lägg till Media Queries för surfplatta och dator.
5. **Kvalitetssäkra med Lighthouse:**
   - Öppna webbläsarens utvecklarverktyg (F12) -> fliken **Lighthouse** -> kör en analys för att kontrollera din prestanda (*Performance*) och tillgänglighet (*Accessibility*). Målet är gröna siffror (90+)!

---

## Bedömning

| Kvalitet / Betygsnivå | **Betyget E** | **Betyget C** | **Betyget A** |
| :--- | :--- | :--- | :--- |
| **Layout & Responsivitet** | Sidan har en fungerande HTML- och CSS-struktur. Layouten anpassar sig i viss mån till mobila skärmar. | Layouten är välstrukturerad med Flexbox eller Grid. Sidan är helt responsiv med genomtänkta Media Queries för både mobil och desktop. | Mycket tilltalande och professionell layout med modern typografi, balanserad luft (padding/margin) och avancerad Flexbox/Grid-användning. |
| **Medieoptimering & Prestanda** | Bilder och video visas och är komprimerade under originalstorlek. `alt`-texter finns. | Medierna är optimalt skalade och komprimerade till moderna format (WebP/MP4). Sidan laddar snabbt och uppnår bra resultat i Lighthouse. | Omfattande optimering (under 100-200 KB per bild) med minimal layout shift (`width`/`height` angivet). Mycket höga poäng i Lighthouse (Performance & Accessibility). |
| **Källor & Tillgänglighet** | Materialet är lagligt använt. Grundläggande kontraster. | Källor/licenser redovisas tydligt (t.ex. Creative Commons/Pexels). Tillgängligheten är god med korrekta kontrastvärden och semantik. | Exemplarisk hantering av upphovsrätt och tillgänglighet med fullt semantisk HTML och genomtänkta alternativtexter. |

---

## Resurser & Verktyg
- [Squoosh.app](https://squoosh.app/) (Blixtsnabb och visuell bildkomprimering direkt i webbläsaren)
- [Handbrake](https://handbrake.fr/) (Bästa gratisprogrammet för videokomprimering)
- [CSS Tricks: A Complete Guide to Flexbox](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)
- [CSS Tricks: A Complete Guide to CSS Grid](https://css-tricks.com/snippets/css/complete-guide-grid/)
- [Pexels](https://www.pexels.com/) & [Unsplash](https://unsplash.com/) (Gratis royalty-fria bilder och videoklipp)