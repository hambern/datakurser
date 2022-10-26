# CSS - Introduktion

Syftet med den här uppgiften är att introducera dig till CSS. Uppgiften är på inga sätt svår utan finns för att du ska se hur en sida kan växa fram steg för steg med hjälp av nya css-regler. Din uppgift är att utifrån kommentarer i css-filen `style.css` stajla dokumentet `index.html`.

## Instruktioner

1. Ladda ner dessa filer med hjälp av download-knappen här ovan som ser ut som en pil nedåt. Välj att ladda ner källan som zip.
2. Packa upp zip-filen och plocka ut mappen `css_introduktion` och lägg den så att du kommer åt att redigera den.
3. Öppna och titta på dokumentet `index.html`i din webbläsare
4. Öppna sedan filen `style.css`, läs och aktivera sedan en rad i taget. I utgångsläget är alla regler inaktiverade genom att de är skrivna som kommentarer. Kommentarer är all text som står mellan `/*` och `*/`. Du aktiverar regeln genom att lyfta ut den utanför den textmassa som är kommenterad. Titta vad som händer med din sida mellan varje steg.

~~~css
h1 {
/*
    h1 reglerar elementet h1. I det här fallet vill vi bestämma elementets bakgrundsfärg, text-position (text-align), utfyllnad, textfärg (color), topp-marginal (top-margin) och kant (border)

    background-color: #81B29A;
    text-align: center;
    padding: 2em;
    color: #3D405B;
    margin-top: 0;
    border: 2px solid #3D405B;
*/
}
~~~

Texten ovan ska alltså bli:

~~~css
h1 {
/*
    h1 reglerar elementet h1. I det här fallet vill vi bestämma elementets bakgrundsfärg, text-position (text-align), utfyllnad, textfärg (color), topp-marginal (top-margin) och kant (border)
*/
    background-color: #81B29A;
    text-align: center;
    padding: 2em;
    color: #3D405B;
    margin-top: 0;
    border: 2px solid #3D405B;
}
~~~

5. När du är klar jämför du ditt slutresultat med bilden [facit.png](facit.png). Kontrollera så att allt ser bra ut.
