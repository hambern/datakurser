# Skapa en gästbok

### Syfte
Denna uppgift syftar till att ge dig praktisk erfarenhet av att designa och lagra information på en webbsida genom att skapa en gästbok där besökare kan lämna meddelanden. Genom denna uppgift får du möjlighet att öva på viktiga webbteknologier och färdigheter, inklusive:

- Länkning mellan olika dokument på din webbplats.
- Utveckling av en responsiv design som fungerar på både datorer och mobila enheter.
- Skapande av formulär för att samla in data från användare.
- Hantering av data genom POST-anrop.
- Lagring och hämtning av data för att visa meddelanden.

### Mål
Efter att ha slutfört denna uppgift ska du kunna:
- Bygga ett formulär med HTML för att samla in data från användare.
- Skicka data från formuläret till en server med hjälp av POST-anrop.
- Lagra data på servern, exempelvis i en textfil.
- Hämta och visa lagrad data på din webbplats.
- Skapa en enkel, responsiv design med HTML och CSS som fungerar både på datorer och mobila enheter.

### Beskrivning
Du ska designa och bygga en gästbok där användare kan lämna kommentarer. Gästboken ska kunna lagra följande information:

- **Namn** på den som skriver meddelandet.
- **Tidpunkt** då meddelandet lämnades.
- **Meddelande** som besökaren vill lämna.

Den insamlade informationen ska sparas på servern (till exempel i en textfil) och visas för andra besökare på sidan. Gästboken ska ha en enkel och elegant design som är responsiv, vilket innebär att den fungerar och ser bra ut på både datorer och mobila enheter.

### Exempel på HTML-kod

~~~html
<!-- Visa lagrade meddelanden -->
<div class="guestbook-entries">
    <h2>Tidigare meddelanden</h2>
    <?php if (!empty($entries)): ?>
        <?php foreach ($entries as $entryParts): ?>
            <div class="entry">
                <p><strong>Namn:</strong> <?= htmlspecialchars($entryParts[1]); ?></p>
                <p><strong>Tid:</strong> <?= htmlspecialchars($entryParts[0]); ?></p>
                <p><strong>Meddelande:</strong> <?= nl2br(htmlspecialchars($entryParts[2])); ?></p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Inga meddelanden ännu.</p>
    <?php endif; ?>
</div>
~~~

### Ramverk och tekniker
- **HTML och CSS:** Använd HTML för att skapa formuläret och strukturen på sidan. Använd CSS för att skapa en stilren och responsiv design.
- **PHP:** Använd PHP för att hantera POST-anropet, spara data i en textfil och hämta samt visa den sparade datan.

### Resurser att studera
För att förbereda dig inför denna uppgift, rekommenderar jag att du läser igenom följande:

- [HTML Formulär](https://www.w3schools.com/html/html_forms.asp)
- [CSS Grundläggande](https://www.w3schools.com/css/css_intro.asp)
- [PHP Grundläggande](https://www.w3schools.com/php/php_intro.asp)

---

## Bedömning

| **Kvalitetsaspekt**         | **Betyg E**                                      | **Betyg C**                                      | **Betyg A**                                      |
|-----------------------------|-------------------------------------------------|-------------------------------------------------|-------------------------------------------------|
| **Formulär och datahantering** | Enkel data samlas in och lagras med HTML och PHP. | Formuläret är genomtänkt, och data lagras på ett strukturerat sätt. | Formuläret är väl utformat, och data lagras effektivt och strukturerat. |
| **Design och CSS**          | Enkel CSS används för att styla gästboken.      | CSS används för att skapa en responsiv och tilltalande design. | CSS används för att skapa en professionell och fullt responsiv design. |
| **Responsivitet**           | Gästboken fungerar på både datorer och mobila enheter. | Gästboken är responsiv och anpassar sig väl till olika skärmstorlekar. | Gästboken är fullt responsiv och optimerad för användning på alla enheter. |