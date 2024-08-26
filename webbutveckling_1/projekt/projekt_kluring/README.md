# Skapa en kul kluring

### Syfte
Denna uppgift syftar till att utmana ditt logiska tänkande och din kreativitet genom att skapa en serie webbsidor med gåtor. Du kommer samtidigt att öva på grundläggande webbteknologier som HTML, CSS och enkel JavaScript-interaktivitet. Kreativa lösningar och designer uppskattas och uppmuntas.

### Mål
Efter att ha slutfört denna uppgift ska du kunna:
- Skapa länkar mellan olika HTML-sidor.
- Använda HTML och CSS för att designa enkla, responsiva webbsidor.
- Implementera grundläggande JavaScript för att skapa interaktivitet på dina sidor.

### Beskrivning
Du ska skapa en serie webbsidor där varje sida innehåller en unik gåta som besökaren måste lösa för att komma vidare till nästa sida.

1. **Första sidan:** Den första sidan heter `index.html` och innehåller en enkel gåta.
2. **Nästa sida:** När besökaren har löst gåtan, kommer de att veta vilket konstigt namn nästa sida har. De skriver in detta namn direkt i webbläsarens URL-fält, följt av `.html` (t.ex., `lösning.html`).
3. **Fortsättning:** Varje ny sida innehåller en ny gåta som leder vidare till nästa sida i serien.

#### Exempel:
- **Sida 1:** `index.html` – Gåtan kan vara en textgåta, där svaret är nästa sidas namn.
- **Sida 2:** `mystisk.html` – Denna sida innehåller en bildgåta som avslöjar nästa sidas namn när den är löst.

### Ramverk och tekniker
- **HTML och CSS:** Använd HTML för att strukturera dina sidor och CSS för att styla dem på ett kreativt sätt.
- **JavaScript (frivilligt):** Lägg till enkel JavaScript-interaktivitet för att t.ex. ge ledtrådar eller göra gåtorna mer dynamiska.
- **Responsiv design:** Se till att dina sidor fungerar både på datorer och mobila enheter, ett bra råd är att använda dig av normalize.io för att "nollställa" webb-browserns påverkan.

### Inspiration och idéer
För att få inspiration till dina gåtor, besök gärna dessa sidor:
- [Hambergs kluring 1](https://student.oedu.se/~mh6802/kul/mattias_kul_01/)
- [Hambergs kluring 2](https://student.oedu.se/~mh6802/kul/mattias_kul_02/)
- [Hambergs kluring 3](https://student.oedu.se/~mh6802/kul/mattias_kul_03/)
- [Notpron](http://notpron.org/notpron/)

### Resurser att studera
För att förbereda dig inför denna uppgift, rekommenderar jag att du läser:

- [HTML Grundläggande](https://www.w3schools.com/html/html_basic.asp)
- [CSS Grundläggande](https://www.w3schools.com/css/css_intro.asp)
- [JavaScript Grundläggande](https://www.w3schools.com/js/js_intro.asp) (om du vill använda JavaScript)

### Exempel på enkelt JavaScript

~~~html
<button onclick="toggleElement('myElement')">Visa/Göm</button>
<div id="myElement" style="display:none;">Här är innehållet som kan visas eller döljas.</div>

<script>
    function toggleElement(elementId) {
        var element = document.getElementById(elementId);
        if (element.style.display === 'none') {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    }
</script>
~~~

---

## Bedömning

| **Kvalitetsaspekt**         | **Betyg E**                                      | **Betyg C**                                      | **Betyg A**                                      |
|-----------------------------|-------------------------------------------------|-------------------------------------------------|-------------------------------------------------|
| **HTML-struktur**           | Sidorna är byggda med grundläggande HTML-taggar. | Sidorna har en tydlig och korrekt struktur. | Sidorna är välstrukturerade och följer webbstandarder. |
| **Design och CSS**          | Enkel CSS används för att styla sidorna.        | CSS används för att skapa en snygg och responsiv design. | CSS används för att skapa en professionell och fullt responsiv design. |