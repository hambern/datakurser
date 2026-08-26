# Projektuppgift: Din Portalsida

## Syfte
Detta är kursens första och viktigaste "hem". Du ska skapa en **Portalsida** (index.html) som fungerar som din startsida. Härifrån ska man kunna klicka sig vidare till alla andra uppgifter du gör i kursen. Det ska också fungera som ett digitalt visitkort.

## Mål
Efter avslutat projekt ska du kunna:
- **HTML-struktur:** Skapa ett korrekt HTML5-dokument med `<head>` och `<body>`.
- **CSS:** Koppla en extern CSS-fil (`style.css`) för att styra utseendet.
- **Semantik:** Använda rätt taggar för rätt sak (`<nav>`, `<header>`, `<footer>`).
- **Responsivitet:** Få sidan att fungera i mobilen (`viewport`-taggen).

---

## Uppgiftsbeskrivning

### 1. Filstruktur
Skapa filen `index.html` direkt i din `public_html`-mapp.
*URL:en till din sida kommer att bli: `https://student.oedu.se/~ditt_anvnamn/`*

### 2. Innehåll
Sidan ska innehålla:
1.  **Presentation:** Vem är du? (Bild + Text).
2.  **Navigation:** En lista med länkar till kursens andra uppgifter (t.ex. "Gästbok", "Kluringen"). Denna lista kommer du fylla på allt eftersom.
3.  **Kontakt:** Din e-postadress.
4.  **QR-Kod:** En QR-kod som pekar på din egen URL, så att man lätt kan öppna sidan i mobilen.

### 3. Tekniska Krav
-   **Normalize.css:** Använd `normalize.css` för att nollställa webbläsarens standardstilar. [Ladda ner här](https://necolas.github.io/normalize.css/).
-   **Semantisk HTML:** Använd inte bara `<div>`. Använd `<main>`, `<section>`, `<article>` där det passar.
-   **Responsiv:** Sidan ska se bra ut både på dator och mobil.

---

## Arbetsgång
1.  Skapa `index.html` och `style.css`.
2.  Lägg till grundkoden ("boilerplate") i HTML-filen.
3.  Leta upp en bild på dig själv (eller en avatar) och ladda upp till servern.
4.  Generera en QR-kod (sök på "QR Code Generator") för din URL och spara som bild.
5.  Bygg layouten och styla med CSS.

**Glöm inte Viewport-taggen!**
Utan denna blir sidan pytteliten i mobilen.
```html
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

---

## Bedömning

| Nivå | Kriterier |
| :--- | :--- |
| **E** | Sidan finns på rätt plats (index.html). Bild, QR-kod och länkar finns. Enkel CSS. |
| **C** | Layouten är genomtänkt och responsiv (ser bra ut i mobilen). Koden är semantiskt korrekt. |
| **A** | Professionell design "Visitkort-känsla". Du använder kanske Flexbox eller Grid för layouten. Typografin är välarbetad. |

## Resurser
- [The Odin Project: HTML Foundations](https://www.theodinproject.com/lessons/foundations-html-foundations)
- [MDN Web Docs: HTML elements reference](https://developer.mozilla.org/en-US/docs/Web/HTML/Element)
- [CSS Tricks: A Complete Guide to Flexbox](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)