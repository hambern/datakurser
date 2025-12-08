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

| Nivå | Kriterier |
| :--- | :--- |
| **E** | Quizet fungerar med 10 frågor. Poäng räknas ut korrekt. Designen är enkel men funktionell. |
| **C** | Du verifierar att användaren angett ett namn. Resultaten sparas och visas på en Highscore-lista. Sidan är responsiv. |
| **A** | Avancerad funktionalitet: T.ex. visa en fråga i taget (JS/CSS), tidsbegränsning, eller att man inte kan göra om quizet direkt. Designen är mycket tilltalande. Koden är välstrukturerad. |

## Resurser
- [Internetmuseum](https://www.internetmuseum.se/)
- [W3Schools: PHP Arrays](https://www.w3schools.com/php/php_arrays.asp)
- [W3Schools: PHP JSON](https://www.w3schools.com/php/php_json.asp)