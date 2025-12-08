# Webbutveckling 1 - Teori & Handbok

[toc]

Välkommen till kursen i Webbutveckling 1! Här går vi igenom grunderna för hur webben är uppbyggd. Tänk på detta dokument som din karta när du går vilse i kod-djungeln.

---

## 1. Introduktion till Webbens Värld

### Hur fungerar Internet?
Internet är egentligen bara en massa datorer som är ihopkopplade med sladdar (och lite Wi-Fi).
*   **Klienten** är *din* dator (eller mobil) som använder en webbläsare (Chrome, Firefox, Safari).
*   **Servern** är en dator någonstans i världen som lagrar webbsidorna.

När du skriver in en adress (t.ex. `google.com`) skickar din webbläsare en förfrågan (*Request*) till servern, som svarar (*Response*) med koden för sidan.

### Webbens utveckling (Historia)
Webben uppfanns 1989 av Sir Tim Berners-Lee. Från början var det bara text. Sen kom bilder. Sen kom färger. Idag har vi 3D-spel och streamingtjänster direkt i webbläsaren!

### Lagar, Etik och Upphovsrätt
Bara för att en bild finns på Google Images får du inte använda den hur som helst.
*   **Upphovsrätt (Copyright):** Den som skapat verket bestämmer över det.
*   **Creative Commons:** Licenser som låter dig använda material gratis (om du följer reglerna).
*   **GDPR:** En lag som skyddar personuppgifter. Du får inte spara info om folk hur som helst!

> **Reflektionsfråga:** Varför tror du att det är förbjudet att använda andras bilder utan lov, även om man "bara" har en liten blogg?

---

## 2. HTML - Sidans Skelett

HTML står för *HyperText Markup Language*. Det är språket som beskriver *vad* som finns på sidan. Det är sidans skelett.

### Grundläggande struktur
Varje HTML-sida börjar så här:

```html
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Min hemsida</title>
</head>
<body>
    <h1>Hej världen!</h1>
    <p>Detta är min första sida.</p>
</body>
</html>
```

### Semantik
Semantik betyder "betydelse". Använd rätt tagg för rätt sak!
*   Använd `<nav>` för menyer, inte `<div id="menu">`.
*   Använd `<article>` för en artikel.
*   Använd `<footer>` för sidfoten.

Detta hjälper blinda som använder skärmläsare, och det hjälper Google att förstå din sida.

### Länkar och Sökvägar
En länk skapas med `<a>` (Anchor).
```html
<a href="om-oss.html">Läs om oss</a>
```

*   **Absolut URL:** `https://google.com` (Går till en helt annan sajt).
*   **Relativ URL:** `bilder/katt.jpg` (Går till en fil i din mapp).

### Media (Bilder, Ljud, Video)
För att visa en bild använder du `<img>`. Den har ingen `</img >`-tagg!
```html
<img src="katt.jpg" alt="En söt kattunge som sover">
```
> **Viktigt:** `alt`-texten är texten som visas om bilden inte kan laddas, eller läses upp för synskadade. **Glöm den aldrig!**

### Formulär
När användaren ska skriva in något använder vi formulär.
```html
<form>
    <label for="namn">Ditt namn:</label>
    <input type="text" id="namn" name="namn">
    <button type="submit">Skicka</button>
</form>
```

> **Tips:** Vill du veta alla attribut en `<input>` kan ha? [Kolla W3Schools HTML Forms](https://www.w3schools.com/html/html_forms.asp).

---

## 3. CSS - Sidans Utseende

CSS står för *Cascading Style Sheets*. Om HTML är skelettet, är CSS kläderna och sminket.

### Grunderna (Selektorer & Egenskaper)
Syntaxen ser ut så här: `Vem { Vad: Hur; }`

```css
p {
    color: red;
    font-size: 20px;
}
```
Detta gör alla paragrafer (`p`) röda och stora.

### Box Model
Detta är det viktigaste att förstå i CSS! Varje element är en låda.
Lådan består av:
1.  **Content:** Själva texten/bilden.
2.  **Padding:** Luft *inuti* lådan (mellan texten och kanten).
3.  **Border:** Kanten runt lådan.
4.  **Margin:** Luft *utanför* lådan (avstånd till grannen).

> **Reflektionsfråga:** Om du vill att texten inte ska ligga klistrad mot kanten av en knapp, ska du öka `padding` eller `margin`?

### Layout (Flexbox & Grid)
Förr använde vi `float` för att bygga layouter. Det var hemskt. Idag använder vi **Flexbox** (för 1D, rader/kolumner) och **Grid** (för 2D, hela sidor).

```css
.container {
    display: flex;
    justify-content: center; /* Centrera i mitten */
}
```

### Responsivitet
Sidan måste se bra ut i mobilen! Vi använder "Media Queries" för att ändra designen på små skärmar.
```css
/* Mobil-först: Detta gäller alla */
body { font-size: 16px; }

/* Om skärmen är bredare än 768px (dator/padda) */
@media (min-width: 768px) {
    body { font-size: 20px; }
}
```

### Typografi och Färg
*   Använd inte för många typsnitt (max 2-3).
*   Tänk på kontrasten! Ljusgrå text på vit bakgrund är svår att läsa.

---

## 4. Mediaoptimering

En webbsida ska ladda snabbt. Stora bilder är den största boven.

### Bildformat (JPG, PNG, WebP)
*   **JPG:** Bra för foton. Komprimerar bra men tappar lite kvalitet.
*   **PNG:** Bra för grafik och logotyper. Stödjer genomskinlighet (transparens).
*   **WebP:** Googles nya format. Bättre än både JPG och PNG i de flesta fall. Använd detta om du kan!

### Videoformat och Komprimering
Lägg aldrig upp en 500MB fil direkt från kameran. Komprimera den med program som **Handbrake** eller **VLC** först. Använd formatet **MP4 (H.264)** för bäst stöd.

### Prestanda och Laddningstider
Ingen gillar en seg webbsida.
*   En sida bör ladda på under 2 sekunder.
*   Använd verktyg som **Lighthouse** (finns i webbläsaren) för att testa din sida.

---

## 5. Introduktion till Serverhantering (PHP)

### Vad är PHP?
HTML är *statiskt* (samma för alla). PHP är *dynamiskt* (ändras beroende på vem som tittar). PHP körs på servern, inte i din webbläsare.

### Koppling mellan HTML och PHP
PHP-kod skrivs inuti `<?php ... ?>`.
```php
<h1>Välkommen!</h1>
<p>Klockan är just nu: <?php echo date('H:i'); ?></p>
```
Här kommer klockslaget att genereras av servern precis innan sidan skickas till dig.

### Inkludera filer
Istället för att kopiera menyn till alla 10 sidor, lägg den i `menu.php` och inkludera den:
```php
<?php include 'menu.php'; ?>
```
Ändrar du i `menu.php` ändras det på alla sidor! Smart va?

---

## 6. CMS - Content Management Systems

### Vad är ett CMS?
Ett CMS (som WordPress) är ett program som gör att du kan redigera din hemsida utan att koda HTML. Du loggar in i en panel och skriver text som i Word.

### WordPress & Andra alternativ
*   **WordPress:** Driver ca 40% av hela internet. Enormt ekosystem.
*   **Statamic:** Ett modernt, "flat-file" CMS byggt på Laravel. Perfekt för utvecklare som gillar ordning och reda.
*   **Joomla / Drupal:** Gamla godingar, men inte lika vanliga längre.

### Teman och Anpassning
I ett CMS använder man **Teman** för att styra utseendet. Men som webbutvecklare nöjer vi oss inte med standardtemat – vi skapar egna "Child Themes" och skriver egen CSS för att få det precis som vi vill!

---

> **Fastnat?**
> 1. Fråga Microsoft Copilot, Google Gemini eller något annat AI.
> 2. Googla problemet (på engelska ger oftast bäst svar).
> 3. Kolla W3Schools.
> 4. Fråga en klasskompis.
> 5. Fråga din lärare!
> 6. Fråga en annan utvecklare.
