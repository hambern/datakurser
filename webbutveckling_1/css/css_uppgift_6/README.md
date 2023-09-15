## CSS - Uppgift 6

Målet med denna uppgift är att du ska visa upp ett antal tarotkort från ett API med hjälp av Flexbox. Syftet är att skapa en sida som fungerar och ser bra ut oavsett enhet.

- <https://www.w3schools.com/css/css3_flexbox.asp>
- <https://www.w3schools.com/css/css3_flexbox_container.asp>
- <https://www.w3schools.com/css/css3_flexbox_items.asp>
- <https://www.w3schools.com/css/css3_flexbox_responsive.asp>

### Instruktioner

1. **Grundläggande HTML-struktur**
    - Starta med att skapa en enkel HTML-struktur som inkluderar en `header`, `main`-sektion och `footer`.

2. **Lägg till grundläggande CSS**
    - Innan du går vidare, lägg till några grundläggande CSS-stilar i en extern css-fil för att sätta upp sidans utseende (typsnitt, färger, etc.).

3. **Implementera Flex-Container**
    - Inom din `main`-sektion, skapa en div och ge den klassnamnet `card-container`. Detta element kommer att fungera som din flex-container.

4. **PHP och Tarotkort**
    - Använd PHP och en `foreach`-loop för att dynamiskt infoga tarotkort i `card-container`. Varje kort ska vara en egen div med klassnamnet `card`.

5. **Initial Flexbox-styling**
    - Öppna din CSS-fil och sätt `display: flex` på `.card-container` för att göra det till en flex-container.
  
6. **Välja Flex-Direction**
    - Välj en lämplig `flex-direction` (antingen `row` eller `column`) för din `.card-container`.

7. **Tillåt Flex-Wrap**
    - Sätt `flex-wrap: wrap` på `.card-container` för att tillåta att korten kan "wrapa" om det inte finns tillräckligt med utrymme.

8. **Justera innehåll**
    - Använd `justify-content` och `align-items` för att justera positionen av korten inom `.card-container`.

9. **Responsiv design**
    - Använd media queries för att ändra `flex-direction`, `justify-content` och andra flex-egenskaper beroende på skärmstorlek.

10. **Test och justeringar**
    - Öppna sidan i olika webbläsare och på olika skärmstorlekar. Gör alla justeringar som krävs för att se till att designen ser bra ut och fungerar som den ska. Var kreativ i din design.

Genom att följa dessa steg bör du kunna skapa en responsiv och visuellt tilltalande Tarot-kortsvisare med Flexbox. Lycka till!