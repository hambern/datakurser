# Modern CSS: Arkitektur och strategi

[toc]

Att skriva CSS handlar inte om att "måla" en webbplats. Det handlar om att bygga ett system. Om du bygger utan ritning får du spaghetti-kod som går sönder så fort du ändrar en detalj.

Denna guide är den **ultimata resursen** för hur du tänker och kodar som en professionell frontend-utvecklare år 2025.

## 1. Grundfilosofin: Mobile first

Vi designar aldrig för desktop först. Vi designar för den minsta skärmen och *lägger till* komplexitet när skärmytan tillåter det. Detta kallas **Additiv Design**.

### Varför?

Om du börjar stort (Desktop) och försöker skala ner, måste du skriva kod som **tar bort** eller **nollställer** dina tidigare regler. Det är ineffektivt och leder till buggar.

### Så här gör du

1.  Skriv din CSS för mobilvyn först, utan några Media Queries.
2.  Använd `min-width` för att lägga till layout-förändringar för större skärmar.

**❌ FEL (Desktop First - Subtraktiv):**

```css
/* Du skriver layout för desktop */
.container {
  display: flex;
  width: 50%;
  padding: 1rem;
}

/* Sen måste du "döda" koden för mobil */
@media (max-width: 600px) {
  .container {
    display: block; /* Överskrivning */
    width: 100%;    /* Överskrivning */
  }
}
```

**✅ RÄTT (Mobile First - Additiv):**

```css
/* Mobil är standard (default) */
.container {
  padding: 1rem;
}

/* Vi lägger till komplexitet om skärmen är stor nog */
@media (min-width: 768px) {
  .container {
    display: flex;
    width: 50%;
  }
}
```

## 2. Box Model: Kontrollera dina element

Som standard i CSS (det kallas `content-box`) läggs `padding` och `border` *utanpå* den bredd du anger. Om du sätter `width: 100%` och sedan lägger till `padding: 20px`, blir elementet **bredare** än 100%, vilket skapar en horisontell scrollbar och förstör layouten.

### Lösningen: Border Box

Vi vill att `padding` och `border` ska räknas *inuti* bredden. Detta gör att matematiken stämmer: 50% bredd är alltid 50%, oavsett padding.

**Lägg alltid till denna "reset" överst i din CSS-fil:**

```css
*, *::before, *::after {
  box-sizing: border-box;
}
```

## 3. Enheter: Sluta använda pixlar (px)

Pixlar (`px`) är statiska och dumma. De anpassar sig inte om användaren har ställt in större text i sin webbläsare för att se bättre.

-   **Använd `rem` för layout & font:** `rem` relaterar till roten (html).
    -   *Tumregel:* `1rem` ≈ 16px (men skalbart).
-   **Använd `em` för lokala relationer:** Om paddingen i en knapp ska vara proportionerlig till knappens textstorlek.
-   **Använd `%` eller `vw/vh` för containers:** Låt layouten vara flytande.

## 4. Layout: Grid vs Flexbox

Många blandar ihop dessa. Här är den definitiva guiden till när du ska använda vad.

### Flexbox: För en dimension (rader ELLER kolumner)

Använd Flexbox när du ska **linjera upp saker** eller **fördela utrymme** inuti en komponent. Tänk: "Möblera rummet".

**Det klassiska exemplet: En Navbar**
Vi vill ha loggan till vänster, och länkarna till höger. Detta är svårt med gammal CSS, men trivialt med Flexbox.

```css
/* HTML: <nav class="navbar"> <div class="logo">...</div> <ul class="links">...</ul> </nav> */

.navbar {
  display: flex;
  justify-content: space-between; /* Skjuter isär barnen till varsin kant */
  align-items: center;            /* Centrerar dem vertikalt */
  padding: 1rem;
}
```

*   `justify-content`: Styr ledden (horisontellt som standard).
*   `align-items`: Styr tvärs över ledden (vertikalt som standard).

### CSS Grid: För två dimensioner (Layout)

Använd Grid när du ska definiera hela sidans struktur eller bygga komplexa gallerier. Tänk: "Rita ritningen till huset".

**Det klassiska exemplet: Responsiva Kort**
Vi vill ha ett galleri med kort som automatiskt anpassar sig. Inga media queries behövs!

```css
/* HTML: <div class="grid"> <article class="card">...</article> ... </div> */

.grid {
  display: grid;
  gap: 2rem; /* Mellanrum mellan korten */
  
  /* MAGIN: Skapa så många kolumner som får plats, men gör dem aldrig mindre än 250px */
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
}
```

*   `repeat(auto-fit, ...)`: Fyll raden med så många som får plats.
*   `minmax(250px, 1fr)`: Varje kolumn måste vara minst 250px bred. Om det finns plats över, låt dem växa (`1fr`) och dela lika på utrymmet.

### Sammanfattning: Vem vinner?

| Egenskap | Flexbox | CSS Grid |
| :--- | :--- | :--- |
| **Dimensioner** | 1D (Rad **eller** Kolumn) | 2D (Rader **och** Kolumner) |
| **Användning** | Komponenter, Navbars, Centrera text | Sidlayouter, Fotogallerier, Dashboard |
| **Kontroll** | Innehållet styr layouten | Layouten styr innehållet |

## 5. Modern syntax & Logiska egenskaper

Webben är global. Sluta tänk i "Vänster" och "Höger". Om vi byter språk till arabiska (höger-till-vänster) går `margin-left` sönder.

Använd moderna, logiska egenskaper:

-   `width` ➝ **`inline-size`**
-   `margin-top` ➝ **`margin-block-start`**
-   `margin-left` ➝ **`margin-inline-start`**
-   `padding-bottom` ➝ **`padding-block-end`**

### Flytande Typografi med `clamp()`

Sluta skriv 5 olika media queries för font-size. Låt matematiken göra jobbet.

```css
/* Minst 1rem, helst 5vw + 1rem, max 2rem */
h1 {
  font-size: clamp(1rem, 5vw + 1rem, 2rem);
}
```

## 6. Variabler (Custom Properties)

Hårdkoda aldrig färger. Samla din "config" i toppen.

```css
:root {
  --clr-primary: #3b82f6;
  --clr-text: #1f2937;
  --font-heading: 'Inter', sans-serif;
}

h1 {
  color: var(--clr-primary);
  font-family: var(--font-heading);
}
```

## CHECKLISTA: Starta ett nytt projekt

Bocka av dessa steg varje gång du startar ett nytt projekt för att garantera en robust struktur.

- [ ] **Variabler först:** Öppna din CSS-fil. Definiera färger, fonter och spacing i `:root`.
- [ ] **Global Reset:** Lägg in `box-sizing: border-box` på `*, *::before, *::after`.
- [ ] **HTML-skelett:** Bygg semantisk HTML (`<header>`, `<main>`, `<article>`, `<footer>`) innan du stylar.
- [ ] **Mobilvy (Bas):** Börja styla för mobilen. Allt ligger i en kolumn. Inga media queries än!
- [ ] **Flexbox & Grid:** Använd Flexbox för navbars och små komponenter. Använd Grid för stora layouter.
- [ ] **Desktop-anpassning:** Lägg till `@media (min-width: ...)` för att "låsa upp" fler kolumner på stora skärmar.
- [ ] **Polish:** Sist lägger du till hover-effekter, skuggor och `cursor: pointer`.