# Projektuppgift: API-Dashboard

## Syfte
Du ska bygga en webbapplikation som hämtar data från ett externt publikt API och presenterar det på ett snyggt sätt. Syftet är att förstå hur moderna webbsidor kommunicerar med andra tjänster samt att öva på layout och design med CSS/Bootstrap.

## Mål
Efter avslutat projekt ska du kunna:
- **Hämta data:** Använda PHP för att göra HTTP-anrop (`file_get_contents` eller `curl`).
- **Hantera JSON:** Avkoda svaret (`json_decode`) och loopa igenom datan.
- **Design:** Presentera informationen med Cards, tabeller eller listor (Bootstrap).
- **Interaktivitet:** Skapa filter eller sökfunktioner (valfritt).

---

## Uppgiftsbeskrivning

### 1. Välj ett API
Börja med att välja ett API som intresserar dig. Se listan längst ner för förslag.
*Tips: Välj ett API som inte kräver komplicerad OAuth-autentisering. "Öppna" API:er eller de som bara kräver en `?apikey=xyz` i URL:en är enklast.*

### 2. Bygg Applikationen
Din sida ska ha:
-   **Startsida:** Visar en översikt (t.ex. "Dagens väder", "Senaste nyheter", "Slumpmässig hund").
-   **Struktur:** Använd HTML och CSS (gärna Bootstrap) för att göra sidan responsiv.
-   **Data:** Datan ska komma "live" från API:et varje gång sidan laddas.

### 3. Kodexempel (Hämta data)
Här är ett exempel på hur du hämtar data med PHP:

```php
<?php
// Exempel: Hämta data från Dog API
$url = "https://dog.ceo/api/breeds/image/random";

// Hämta JSON-data
$json = file_get_contents($url);

// Avkoda JSON till en PHP-array
$data = json_decode($json, true);

// Visa bilden
$imageUrl = $data['message'];
?>

<img src="<?= $imageUrl ?>" alt="En hund" class="img-fluid">
```

*Om du får problem med "SSL/HTTPS", kan du behöva konfigurera din PHP-miljö eller använda cURL.*

---

## Bedömning

| Nivå | Kriterier |
| :--- | :--- |
| **E** | Du hämtar data från ett API och visar det på sidan. Sidan har grundläggande styling. |
| **C** | Layouten är responsiv. Du visar flera datapunkter (t.ex. bild + text + datum). Koden hanterar fall där API:et kanske inte svarar. |
| **A** | Applikationen känns som en "produkt". Du har sök/filtrering. Designen är professionell (CSS/Bootstrap). Du använder kanske JavaScript för att ladda data dynamiskt (AJAX) eller har avancerad PHP-logik. |

---

## Förslag på API:er
Här är en lista på roliga och enkla API:er att börja med.

| API | Beskrivning | Länk |
| :--- | :--- | :--- |
| **Dog API** | Slumpmässiga hundbilder. | [Länk](https://dog.ceo/dog-api/) |
| **OpenWeather** | Väderdata (Kräver gratis nyckel). | [Länk](https://openweathermap.org/api) |
| **PokeAPI** | Allt om Pokémon. | [Länk](https://pokeapi.co/) |
| **Chuck Norris** | Skämt om Chuck Norris. | [Länk](https://api.chucknorris.io/) |
| **CocktailDB** | Drinkrecept. | [Länk](https://www.thecocktaildb.com/api.php) |
| **NASA** | Rymdbilder (Dagens bild). | [Länk](https://api.nasa.gov/) |
| **Dad Jokes** | Pappaskämt. | [Länk](https://icanhazdadjoke.com/) |
| **Advice Slip** | Kloka råd. | [Länk](https://api.adviceslip.com/) |
| **NewsAPI** | Nyhetsrubriker (Kräver nyckel). | [Länk](https://newsapi.org/) |
| **Giphy** | GIF-bilder (Kräver nyckel). | [Länk](https://developers.giphy.com/) |

Du kan hitta fler på [Public APIs GitHub](https://github.com/public-apis/public-apis).