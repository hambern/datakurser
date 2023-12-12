# Projekt - Frågesport

Webben - som vi känner den idag - uppfanns av Tim Berners-Lee, helt själv i på Cern-institutet i Schweiz 1989. I den här uppgiften ska du, utifrån sveriges internetmuseum, skapa en frågesport som testar din besökares kunskaper om webbens historia från 1989 fram till idag. Denna uppgift ska utveckla och testa såväl dina kunskaper i HTML och CSS som i PHP. Det är alltså ett samarbetsprojekt mellan Webbutvecklings-kursen och Programmering 1 där de olika kurserna kommer att titta på olika aspekter av din kod.

### Internetmuseum

Internetmuseum grundades i december 2014 och blev i juni 2016 invalt i Sveriges museum, som första utpräglat digitala museet i Sverige. Syftet med museet är att spara det svenska digitala kulturarvet, samt att sprida fördjupad kunskap om nätets historia i Sverige.

- [Tidslinjen](https://www.internetmuseum.se/tidslinjen/www/)
- [Viktiga milstolpar](https://www.internetmuseum.se/museumtagg/milstolpar/)

## Instruktioner

1. Läs på om internets historia på https://www.internetmuseum.se/
2. Utifrån informationen ska du skapa en frågesport med minst 15 centrala fakta.
3. Svarsalternativen ska vara märkta med antingen flervalsfält (select), radioknappar (radio), range eller checkboxar. Undvik gärna text-fält då de är mer svår-rättade. Läs mer om HTML5-formulär via följande sida https://www.w3schools.com/html/html_forms.asp
4. Flödet kan exempelvis se ut såhär:
   - `index.php` Innehåller _ett_ formulär för namn och svarsalternativ som skickas till...
   - `answer.php` som rättar svaren och sparar resultatet i `results.txt` varpå den visar upp både besökarens resultat och den aktuella high-score-topplistan.
5. Man ska skriva in sitt namn (används till high-score-listan)
6. Minst en fråga ska ha en tillhörande bild och minst en fråga ska ha en tillhörande video.
7. Det ska finnas en “tack för att du genomförde min frågesport”-sida där du visar resultatet
8. Det ska finnas en highscore-lista där du listar de som fått flest poäng
9. Formge din frågesport med hjälp av CSS. Denna gång är utformningen väldigt fri. Men en god formgivning ska bland annat ha följande kvaliteter:
   - **Vacker**. Sidan bör givetvis se vacker ut för dina besökare
   - **Tydlig**. Man bör enkelt se vad som ska göras och hur man ska göra det
   - **Tillgänglig**. Även synskadade bör kunna läsa dina frågor. Välj ett lättläst typsnitt och tänk på kontrasten mellan bakgrunden och texten
   - **Responsiv**. Det blir allt vanligare att surfa med mobilen. Kontrollera så att sidan också ser bra ut på mobiltelefonen
   - **Kodkvalitet**. Tänk på att koden ska vara lättläst (indenterad), effektiv (kort), och ha logiskt namngivna element, id:n och klasser
10. Testa din frågesport via mobilen, samt minst två webbläsare och kontrollera så att allt fungerar och ser ut som det ska.
11. Glöm inte bort att validera din kod. Varningar kan vara okej, men direkta fel får inte förekomma.
12. Lämna in din färdiga frågesport på vklass.

### Tips och tricks

- På denna sida kan du välja bland tusentals vackra färgscheman till din sida: <https://coolors.co/>
- Detta är ett exempel på hur du kan göra radio-knappar till vanliga knappar:
<https://jsfiddle.net/hambern/er6Lypbk>
- Detta är ett exempel på hur du kan visa bara en fråga i taget och sedan, via en knapp, kan visa nästa fråga: <https://jsfiddle.net/hambern/u1refgqy>
- Detta är ett lite mer avancerat exempel där jag dessutom lagt till en animation: <https://jsfiddle.net/hambern/1koj2epx/>
- Detta är ett exempel där knapparna bytts ut emot en eventlistener som bläddrar vid klickning på page-elementet (kan såklart bytas ut emot klick på en knapp): <https://jsfiddle.net/hambern/ykqsLt29/>
- Detta är ett exempel på hur du kan skapa en tidtagning. Inputfältet kommer att skicka antalet sekunder det tog att genomföra frågesporten: <https://jsfiddle.net/hambern/y0pgnw3e/> 
- Kika gärna också på CSS-avdelningen på denna praktiska sida: <https://10015.io/>

### Strålande elevexempel

- Jacob Berggren (2020) <https://student.oedu.se/~jb0015/Programering/F-Textfiler/U6-Fragesport/fragesport.php>
- Henrik Hellström (2021) <https://student.oedu.se/~hh0022/Webbutveckling/Fr%c3%a5gesport/>

## Bedömning

| Kriterium              | E | C | A |
|------------------------|---|---|---|
| Responsivitet          |   | Sidan ser bra ut även vid större och mindre textstorlekar och är tydlig och lättillgänglig | Sidan ser bra ut även i mobilvy och är tydlig och lättillgänglig |
| Validering             |   | Sidan validerar till övervägande del CSS och HTML korrekt | Sidan validerar CSS och HTML korrekt utan varningar |
| Element och selektorer| Koden använder fungerande element och selektorer | Koden använder lämpliga element och selektorer | Koden använder elementen och selektorerna på ett effektivt sätt |
| Semantik        | | Koden använder sig av semantisk HTML | Koden använder sig av semantisk HTML på ett utmärkt sätt |
| Formulär                | Sidan har ett fungerande formulär | Formuläret använder lämpliga fält-typer | |
| Indentering            | Koden är indenterad och lättläst | Koden är väl indenterad och lättläst | |
| Kommentarer            | Koden innehåller inga kommentarer | Koden innehåller få kommentarer som ger en viss förståelse | Koden innehåller förtydligande kommentarer |