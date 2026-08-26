# Projektuppgift: Webbquiz om Internets Historia (JavaScript)

## Syfte
Du ska skapa ett modernt och interaktivt webbquiz (frågesport) om **internets historia** som körs helt i webbläsaren med hjälp av **HTML, CSS och JavaScript**. Syftet är att lära sig grundläggande programmeringslogik och **DOM-manipulation** – hur man gör en webbsida levande, reaktiv och rolig att använda utan att behöva ladda om sidan!

---

## 📚 Kunskapskrav & Vad du behöver läsa på om

Innan du börjar skriva JavaScript-koden behöver du förstå hur variabler, funktioner och DOM samverkar:

### 1. Teori i kursens handbok
- **[Handboken: Kapitel 5 — JavaScript & Interaktivitet](../../teori/README.md#5-introduktion-till-javascript--interaktivitet)** (Hur man länkar in `script.js`, hittar element med `document.querySelector` och reagerar på klick med `addEventListener`).

### 2. Rekommenderad läsning i The Odin Project (Foundations)
Läs och gör exemplen i följande lektioner innan du bygger quiz-logiken:
- 📖 **[Fundamentals Part 1: Variables & Numbers](https://www.theodinproject.com/lessons/foundations-javascript-basics)** — Variabler (`let`, `const`), datatyper och grundläggande aritmetik.
- 📖 **[Fundamentals Part 2: Conditionals & Logic](https://www.theodinproject.com/lessons/foundations-fundamentals-part-2)** — `if / else`-satser, jämförelser (`===`) och logiska villkor.
- 📖 **[Fundamentals Part 3: Functions](https://www.theodinproject.com/lessons/foundations-fundamentals-part-3)** — Hur man skapar och anropar funktioner.
- 📖 **[Problem Solving](https://www.theodinproject.com/lessons/foundations-problem-solving)** — Hur man bryter ner ett stort programmeringsproblem i små, hanterbara delsteg ("pseudokod").
- 📖 **[DOM Manipulation and Events](https://www.theodinproject.com/lessons/foundations-dom-manipulation-and-events)** — Hur JavaScript ändrar text, lägger till knappar och lyssnar på klickhändelser.

### 3. Fakta & Innehåll
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

---

## Bedömning

| Kvalitet / Betygsnivå | **Betyget E** | **Betyget C** | **Betyget A** |
| :--- | :--- | :--- | :--- |
| **Funktionalitet & Kod** | Quizet fungerar i webbläsaren. Minst 8 frågor finns. Poängen räknas ut korrekt och visas i slutet. Koden är uppdelad i HTML, CSS och JS. | Snyggt flöde med en fråga i taget. Svarsknapparna ger direkt visuell feedback (t.ex. grön för rätt, röd för fel). Sidan är helt responsiv och mobilanpassad. | Mycket genomarbetad interaktivitet: tidsbegränsning/timer, animationer, ljud eller sparning av Highscore via `localStorage`. Ren, välstrukturerad och kommenterad JavaScript-kod. |
| **Design & Upplevelse** | Enkel layout och grundläggande CSS. Media (bilder) visas. | Enhetlig och tilltalande design med Flexbox/Grid. Tydlig typografi och bra kontraster. | Professionell "App-känsla" med smidiga övergångar, mikroanimationer och hög tillgänglighet (`alt`-texter, tangentbordsvänligt). |

---

## Resurser
- [The Odin Project: Foundations Course](https://www.theodinproject.com/paths/foundations/courses/foundations)
- [MDN Web Docs: Manipulating documents (DOM)](https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Manipulating_documents)
- [Internetmuseum](https://www.internetmuseum.se/)