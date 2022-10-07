# Projekt - Riksdagen

## Vad är ett API?
Application Program Interface, är ett slags protokoll som används för att program (även kallat applikationer) enklare ska kunna snacka med varandra. En slags tolk, som kommunikationen går genom.

Säg att du har en väderapp i din telefon. För att den ska kunna fungera måste den hämta väderprognoser. Kanske vänder den sig till SMHI:s webbapp. Väderappen kan förstås ha programmerats till att gå in på SMHI.se för att hämta informationen därifrån, ungefär som du eller jag själv kan göra. Men detta hade lätt kunnat leda till problem. Om SMHI ändrar sin hemsida till exempel. Appen är programmerad att hämta information från förstasidan, men informationen har flyttats till en annan sida.

Här är API en mer robust lösning. Eftersom väderappen är ett program kan den prata med SMHI:s API för att hämta ut data. Detta sker enligt API:ets regler (också kallat dokumentation) som säger ”så här ska du prata för att jag ska förstå” och ”så här förstår du det svar jag kommer skicka tillbaka”.

## Vad innebär det att ett API är öppet?
Om ett program har ett öppet API så kan vem som helst använda sig av det i sina egna program. Som i det första exemplet med väderappen. Och API:er är ju lite som byggstenar, som kan användas tillsammans med varandra. Ju fler byggstenar som finns tillgängliga, desto fler grymma projekt kan byggas. Man kan till exempel tänka sig ett program som använder sig av SMHI:s API och Booli:s API för att visa vilket hus man bör köpa för att få flest soltimmar per år.

## Denna uppgift
I denna uppgift ska du få skapa en hemsida som använder sig av Riksdagens öppna API, och närmare bestämt deras [API med ledamotsdata](https://data.riksdagen.se/data/ledamoter/skapa-sokfraga-for-ledamotsdata/). Därifrån kan du hämta aktuell information om våra folkvalda politiker. Du kan därefter välja att designa denna information på vilket sätt du vill. Läs gärna följande sidor på W3Schools:

- <https://www.w3schools.com/php/php_arrays.asp>
- <https://www.w3schools.com/php/php_looping.asp>
- <https://www.w3schools.com/php/php_json.asp>
- <https://www.w3schools.com/html/html_forms.asp>
- <https://www.w3schools.com/html/html_form_elements.asp>

### Instruktioner
1. Utgå ifrån den kod du hittar i `index.php`
2. Skapa en förfrågan till [API:et](https://data.riksdagen.se/data/ledamoter/skapa-sokfraga-for-ledamotsdata/) som ger dig det svar du vill ha
3. Presentera därefter dina ledamöter på ett grafiskt intressant sätt. Tänk på att använda deras bilder. Du hittar adressen till bildfilerna i API-svaret
4. Gör det möjligt för en besökare att själv påverka förfrågan till API:et via ett formulär. Du kan exempelvis låta din besökare välja parti.
5. Lämna in uppgiften på Vklass

### Extrauppgift
Gör en ny sida där du använder ett annat öppet API till något kul. Du kan hitta ett stort antal öppna API:n på [Opendata.se](http://www.opendata.se/) och [Sveriges dataportal](https://www.dataportal.se/sv/datasets)
