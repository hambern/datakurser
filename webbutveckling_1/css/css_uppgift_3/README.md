# CSS - Uppgift 3

I denna övningsuppgift ska vi träna på att använda egenskapen `position` som kan ha följande värden:

- `static`: Element läggs efter varandra (standardinställning).
- `relative`: Ett elements position är relativ i förhållande till elementets ursprungliga position (dvs sin normala position i dokumentflödet). Plats skapas i dokumentet, men elementet ligger lite vid sidan om platsen.
- `fixed`: Positionen för ett element är fixerad i relation till webläsarfönstret och kommer att ligga kvar på samma plats på skärmen även om man scrollar på sidan. Tar ej upp plats på sidan.
- `absolute`: Positionen för ett element bestäms relativt webläsarfönstet som det ser ut när sidan laddas. Följer med vid scrollning. Tar ej upp plats i dokumentet. Om elementet ligger innuti ett annat element med annan positionering än static används det elementet som referenspunkt.

Förskjutningen för element med relative, fixed och absolute styrs sedan med egenskaperna top, bottom, left och right som t.ex kan ha ett antal pixlar som värde (kan även ha negativa värden).

Element som är positionerade med relative, fixed eller absolute kan ha en position på z-axeln (dvs ligga ovanpå varandra). Positionen på z-axeln styrs med egenskapen z-index som kan ha ett heltal som värde (eller auto).

## Instruktioner

Till denna uppgift finns en HTML-fil och 4 bilder. Dessa får du inte göra några ändringar i.

1. Gör en css-fil `style.css` som du lägger i samma mapp som övriga filer. Följande formatteringar ska göras. Inga andra formatteringar är tillåtna.
2.  `body` ska ha grå bakgrundsfärg och bredden 1500px. (Vi gör body extra bred för att lätt kunna se efekterna av våra positioneringar).
3.  `header` ska ha en marginal på 60px uppåt, en padding på 10px åt alla håll, en bredd på 500px, centrerad text och vit bakgrundsfärg.
4.  `h1` ska ha fontstorlek 12px och ha svart färg.
5.  Bilden `banner.gif` ska läggas som bakgrundsbild i elementet med id="banner". Detta element ska även ha en höjd på 150px och en bredd på 150px. Elementet ska positioneras så att det ligger kvar i övre högra hörnet av webläsarfönstret oavsett hur man scrollar på sidan.
6.  Text med `class="displaced"` ska förskjutas 6px uppåt i förhållande till där den annars skulle ha legat. Fontstorleken för sådan text ska vara 18px och texten ska ha färgen #33CCFF.
7.  `bild1.gif`, `bild2.gif` och `bild3.gif` ska positioneras ovanpå varandra i bestämd ordning (bild1 överst, bild2 i mitten och bild3 underst). Alla bilderna ska ligga 100px från högra sidan och 150px från toppen av webläsarfönstret. De ska sedan följa med texten då sidan scrollas.

Testa att scrolla på sidan och ändra storleken på webläsarfönstret så att du ser och förstår hur de positioneringar du gjort fungerar. Det bör se ut ungefär som `facit.jpg`
