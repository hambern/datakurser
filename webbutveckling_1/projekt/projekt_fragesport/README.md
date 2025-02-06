# Skapa en frågesport om Internets Historia

### Syfte
Denna uppgift syftar till att ge dig praktisk erfarenhet av att skapa en interaktiv och dynamisk frågesport med hjälp av PHP. Frågesporten ska testa användarnas kunskaper om internets historia, med frågor baserade på fakta från Internetmuseum. Du kommer att få öva på att strukturera och bygga en komplett webbapplikation, samt att hantera och bearbeta data på servern.

### Mål
Efter att ha slutfört denna uppgift ska du kunna:
- Utforma ett formulär som tar emot och bearbetar användarinmatning.
- Använda PHP för att hantera server-side logik, räkna poäng och ge användaren feedback.
- Implementera en highscore-lista baserad på användarnas resultat.
- Designa en tilltalande och användarvänlig webbapplikation med hjälp av HTML och CSS.
- Testa och validera din kod för att säkerställa korrekt funktionalitet på olika enheter och i olika webbläsare.

### Beskrivning
Din uppgift är att skapa en frågesport om internets historia med minst 10 frågor baserade på information från [Internetmuseum](https://www.internetmuseum.se/). Frågesporten ska vara interaktiv, dynamisk och innefatta en poängräkning samt en highscore-lista som visar de bästa resultaten.

#### Krav för frågesporten:
1. **Frågesportens struktur:**
   Detta är ett förslag på hur du kan strukturera din sida. Du kan välja att göra på andra sätt om du föredrar det.
   - **`index.php`**: Startsidan med ett formulär där användaren fyller i sitt namn och startar frågesporten. Det kan här också finnas en länk till highscore-sidan.
   - **`quiz.php`**: Huvudsidan där frågorna ställs och användarens svar samlas in.
   - **`result.php`**: Sidan där svaren rättas, poängen räknas och resultatet visas.
   - **`highscore.php`**: En sida som visar highscore-listan med de bästa resultaten.

2. **Frågetyper:**
   - Använd olika typer av inmatningsfält, som radioknappar, checkboxar, och select-menyer.
   - Minst en fråga ska ha en tillhörande bild och minst en fråga ska ha en tillhörande video.

3. **Poängräkning och highscore-lista:**
   - Spara användarens resultat och namn i en textfil (`results.txt`) för att skapa en highscore-lista.

4. **Design och användarvänlighet:**
   - Formge frågesporten med CSS. Designen ska vara vacker, tydlig och responsiv.
   - Sidan ska vara tillgänglig och enkel att använda både på datorer och mobila enheter.

5. **Testning och validering:**
   - Testa frågesporten på olika enheter och webbläsare.
   - Validera HTML och CSS för att säkerställa att koden är korrekt och effektiv.

### Ramverk och tekniker
- **HTML och CSS:** Använd HTML för att skapa strukturen och formulären på sidan. Använd CSS för att skapa en stilren och responsiv design.
- **PHP:** Använd PHP för att hantera logik, bearbeta svar, räkna poäng och spara resultat.
- **JavaScript (valfritt):** Använd JavaScript för att förbättra användarupplevelsen genom exempelvis formulärvalidering eller dynamiska effekter.

### Tips och tricks

- **Färgscheman:** Använd [Coolors](https://coolors.co/) för att hitta snygga färgscheman.
- **Favicon:** Läs på [W3Schools](https://www.w3schools.com/howto/howto_html_favicon.asp) om hur du skapar och lägger till en egen menyikon.
- **Formulärdesign:** Kolla in exempel på [W3Schools](https://www.w3schools.com/html/html_forms.asp) för att lära dig bygga formulär.
- **CSS-animationer och interaktiv design:**
  - [Radio-knappar som vanliga knappar](https://jsfiddle.net/hambern/er6Lypbk)
  - [Visa nästa fråga med en knapp](https://jsfiddle.net/hambern/u1refgqy)
  - [Knapp med animation](https://jsfiddle.net/hambern/1koj2epx)
  - [Bläddra med att klicka](https://jsfiddle.net/hambern/ykqsLt29)
- **Tidsmätning:** [Tidtagning för frågesport](https://jsfiddle.net/hambern/y0pgnw3e)
- **CSS-resurser:** Utforska [10015.io](https://10015.io/)

### Sortera resultaten

En bra funktion för att sortera resultaten till din topplista är PHP-funktionen `usort`. I exemplet nedan sorteras resultaten först med poäng, och därefter utifrån tid:

~~~php
usort($entries, function ($a, $b) {
    if ($a['score'] == $b['score']) {
        return $a['time'] <=> $b['time'];
    }

    return $b['score'] <=> $a['score'];
});
~~~

### Resurser att studera
För att förbereda dig inför denna uppgift rekommenderas att du studerar följande resurser:
- [Internetmuseum](https://www.internetmuseum.se/) för att samla fakta om internets historia.
- [HTML och CSS](https://www.w3schools.com/html/html_forms.asp) för att skapa formulär och designa sidorna.
- [PHP](https://www.w3schools.com/php/php_intro.asp) för att lära dig grunderna i hur du hanterar server-side logik.

---

## Bedömning

| **Kvalitetsaspekt**         | **Betyg E**                                      | **Betyg C**                                      | **Betyg A**                                      |
|-----------------------------|-------------------------------------------------|-------------------------------------------------|-------------------------------------------------|
| **Frågesportens logik och validering** | PHP används för enkel validering och poängräkning. | PHP används för noggrann validering och strukturerad poängräkning. | PHP används för avancerad validering och feedback baserat på användarens svar. |
| **Design och användarupplevelse** | Enkel CSS används för att styla frågesporten.      | CSS används för att skapa en responsiv och användarvänlig design. | CSS används för att skapa en professionell och engagerande design, som fungerar på alla enheter. |
| **Responsivitet**           | Frågesporten fungerar på både datorer och mobila enheter. | Frågesporten är responsiv och anpassar sig väl till olika skärmstorlekar. | Frågesporten är fullt responsiv och optimerad för alla enheter, med särskild hänsyn till användarupplevelse. |