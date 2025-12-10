# Modern CSS: Arkitektur och Strategi

[toc]

Att skriva CSS handlar inte om att "måla" en webbplats. Det handlar om att bygga ett system. Om du bygger utan ritning får du spaghetti-kod som går sönder så fort du ändrar en detalj.

Denna guide går igenom **hur** du tänker som en professionell frontend-utvecklare år 2025.

## 1. Grundfilosofin: Mobile First

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
  display: block;
  width: 100%;
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

Som standard i CSS (det kallas `content-box`) läggs `padding` och `border` *utanpå* den bredd du anger. Om du sätter `width: 100%` och sedan lägger till `padding: 20px`, blir elementet **bredare** än 100%, vilket skapar en horisontell scrollbar och förstör din layout.

### Lösningen: Border Box

Vi vill att `padding` och `border` ska räknas *inuti* bredden. Detta gör att matematiken stämmer: 50% bredd är alltid 50%, oavsett padding.

Lägg alltid till denna "reset" överst i din CSS-fil:

```css
*, *::before, *::after {
  box-sizing: border-box;
}
```

Nu inkluderar elementens totala storlek både padding och border, vilket gör layoutarbetet mycket mer förutsägbart.

## 3. Enheter: Sluta använda Pixlar (px)

Pixlar (`px`) är statiska och dumma. De anpassar sig inte om användaren har ställt in större text i sin webbläsare för att se bättre.

-   **Använd `rem` för layout & font:** `rem` relaterar till roten (html). Om användaren ändrar sin standardstorlek, skalar hela din sida snyggt.
    -   *Tumregel:* `1rem` är oftast 16px.
-   **Använd `em` för lokala relationer:** Om paddingen i en knapp ska vara proportionerlig till knappens textstorlek.
-   **Använd `%` eller `vw/vh` för containers:** Låt layouten vara flytande.

**Exempel:**

```css
body {
  font-size: 1rem; /* Respekterar användarens inställning */
}

.card {
  padding: 1.5rem; /* Luftigt och skalbart */
  width: 100%;     /* Flytande bredd */
  max-width: 60ch; /* Bli aldrig bredare än ca 60 tecken (bra för läsbarhet) */
}
```

## 4. Layout: Grid vs Flexbox

Sluta gissa. Det finns en tydlig arbetsfördelning.

### CSS Grid

Används för **Makro-layout** (Ritningen av huset).

-   När du ska definiera sidans struktur: Header, Sidebar, Main, Footer.
-   När du behöver rader OCH kolumner samtidigt (2D).

### Flexbox

Används för **Mikro-layout** (Möbleringen av rummet).

-   När du ska rada upp saker i en komponent (t.ex. en navbar eller en ikon bredvid text).
-   När du jobbar i en riktning: En rad ELLER en kolumn (1D).

## 5. Modern Syntax & Framtidssäkring

Webben är global. Sluta tänk i "Vänster" och "Höger". Tänk i "Start" och "Slut".

### Logiska Egenskaper (Logical Properties)

Om vi byter språk till arabiska (som läses höger-till-vänster) går `margin-left` sönder. Använd moderna motsvarigheter:

-   `width` ➝ **`inline-size`**
-   `margin-top` ➝ **`margin-block-start`**
-   `margin-left` ➝ **`margin-inline-start`**
-   `padding-bottom` ➝ **`padding-block-end`**

### Flytande Typografi med `clamp()`

Slipp ändra font-storlek med media queries. Låt matematiken göra jobbet.

```css
/* Texten är minst 1rem, max 2rem, och skalar däremellan baserat på skärmbredd */
h1 {
  font-size: clamp(1rem, 5vw + 1rem, 2rem);
}
```

## 6. Variabler (CSS Custom Properties)

Vi hårdkodar aldrig färger eller "magiska nummer" djupt nere i koden. Vi samlar allt i toppen. Detta gör det enkelt att byta tema eller justera designen senare.

```css
:root {
  /* Konfiguration */
  --clr-primary: #3b82f6;
  --clr-text: #1f2937;
  --gap-standard: 1rem;
}

.btn {
  background-color: var(--clr-primary); /* Använd variablen */
  margin-block: var(--gap-standard);
}
```

## CHECKLISTA: Starta ett nytt projekt

Följ denna ordning för att undvika kaos.

1.  **Variabler först:** Öppna din CSS-fil. Definiera dina färger och typsnitt i `:root`.
2.  **Reset:** Lägg till `box-sizing: border-box` på alla element!
3.  **HTML-skelett:** Bygg HTML-strukturen med semantiska taggar (`header`, `main`, `article`). Skriv ingen CSS än.
4.  **Mobilvy (Bas):** Styla sidan uppifrån och ner för mobilen. Allt ska ligga i en kolumn (block).
5.  **Layout (Desktop):** Nu lägger du till `@media (min-width: ...)` för att skapa kolumner med Grid där det behövs.
6.  **Detaljer:** Sist lägger du till hover-effekter, skuggor och animationer.