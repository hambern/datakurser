# Flexbox Demo

### HTML-struktur
```html
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <title>Flexbox Demo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Flexbox Demo</h1>
  <div class="flex-container">
    <div class="flex-item" id="item1">1</div>
    <div class="flex-item" id="item2">2</div>
    <div class="flex-item" id="item3">3</div>
    <div class="flex-item" id="item4">4</div>
    <div class="flex-item" id="item5">5</div>
    <div class="flex-item" id="item6">6</div>
  </div>
</body>
</html>
```

### Uppgiftsbeskrivning

1. **Flex-Container**
   - Gör `.flex-container` till en flex-container med CSS.
  
2. **Flex-Direction**
   - Ändra riktningen på flex-items inom `.flex-container`.

3. **Flex-Wrap**
   - Låt flex-items "wrapa" om det inte finns tillräckligt med utrymme i container.

4. **Flex-Flow**
   - Använd `flex-flow` för att kombinera `flex-direction` och `flex-wrap`.

5. **Justify-Content**
   - Justera horisontell positionering av flex-items.

6. **Align-Items**
   - Justera vertikal positionering av flex-items.

7. **Align-Content**
   - Justera positionering av flex-items när de har "wrapat".

8. **Order**
   - Ändra ordningen på specifika flex-items.

9. **Flex-Grow**
   - Låt vissa flex-items ta upp extra utrymme.

10. **Flex-Shrink**
    - Låt vissa flex-items krympa om det inte finns tillräckligt med utrymme.

11. **Flex-Basis**
    - Sätt en initial storlek på flex-items.

12. **Flex**
    - Använd `flex` shorthand för att kombinera `flex-grow`, `flex-shrink`, och `flex-basis`.

13. **Align-Self**
    - Ändra vertikal justering av en enskild flex-item.

14. **Responsiv Flex**
    - Använd media queries för att ändra flexbox-layouten beroende på skärmstorlek.

Ändra koden och observera resultaten. Du kan också använda utvecklarverktyg i webbläsaren för att visuellt inspektera hur ändringar påverkar layouten, vilket kan vara mycket lärorikt.