# Projektuppgift: Din Portalsida

## Syfte
Detta är kursens första och viktigaste "hem". Du ska skapa en **Portalsida** (`index.html`) som fungerar som din personliga startsida på webbservern. Härifrån ska besökare och lärare kunna klicka sig vidare till alla dina framtida projektuppgifter i kursen. Sidan ska också fungera som ett snyggt digitalt visitkort!

---

## 📚 Kunskapskrav & Vad du behöver läsa på om

Innan och under tiden du bygger din portalsida läser du och genomför övningarna i följande lektioner i **The Odin Project (Foundations)**:
- 📖 **[Introduction to HTML and CSS](https://www.theodinproject.com/lessons/foundations-introduction-to-html-and-css)** — Grunderna i hur webbläsaren tolkar kod.
- 📖 **[HTML Boilerplate](https://www.theodinproject.com/lessons/foundations-html-boilerplate)** — Den obligatoriska grundstrukturen (`<!DOCTYPE html>`, `<html>`, `<head>`, `<body>`).
- 📖 **[Elements and Tags](https://www.theodinproject.com/lessons/foundations-elements-and-tags)** — Hur HTML-taggar fungerar.
- 📖 **[Working with Text](https://www.theodinproject.com/lessons/foundations-working-with-text)** — Rubriker (`<h1>`–`<h6>`), stycken (`<p>`) och fetstil/kursiv.
- 📖 **[Lists](https://www.theodinproject.com/lessons/foundations-lists)** — Ordnade (`<ol>`) och oordnade (`<ul>`) punktlistor för din navigationsmeny.
- 📖 **[Links and Images](https://www.theodinproject.com/lessons/foundations-links-and-images)** — Hur man skapar hyperlänkar (`<a href="...">`) och lägger in bilder (`<img src="..." alt="...">`).
- 📖 **[Intro to CSS & The Cascade](https://www.theodinproject.com/lessons/foundations-intro-to-css)** — CSS-syntax, selektorer och externa formatmallar (`style.css`).

---

## Mål
Efter avslutat projekt ska du kunna:
- **HTML-struktur:** Skapa ett korrekt HTML5-dokument med `<head>` och `<body>`.
- **CSS:** Koppla en extern CSS-fil (`style.css`) för att styra färger, typografi och layout.
- **Semantik:** Använda rätt taggar för rätt sak (`<nav>`, `<header>`, `<main>`, `<article>`, `<footer>`).
- **Responsivitet:** Få sidan att fungera i mobilen med `viewport`-taggen.
- **Serverpublicering:** Lägga filerna på rätt plats på webbservern `student.oedu.se`.

---

## Uppgiftsbeskrivning

### 1. Filstruktur
Skapa filen `index.html` och `style.css` direkt i din mapp `public_html/`.
*URL:en till din sida blir: `https://student.oedu.se/~ditt_login/`*

### 2. Innehåll
Sidan ska innehålla:
1. **Presentation:** Vem är du? (En bild på dig eller en avatar, samt en kort introduktionstext).
2. **Navigation:** En lista med länkar till kursens projekt (t.ex. *Informationssida*, *Webbquiz*, *Slutprojekt*). Denna lista fyller du på allt eftersom du gör klart uppgifterna.
3. **Kontakt:** Din e-postadress.
4. **QR-kod:** En QR-kod som pekar på din egen URL, så att man lätt kan scanna och öppna sidan i mobilen.

### 3. Tekniska Krav
- **Normalize.css:** Använd `normalize.css` för att nollställa webbläsarens standardmarginaler ([Ladda ner här](https://necolas.github.io/normalize.css/)).
- **Semantisk HTML:** Använd meningsfulla taggar (`<header>`, `<nav>`, `<main>`, `<section>`, `<footer>`).
- **Responsivitet:** Glöm inte `viewport`-taggen i `<head>` så att sidan skalas rätt på mobiler:
  ```html
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  ```

---

## Bedömning

| Aspekt / Betygsnivå | **Betyget E** | **Betyget C** | **Betyget A** |
| :--- | :--- | :--- | :--- |
| **1. HTML-struktur & Semantik** | Sidan har en giltig grundstruktur (`<!DOCTYPE html>`, `<html>`, `<head>`, `<body>`). Korrekta rubriknivåer (`<h1>`, `<h2>`), punktlistor för navigation samt bild med `alt`-text och fungerande länkar. | Sidan använder semantiska taggar konsekvent (`<header>`, `<nav>`, `<main>`, `<section>`, `<footer>`). Koden är välindenterad och följer W3C-standarder utan allvarliga valideringsfel. | Exemplarisk semantik och tillgänglighet. Alla länk- och bildelement är optimerade, och källkoden är exceptionellt ren, lättläst och logiskt uppbyggd. |
| **2. CSS, Layout & Responsivitet** | Separat CSS-fil används. Grundläggande färger, typsnitt och marginaler är satta. Sidan har en fungerande `viewport`-tagg och fungerar i webbläsaren. | Genomtänkt mobilanpassad layout som ser bra ut på både mobil och desktop. `normalize.css` används och layouten bygger på flexibla principer eller grundläggande Flexbox. | Professionell "digitalt visitkort"-känsla. Avancerad användning av modern CSS (Flexbox/Grid, CSS-variabler eller subtle hover-animationer). Harmonisk färgpalett och modern typografi. |
| **3. Serverpublicering & Kodordning** | Filerna är korrekt namngivna (`index.html`, `style.css`) och publicerade på rätt plats i `public_html/` på skolans webbserver `student.oedu.se`. | Fil- och mappstruktur följer god Linux-standard (små bokstäver, inga mellanslag). Sidan laddar snabbt och felfritt via dess publika webbadress. | Sidan och alla externa resurser (bilder, QR-kod, CSS) laddar felfritt via HTTPS. Koden är välstrukturerad och validerar rent i W3C Validator. |