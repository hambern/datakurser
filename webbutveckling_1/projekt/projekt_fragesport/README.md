# Projektuppgift: Frågesport om Internets Historia

## Syfte
Du ska skapa en interaktiv frågesport (Quiz) där användaren testar sina kunskaper om internets historia. Uppgiften kombinerar formulärhantering, PHP-logik (rätta svar) och filhantering (spara highscore).

## Mål
Efter avslutat projekt ska du kunna:
- **Formulär:** Använda olika inputs (`radio`, `checkbox`, `select`) för att skapa frågor.
- **Logik:** Rätta svaren med PHP och räkna ut poäng.
- **Datahantering:** Spara resultat i en textfil och läsa upp dem för en topplista.
- **Sortering:** Sortera arrayer i PHP (Highscore).

---

## Projektbeskrivning

### Tema
Frågorna ska handla om internets historia. Använd [Internetmuseum](https://www.internetmuseum.se/) som källa för dina frågor/svar.

### Kravspecifikation
1.  **Startsida (`index.php`):**
    -   Fält för att ange användarnamn.
    -   Knapp för att starta quizet.
    -   Länk till Highscore-listan.

2.  **Quizsida (`quiz.php`):**
    -   Minst **10 frågor**.
    -   Blanda frågetyper (t.ex. flervalsfrågor och "kryssa alla rätt").
    -   Minst en fråga ska ha en **bild** eller **video** som hör till.

3.  **Resultatsida (`result.php`):**
    -   Rätta svaren.
    -   Visa poängen (t.ex. "Du fick 7 av 10 rätt").
    -   Ge feedback (t.ex. visa vilka frågor som var fel).
    -   Spara resultatet (Namn, Poäng, Datum) i en fil (`results.json`).

4.  **Highscore (`highscore.php`):**
    -   Läs in resultaten från filen.
    -   Sortera listan så att den med högst poäng hamnar överst.

---

## Tips & Kodexempel

### Sortera Highscore
Här är ett exempel på hur du sorterar en array med resultat. Koden sorterar först på *Poäng* (högst först), och sedan på *Tid* (snabbast först) om poängen är lika.

```php
// $entries är din array med alla resultat
usort($entries, function ($a, $b) {
    if ($a['score'] == $b['score']) {
        // Om samma poäng, sortera på tid (lägst tid vinner)
        return $a['time'] <=> $b['time'];
    }
    // Annars sortera på poäng (högst poäng vinner)
    return $b['score'] <=> $a['score'];
});
```

### Design
Gör sidan snygg och användarvänlig!
-   Använd CSS för att styla formulären.
-   Kanske JavaScript för att bara visa en fråga i taget? (Valfritt men ger högre betyg).

---

## Bedömning

| Kvalitet / Betygsnivå | **Betyget E** | **Betyget C** | **Betyget A** |
|---|---|---|---|
| **Funktionalitet & Kravuppfyllnad** | Quizet fungerar och har minst 10 frågor. Poängen beräknas korrekt. Enkel inmatning (t.ex. bara radio-buttons). | Validerar att namn angetts. Resultat sparas (fil/databas) och presenteras i en sorterad Highscore-lista. Sidan är responsiv och fungerar på mobila enheter. | Innehåller extra features som tidsbegränsning, "en fråga i taget"-flöde, eller spärrar. Hanterar blandade inputs (checkbox/radio) och ger användaren feedback på felaktiga svar. |
| **Teknisk Implementation** | Koden följer standarder med "tillfredsställande resultat". Använder HTML/CSS för struktur och PHP för enkel beräkning. | Koden innehåller "enkla skript" (t.ex. JS-validering eller enkel CSS-interaktivitet). Strukturen är god och följer "etablerad god praxis". | Koden innehåller "diskreta domskript" (avancerad JS-interaktivitet). Koden är mycket välstrukturerad, säkerhetstänket är tydligt (t.ex. input-sanering), och lösningen är optimerad. |
| **Design & Användarupplevelse** | Designen är enkel men fungerar. Bilder/media hanteras "enkelt". | Sidan anpassar sig efter skärmstorlek. Designen är enhetlig och "tillfredsställande". Bilder och media är anpassade. | Designen är "mycket tilltalande" och användarvänlig. Media integreras sömlöst och förhöjer upplevelsen. Gränssnittet känns professionellt / "App-likt". |

## Resurser
- [Internetmuseum](https://www.internetmuseum.se/)
- [PHP Manual: Arrays](https://www.php.net/manual/en/language.types.array.php)
- [PHP Manual: JSON Functions](https://www.php.net/manual/en/ref.json.php)
- [The Odin Project: JavaScript Basics](https://www.theodinproject.com/lessons/foundations-javascript-basics)