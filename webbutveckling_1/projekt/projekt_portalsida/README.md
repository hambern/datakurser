# Projektuppgift: Din Portalsida

## Syfte
Detta är kursens första och viktigaste "hem". Du ska skapa en **Portalsida** (`index.html`) som fungerar som din personliga startsida på webbservern. Härifrån ska besökare och lärare kunna klicka sig vidare till alla dina framtida projektuppgifter i kursen. Sidan ska också fungera som ett snyggt digitalt visitkort!

---

## 📚 Kunskapskrav & Vad du behöver läsa på om

Innan och under tiden du bygger din portalsida behöver du förstå och använda följande koncept:

### 1. Teori i kursens handbok
- **[Handboken: Kapitel 1 — HTML5 & Semantik](../../teori/README.md#1-html5-och-semantik)** (Skillnaden mellan `<div>` och semantiska taggar som `<header>`, `<nav>`, `<main>`, `<footer>`).
- **[Handboken: Kapitel 2 — CSS & Design](../../teori/README.md#2-css-och-design)** (Hur man kopplar in en CSS-fil och stylar färger, typsnitt och marginaler).

### 2. Rekommenderad läsning i The Odin Project (Foundations)
Läs och gör övningarna i följande lektioner innan du börjar koda:
- 📖 **[Introduction to HTML and CSS](https://www.theodinproject.com/lessons/foundations-introduction-to-html-and-css)** — Grunderna i hur webbläsaren tolkar kod.
- 📖 **[HTML Boilerplate](https://www.theodinproject.com/lessons/foundations-html-boilerplate)** — Den obligatoriska grundstrukturen (`<!DOCTYPE html>`, `<html>`, `<head>`, `<body>`).
- 📖 **[Working with Text](https://www.theodinproject.com/lessons/foundations-working-with-text)** — Rubriker (`<h1>`–`<h6>`), stycken (`<p>`) och fetstil/kursiv.
- 📖 **[Lists](https://www.theodinproject.com/lessons/foundations-lists)** — Ordnade (`<ol>`) och oordnade (`<ul>`) punktlistor för din navigationsmeny.
- 📖 **[Links and Images](https://www.theodinproject.com/lessons/foundations-links-and-images)** — Hur man skapar hyperlänkar (`<a href="...">`) och lägger in bilder (`<img src="..." alt="...">`).
- 📖 **[Intro to CSS & The Cascade](https://www.theodinproject.com/lessons/foundations-intro-to-css)** — CSS-syntax, selektorer och externa formatmallar.

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

| Nivå | Kriterier |
| :--- | :--- |
| **Betyget E** | Sidan finns på rätt plats (`index.html` i `public_html/`). Bild, QR-kod och fungerande länkar finns. Enkel styling med CSS. |
| **Betyget C** | Layouten är genomtänkt och mobilanpassad (ser bra ut på både telefon och dator). Koden är semantiskt korrekt uppdelad. |
| **Betyget A** | Mycket professionell "digitalt visitkort"-känsla. Du använder Flexbox eller Grid för layouten. Typografin och färgvalen är harmoniska och välarbetade. |