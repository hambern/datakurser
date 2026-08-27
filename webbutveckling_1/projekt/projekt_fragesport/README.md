# Projektuppgift: Webbquiz om Internets Historia (JavaScript)

## Syfte
Du ska skapa ett modernt och interaktivt webbquiz (frågesport) om **internets historia** som körs helt i webbläsaren med hjälp av **HTML, CSS och JavaScript**. Syftet är att lära sig grundläggande programmeringslogik och **DOM-manipulation** – hur man gör en webbsida levande, reaktiv och rolig att använda utan att behöva ladda om sidan!

---

## 📚 Kunskapskrav & Vad du behöver läsa på om

Innan du börjar bygga quizet läser du och genomför följande lektioner i **The Odin Project (Foundations)**:
- 📖 **[Fundamentals Part 1: Variables & Numbers](https://www.theodinproject.com/lessons/foundations-javascript-basics)** — Variabler (`let`, `const`), datatyper och grundläggande aritmetik.
- 📖 **[Fundamentals Part 2: Conditionals & Logic](https://www.theodinproject.com/lessons/foundations-fundamentals-part-2)** — `if / else`-satser, jämförelser (`===`) och logiska villkor.
- 📖 **[Fundamentals Part 3: Functions](https://www.theodinproject.com/lessons/foundations-fundamentals-part-3)** — Hur man skapar och anropar funktioner.
- 📖 **[Problem Solving](https://www.theodinproject.com/lessons/foundations-problem-solving)** — Hur man bryter ner ett programmeringsproblem i små delsteg ("pseudokod").
- 📖 **[DOM Manipulation and Events](https://www.theodinproject.com/lessons/foundations-dom-manipulation-and-events)** — Hur JavaScript hämtar element (`querySelector`), ändrar text och lyssnar på klick (`addEventListener`).

### Fakta & Källor för dina frågor
- 🌐 **[Internetmuseum.se](https://www.internetmuseum.se/)** — Här hämtar du fakta, årtal, bilder och kuriosa till dina quizfrågor (t.ex. webbens födelse, BBS:er, första e-postmeddelandet i Sverige m.m.).

---

## Mål
Efter avslutat projekt ska du kunna:
- **DOM-manipulation:** Hämta element med `document.querySelector()` och uppdatera text, HTML och CSS-klasser i realtid.
- **Händelsehantering:** Lyssna på klickhändelser med `addEventListener`.
- **Datastrukturer:** Organisera frågor, svarsalternativ och rätta svar i en JavaScript-array med objekt.
- **Logik & Tillstånd:** Hålla koll på aktuell frågas index och användarens poäng med variabler och `if`-satser.
- **Web Storage (Bonus):** Spara och hämta användarens bästa poäng med `localStorage`.

---

## Projektbeskrivning

### 1. Tema: Internets & Datorns Historia
Frågorna i ditt quiz ska handla om internets framväxt, pionjärer (t.ex. Ada Lovelace och Tim Berners-Lee), webbläsarkrigen, sociala mediers intåg och hur internet kom till Sverige.
- **Inspirationskälla:** [Internetmuseum.se](https://www.internetmuseum.se/) är en guldgruva av spännande utställningar och fakta att hämta frågor och bilder från!

### 2. Kravspecifikation
Applikationen ska byggas som en modern single-page-upplevelse i tre vyer/faser (som visas och döljs dynamiskt med JavaScript eller CSS):

1. **Startvy:**
   - Titel och en kort beskrivning av quizet.
   - Fält för att fylla i namn (eller välja svårighetsgrad).
   - Knapp för att starta quizet.

2. **Frågevy:**
   - Visar **en fråga i taget** med svarsalternativ.
   - Minst **8–10 frågor**.
   - Minst en fråga ska innehålla en bild, ljudeffekt eller video.
   - Visar förlopp (t.ex. "Fråga 3 av 10").
   - När användaren klickar på ett svar ska det direkt markeras om det var rätt eller fel.

3. **Resultatvy:**
   - Visar slutpoäng och ett passande omdöme eller medalj (t.ex. "Grymt jobbat, mästare!").
   - Knapp för att spela igen ("Starta om").
   - Visar tidigare rekord/highscore (sparat i `localStorage`).

---

## Exempel på kodstruktur (JavaScript)

### Strukturera dina frågor som en array med objekt:
```javascript
const questions = [
    {
        question: "Vilket år skapades webben (World Wide Web) av Tim Berners-Lee?",
        answers: ["1989", "1995", "2001", "1975"],
        correct: 0 // Index för rätt svar (1989)
    },
    {
        question: "Vad kallas principen att dela upp en webbsidas innehåll och stil?",
        answers: ["Kompilering", "Separation of concerns", "Autoloading", "Hashing"],
        correct: 1
    }
];

let currentQuestionIndex = 0;
let score = 0;
```

### Visa nästa fråga dynamiskt:
```javascript
function showQuestion() {
    const q = questions[currentQuestionIndex];
    document.querySelector("#question-text").textContent = q.question;
    
    // Töm gamla knappar och skapa nya för svarsalternativen
    const answersContainer = document.querySelector("#answers");
    answersContainer.innerHTML = "";

    q.answers.forEach((answer, index) => {
        const btn = document.createElement("button");
        btn.textContent = answer;
        btn.classList.add("answer-btn");
        btn.addEventListener("click", () => selectAnswer(index));
        answersContainer.appendChild(btn);
    });
}
```

### Spara och hämta Highscore med `localStorage`

Webbläsarens inbyggda `localStorage` gör att du kan spara data i användarens webbläsare så att poäng och inställningar finns kvar även om sidan laddas om eller webbläsaren stängs:

```javascript
// 1. Hämta tidigare highscore när sidan laddas (eller 0 om inget finns sparat än)
const savedHighscore = localStorage.getItem("quiz_highscore") || 0;
document.querySelector("#highscore-display").textContent = `Rekord: ${savedHighscore} poäng`;

// 2. Kontrollera och spara nytt rekord när quizet avslutas
function updateHighscore(finalScore) {
    const currentHighscore = Number(localStorage.getItem("quiz_highscore")) || 0;
    
    if (finalScore > currentHighscore) {
        localStorage.setItem("quiz_highscore", finalScore);
        console.log("Nytt personbästa sparat i localStorage!");
    }
}
```

---

## Bedömning

| Aspekt / Betygsnivå | **Betyget E** | **Betyget C** | **Betyget A** |
| :--- | :--- | :--- | :--- |
| **1. JavaScript, Logik & DOM-manipulation** | Quizet fungerar i webbläsaren. Minst 8 frågor finns i en datastruktur (array med objekt). Frågor och svarsalternativ renderas ut i DOM:en, poängen räknas ut korrekt och visas när quizet är slut. | Välstrukturerad logik med en fråga i taget och dynamiska knappar. Svarsknapparna ger omedelbar visuell feedback (rätt/fel indikering) och förhindrar att man klickar flera gånger på samma fråga. | Mycket genomarbetad interaktivitet: t.ex. tidsbegränsning/nedräkningstimer per fråga, progress bar, återställningsknapp och sparning av Highscore via `localStorage`. Logiken är effektiv och modulär. |
| **2. Design, Feedback & Responsivitet** | Enkel och fungerande layout med CSS. Frågor och knappar är läsbara och användbara på skärmen. | Tilltalande och enhetlig design med Flexbox/Grid. Sidan är responsiv och anpassad för både mobil och dator med tydlig färgfeedback vid svar. | Professionell "App-känsla" med smidiga CSS-övergångar, mikroanimationer när frågor byts, modern typografi och hög visuell finish. |
| **3. Kodstruktur, Semantik & Tillgänglighet** | Koden är separerad i HTML, CSS och JS. Grundläggande HTML-element (`<button>`, `<h1>`, `<p>`) används. | Ren kod med meningsfulla variabel- och funktionsnamn. Semantiska element och god tillgänglighet (bra färgkontraster mellan text och knappar, tydliga fokuslägen). | Exemplarisk kodstruktur med tydliga kommentarer och felhantering. Full tillgänglighet med ARIA/tangentbordsnavigation och fullgod responsivitet utan layout-skiftningar. |

---

## Resurser
- [The Odin Project: Foundations Course](https://www.theodinproject.com/paths/foundations/courses/foundations)
- [MDN Web Docs: Manipulating documents (DOM)](https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Manipulating_documents)
- [MDN Web Docs: Window.localStorage](https://developer.mozilla.org/en-US/docs/Web/API/Window/localStorage)
- [Internetmuseum](https://www.internetmuseum.se/)