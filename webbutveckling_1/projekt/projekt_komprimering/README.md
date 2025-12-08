# Projektuppgift: Medieoptimering (Bilder & Video)

## Syfte
Webbprestanda är avgörande för användarupplevelsen. Stora bilder och tunga videor gör sidor långsamma, vilket driver bort besökare. I denna uppgift ska du lära dig optimera media för webben. Du ska skapa två versioner av samma sida: en "Långsam" (okomprimerad) och en "Snabb" (optimerad), och jämföra resultatet.

## Mål
Efter avslutat projekt ska du kunna:
- **Bildformat:** Förstå skillnaden mellan JPEG, PNG och WebP.
- **Komprimering:** Använda verktyg (GIMP, VLC) för att minska filstorlek utan att tappa för mycket kvalitet.
- **Video:** Bädda in video med HTML5 (`<video>`) och använda formaten MP4 och WebM.
- **Analys:** Mäta och reflektera över laddningstider.

---

## Arbetsgång

### 1. Hämta material
Gå till [Pexels](https://www.pexels.com/) och ladda ner:
-   **3 högupplösta bilder** (Välj "Original Size", gärna 5MB+ styck).
-   **1 högupplöst video** (1080p eller 4K).

### 2. Skapa "Den Långsamma Sidan"
Bygg en enkel HTML-sida (`slow.html`) där du lägger in orginalfilerna direkt.
-   Använd `<img>` för bilderna.
-   Använd `<video>` för videon.
-   *Notera hur lång tid det tar att ladda sidan.*

### 3. Optimera medierna
Nu ska du skapa komprimerade kopior av filerna. Spara dem i en separat mapp (t.ex. `/optimized`).

**Bilder (Använd GIMP):**
1.  Öppna bilden.
2.  Skala om den (`Image -> Scale Image`) till en rimlig webbstorlek (t.ex. max 1920px bredd, inte 6000px!).
3.  Exportera som **WebP** eller **JPG** (med kvalitet ca 80%).
4.  Jämför filstorleken mot originalet (Målet: <200KB per bild).

**Video (Använd VLC eller Handbrake):**
1.  Öppna VLC -> `Media` -> `Convert / Save`.
2.  Lägg till din video.
3.  Välj profil: **Video - H.264 + MP3 (MP4)** eller **Video - VP8 + Vorbis (WebM)**.
4.  Klicka på skiftnyckeln för att justera bitrate (lägre bitrate = mindre fil).
5.  Spara filen.

### 4. Skapa "Den Snabba Sidan"
Kopiera din HTML-sida till `fast.html`.
-   Byt ut länkarna så de pekar på dina *optimerade* filer.
-   Använd `width` och `height` attribut på bilderna för att undvika "layout shift".

Ställ in videon så här för bästa kompatibilitet:
```html
<video controls width="100%">
    <source src="video-optimized.mp4" type="video/mp4">
    <source src="video-optimized.webm" type="video/webm">
    Din webbläsare stöder inte videon.
</video>
```

### 5. Analys
Jämför sidorna.
-   Hur mycket plats sparade du totalt? (MB)
-   Ser man någon skillnad i kvalitet?
-   Använd webbläsarens utvecklarverktyg (Network Tab) för att se laddningstiderna.

---

## Inlämning & Bedömning
Lämna in mappen med båda HTML-filerna och alla medier. Skriv en kort `README.md` (eller reflektion) med dina mätresultat.

| Nivå | Kriterier |
| :--- | :--- |
| **E** | Du har skapat två sidor. Bilderna och videon på "Snabb" sidan är mindre än originalen. Media visas korrekt. |
| **C** | Optimeringen är "lagom" (bra balans kvalitet/storlek). Du har skalat om bilderna till rätt upplösning, inte bara sänkt kvaliteten. HTML-koden är korrekt. |
| **A** | Du använder moderna format (WebP). Du har analyserat resultatet djupt (nämner bitrate, upplösning). Sidorna är responsiva och har snygg design. |

## Tips
-   [Squoosh.app](https://squoosh.app/) - Grymt webbverktyg från Google för att komprimera bilder visuellt.
-   **Handbrake** - Ofta bättre/enklare än VLC för videokomprimering om du får installera det.