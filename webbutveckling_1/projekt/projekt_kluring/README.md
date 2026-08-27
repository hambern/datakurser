# Extrauppgift: Kluringen (Webbgåtor)

> **💡 Frivillig extrauppgift:** Denna uppgift är en rolig utmaning för dig som blir klar tidigt med din portalsida eller vill testa din kreativitet och förståelse för webben!

## Syfte
Du ska skapa en serie webbsidor som fungerar som ett gåtspel. Varje sida innehåller en gåta. Lösningen på gåtan är namnet på nästa HTML-fil. Detta tränar din förståelse för hur webbadresser (URL:er) och filstrukturer fungerar, samt din kreativitet med HTML/CSS.

Exempel: Om svaret på gåtan på `index.html` är "katt", så måste besökaren manuellt ändra adressen i webbläsaren till `katt.html` för att komma vidare.

## Mål
Efter avslutat projekt ska du kunna:
-   **Länkar & URL:er:** Förstå hur filer hänger ihop på en server.
-   **Kreativ HTML:** Använda dolda texter (vit text på vit bakgrund), kommentarer (`<!-- hemligt -->`) och bilder för att skapa ledtrådar.
-   **JavaScript (Valfritt):** Skapa knappar för att visa ledtrådar.

---

## Uppgiftsbeskrivning

### 1. Skapa din struktur
Du behöver minst **3 nivåer** (sidor) + en **Slutsida** (Seger!).
1.  **Nivå 1 (`index.html`):** En enkel startgåta.
2.  **Nivå 2 (`[svar1].html`):** Lite svårare.
3.  **Nivå 3 (`[svar2].html`):** Riktigt klurig!
4.  **Målet (`[svar3].html`):** En sida som säger "Grattis, du klarade det!".

### 2. Idéer för gåtor
-   **Källkod:** Göm ledtråden i en HTML-kommentar. Användaren måste högerklicka och välja "Visa källkod" för att hitta den.
-   **Namngivning:** En bild heter `gurka.jpg`, men föreställer en tomat. Svaret kanske är "gurka"?
-   **CSS:** Text som är samma färg som bakgrunden, så man måste markera den för att se.
-   **JavaScript:** En knapp som säger "Tryck inte här", som visar texten när man klickar.

### 3. Exempel på JavaScript-ledtråd
Här är en enkel funktion för att visa en ledtråd när man klickar på en knapp.

```html
<button onclick="visaLedtrad()">klicka för ledtråd</button>
<p id="hemlis" style="display:none;">Svaret är en färg...</p>

<script>
function visaLedtrad() {
    document.getElementById('hemlis').style.display = 'block';
}
</script>
```

---

## Bedömning

| Nivå | Kriterier |
| :--- | :--- |
| **E** | Du har skapat 3 hängande sidor. Gåtorna går att lösa. Enkel design. |
| **C** | Du använder kreativa metoder (källkod, dolda element). Sidorna är snygga och responsiva. |
| **A** | Ett riktigt "Notpron"-liknande spel! Du använder ljud, bildmanipulation eller JavaScript på ett smart sätt. Designen bygger en stämning (t.ex. skräcktema eller hacker-tema). |

## Inspiration
-   [Notpron](https://notpron.com/notpron/) - Legendarisk onlinegåta känd som "världens svåraste webbgåta".
-   [Oddpawn](https://oddpawn.com/) - Modern web riddle med dolda ledtrådar i källkod och bildfiler.
-   [AE27FF](https://ae27ff.drastic.net/) - Klurig gåtsajt med fokus på källkod, DevTools och avkodning.
-   [Cicada 3301](https://en.wikipedia.org/wiki/Cicada_3301) - Legendariskt internetmysterium.