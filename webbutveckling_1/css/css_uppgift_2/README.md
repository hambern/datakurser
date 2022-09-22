# CSS - Uppgift 2

Syftet med denna uppgift är att du ska visa att du kan skapa en tvåkolumnslayout med CSS för ett redan uppmärkt
HTML5-dokument. Läs gärna följande delar i W3Schools innan du börjar:

- <https://www.w3schools.com/css/css_float.asp>
- <https://www.w3schools.com/css/css_selectors.asp>
- <https://www.w3schools.com/cssref/css_units.asp>
- <https://www.w3schools.com/css/css_boxmodel.asp>
- <https://www.w3schools.com/csS/css3_box-sizing.asp>

Innehållsmässigt är HTML-dokumentet en fiktiv bloggsida som innehåller tre blogginlägg och några kommentarer.Längre ned i dokumentet presenteras dokumentets uppbyggnad och resonemanget bakom uppmärkningen. Denna del är viktig dels för att kunna förstå hur du kan göra ett CSS för just den här uppgiften, dels för att du kan lära dig hur man kan resonera kring semantiskt rimlig uppmärkning. Filen [exmepel.png](exempel.png) är ett exempel på hur en godkänt lösning kan se ut. Använd den gärna för inspiration.

### Instruktioner

Din uppgift är att göra ett CSS-dokument med namnet `style.css`. Denna CSS ska användas för att definiera hur bloggsidan skall formateras. Du ska inte ändra något i `index.html`. En godkänd inlämning skall uppfylla följande:

- Body ska ha en bredd på 60em.
- Layouten ska vara centrerad på sidan. Detta innebär att om fönstret förstoras så ska det lediga utrymmet fördelas jämt på vardera sida om innehållet. Det innebär alltså inte att texten ska vara centrerad.
- Layouten ska ha två kolumner. Den ena kolumnen ska innehålla en navigeringsmeny m.m. (se mer om detta nedan) med klickbara länkar. Den andra kolumnen skall innehålla blogginläggen.Du väljer själv om navigeringsmeny skall ligga till höger eller vänster om blogginläggen.
- Layouten ska ha ett sidhuvud som presenteras ovanför de två kolumnerna och skall spänna över båda kolumners totala bredd.
- Layouten ska ha en sidfot som presenteras nedanför de två kolumnerna och skall spänna över båda kolumners totala bredd.
- Kalendern skall formateras så att udda och jämna rader skall ha olika bakgrundsfärg samt att tabellens huvudrad (namnen på dagarna) har en avvikande formatering från de andra raderna.
- Rubrikerna av typen h3 skall ha olika utseende i header, aside och article taggarna.

Uppgiften kan lösas på näst intill oändligt många sätt. Det viktiga för examinationens skull (dvs för att du ska bli godkänd) är att din lösning uppfyller ovanstående krav. Det är tillräckligt. För ditt eget lärandes skull får du (och uppmuntras att) ta ut svängarna betydligt mer så länge kraven är uppfyllda.

### Om sidans uppmärkning

Sidan har följande struktur. Observera att alla länkar är inte är kopplade till några befintliga länkar (d.v.s. de kan inte användas).

- ett header-element som utgör sidans sidhuvud och som innehåller två rubriker av olika storlek.
- ett aside-element som i sin tur innhåller ett antal nav och div-element:
- ett div-element med id 'searchbar' som innehåller ett enkelt webbformulär (form).
- ett div-element med id 'aboutme' som innehåller en kort beskrivning av bloggar samt en bild/ikon av denna.
- ett nav-element med id 'menu' som innehåller några allmäna länkar för bloggsystemet i form av en osorterad lista (ul).
- ett nav-element med id 'bymonth' för att hitta inlägg efter år och månad. Denna länkstruktur utgörs av en två-nivåers länkmenu i form av en yttre osorterade lista som har två inre osorterade listor som deldelistor.
- ett div-element med id 'rss' som innehåller en länk till ett RSS-flöde.
- ett nav-element med id 'calendar' som innehåller en kalender för maj månad i form av en tabell.
- ett div-element med id articles som innehåller blogginlägg.
- Varje blogginlägg är strukturerat som article. En sådan div innehåller en rubrik, ett datum och tid för inlägget samt själva inläggets text i form av en eller flera p-element. Ett av inläggen har också två kommentarer som utgörs av div-element av klassen 'comment' som i sig innehåller en rubrik, datum och tid samt kommentarstexten i form av ett p-element.
- ett footer-element som utgör sidans sidfot som innehåller ett p-element.

Det är viktigt att du studerar html-dokumentets uppbyggnad och vilka olika taggar, id och klasser som används.
