# Komprimera av bilder och filmer med GIMP och VLC

### Syfte
Denna uppgift syftar till att ge dig praktisk erfarenhet av att optimera bilder och videor för webben genom att komprimera dem med gratis programvara. Du kommer att lära dig att skapa och jämföra två versioner av en webbplats: en med optimerade filer och en med ooptimerade filer. Dessutom kommer du att använda HTML5-mediaspelaren för att visa upp en komprimerad video på din webbplats. Uppgiften ger dig insikt i hur komprimering påverkar laddningstider, användarupplevelse och prestanda.

### Mål
Efter att ha slutfört denna uppgift ska du kunna:
- Hämta och använda bilder och videor från Pexels.
- Komprimera bilder och videor med GIMP och VLC.
- Förstå skillnaderna mellan vanliga filformat för bilder och videor.
- Använda HTML5-mediaspelaren för att visa en video.
- Skapa och jämföra två versioner av en webbplats: en optimerad och en ooptimerad.
- Reflektera över skillnaderna i prestanda och användarupplevelse mellan de två versionerna.

### Beskrivning

1. **Hämta bilder och filmer:**
   - Gå till [Pexels](https://www.pexels.com/) och ladda ner bilder och videor i maximalt stort format. Välj minst tre bilder och en video.

2. **Komprimering av bilder och filmer:**
   - **Bilder:** 
     - Använd [GIMP](https://www.gimp.org/) för att komprimera bilderna. Spara bilderna i olika format (JPEG, PNG, WebP) och experimentera med olika komprimeringsnivåer. Målet är en liten fil som fortfarande ger intrycket av hög kvalitet. Ladda gärna ner programmet via Software Center om du inte redan har det på datorn.
   - **Filmer:**
     - Använd [VLC](https://www.videolan.org/vlc/) för att komprimera videon. Testa olika inställningar och format (MP4, WebM) för att optimera videon för webben. Ladda gärna ner programmet via Software Center om du inte redan har det på datorn.

3. **Skapa två webbplatser:**
   - **Ooptimerad sida:** Skapa en enkel webbplats med HTML och CSS som visar de ooptimerade bilderna och videon i deras ursprungliga format och storlek.
   - **Optimerad sida:** Skapa en parallell webbplats med samma struktur, men använd de komprimerade versionerna av bilderna och videon.
   - **HTML5-mediaspelare:** Använd HTML5-mediaspelaren för att visa upp din video på båda versionerna av webbplatsen. Exempel på hur du kan använda mediaspelaren:

   ```html
   <video controls>
       <source src="video.mp4" type="video/mp4">
       <source src="video.webm" type="video/webm">
       Din webbläsare stöder inte HTML5-videoformatet.
   </video>
   ```

4. **Jämförelse och reflektion:**
   - Analysera laddningstider, filstorlekar och användarupplevelse för båda versionerna av webbplatsen.
   - Skriv en reflektion där du diskuterar skillnaderna mellan den optimerade och ooptimerade sidan. Reflektera över hur olika filformat och komprimeringsnivåer påverkar prestandan.

### Ramverk och tekniker
- **Pexels:** Använd Pexels för att hämta bilder och videor i hög kvalitet. <https://www.pexels.com/>
- **GIMP:** Komprimera bilder med GIMP och spara dem i olika format. <https://www.gimp.org/>
- **VLC:** Komprimera videor med VLC och optimera dem för webben. <https://www.videolan.org/>
- **HTML5:** Använd HTML5-mediaspelaren för att visa videon på din webbplats. <https://www.w3schools.com/html/html_media.asp>
- **HTML och CSS:** Skapa två versioner av en enkel webbplats, en optimerad och en ooptimerad.

### Tips och tricks
- **Val av format:** Läs på om skillnaderna mellan bildformaten JPEG, PNG, och WebP samt videoformaten MP4 och WebM för att välja rätt format för ditt projekt.
- **Komprimeringens inverkan:** Experimentera med olika komprimeringsnivåer för att se hur de påverkar bild- och videokvaliteten samt filstorleken.
- **Testverktyg:** Använd verktyg som [Google PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/) för att mäta laddningstider och prestanda för dina sidor.
- **Video som bakgrund:** Något som kan vara förvånansvärt impaktfullt är en video som bakgrund på din hemsida. Läs mer om hur du åstadkommer det här: <https://www.w3schools.com/howto/howto_css_fullscreen_video.asp>

### Resurser att studera
- [GIMP User Manual](https://docs.gimp.org/2.10/en/) för bildredigering och komprimering.
- [VLC Documentation](https://www.winxdvd.com/resize-video/how-to-compress-video-with-vlc.htm) för videokomprimering.
- [Pexels](https://www.pexels.com/) för att hämta bilder och videor i hög kvalitet.
- [Normalize.css](https://necolas.github.io/normalize.css/)

---

## Bedömning

| **Kvalitetsaspekt**          | **Betyg E**                                         | **Betyg C**                                         | **Betyg A**                                         |
|------------------------------|----------------------------------------------------|----------------------------------------------------|----------------------------------------------------|
| **Komprimering och optimering** | Bilder och videor är komprimerade och visas på två versioner av en webbplats. | Komprimering och optimering är väl genomförd, med tydlig skillnad mellan sidorna. | Komprimering och optimering är utförd med hög kvalitet, och skillnaderna mellan sidorna är noggrant analyserade. |
| **Webbplatsens utformning**   | Webbplatserna är enkla men fungerar för att visa bilder och videor. | Webbplatserna är väl utformade, responsiva och inkluderar detaljerad information om komprimering. | Webbplatserna är estetiskt tilltalande, fullt responsiva och inkluderar en djupgående analys av optimeringsprocessen. |
| **Reflektion och analys**     | En enkel reflektion över skillnaderna mellan sidorna har genomförts. | En genomtänkt reflektion över hur komprimering påverkar prestanda har genomförts. | En djupgående analys av optimeringsprocessen, inklusive tekniska detaljer och förbättringsförslag, har genomförts. |