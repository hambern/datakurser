# Slutprojekt: Utveckling av webbplats

Detta projekt knyter ihop kursens praktiska och teoretiska delar. Du ska planera, bygga, testa och utvärdera en webbplats. Syftet är att visa din helhetsförståelse för modern webbutveckling (klientbaserad), från första skiss till en säker och tillgänglig slutprodukt.

## Bra tips på vägen

För att lyckas med ditt slutprojekt, använd [Handboken](../../teori/README.md) och dess kapitel enligt följande plan:

### 1. Strukturera din kod

Använd handbokens avsnitt om **Semantik**. En sida som bara består av `<div>` kommer inte att nå de högre betygsstegen.

- **Check:** Har du använt `<header>`, `<nav>`, `<main>`, `<article>` och `<footer>`?
- **Box-modellen:** Kom ihåg handbokens tips – använd `padding` för luft inuti element (t.ex. knappar) och `margin` för avstånd mellan element.

### 2. Responsivitet och layout

Handboken nämner **Flexbox** och **Grid**. För en modern webbplats är detta standard.

- **Mobil-först:** Börja koda för den lilla skärmen. Använd sedan `media queries` för att styra hur Grid-layouten expanderar på en dator.

### 3. Media och prestanda

Detta är ett direkt krav för betyg C och A.

- **Optimering:** Följ handbokens råd om bildkomprimering. Om du använder stora bilder utan att ha skalat ner dem kommer din "Lighthouse-score" att sjunka, vilket påverkar betyget på testningsmomentet.

### 4. Säkerhet och juridik

I rapporten ska du reflektera över **GDPR** och **Upphovsrätt**.

- **Etik:** Om du har ett formulär (Fas 2), förklara i rapporten hur du hanterar datan enligt GDPR.
- **Bilder:** Ange källor för dina bilder eller intyga att de är **Creative Commons**-licensierade.

---

Arbetet är indelat i fyra faser.

## Fas 1: Planering

Innan kodningen påbörjas ska projektet struktureras.

- **Målgrupp och syfte:** Vem bygger du för och vad är målet med webbplatsen?
- **Struktur och design:** Skapa en enkel skiss eller plan över sidans struktur och layout.
- **Tidsplan:** Sätt upp realistiska delmål för arbetet.

> **Planeringen ska stämmas av och godkännas innan du går vidare till fas 2.**
> Du får inte börja koda förrän din lärare gett tummen upp på din **projektidé och struktur**.

## Fas 2: Produktion och kod

Webbplatsen ska byggas med korrekta tekniker och följa god praxis.

- **Omfång:** Minst tre sammanlänkade undersidor kodade i semantisk HTML.
- **Design och layout:** Sidan ska vara responsiv och fungera lika bra på mobila enheter som på stationära datorer. Du ska använda CSS Grid eller Flexbox. Om du använder ett CSS-ramverk måste du även visa att du kan skriva och anpassa egen CSS.
- **Interaktivitet:** Minst ett fungerande formulär ska finnas med. Du ska även använda grundläggande JavaScript (DOM-skript) för att skapa dynamik på sidan. Koden ska struktureras i separata filer.
  - _Notera:_ Denna kurs fokuserar på klientbaserad teknik. PHP kan användas som "bonus" eller orientering, men det är **JavaScript** som krävs för de högre betygen vad gäller interaktivitet.
- **Media:** Bilder ska vara anpassade i storlek, optimerade för snabb laddningstid och ha korrekta alternativtexter för att uppfylla tillgänglighetskrav.

## Fas 3: Testning

En professionell webbplats måste kvalitetssäkras inför publicering.

- **Validering:** HTML och CSS ska valideras via W3C Validator för att säkerställa att inga syntaxfel finns.
- **Tillgänglighet och prestanda:** Använd automatiserade testverktyg, till exempel Google Lighthouse, för att granska sidans laddningstid och tillgänglighet.
- **Funktionstest:** Sidan ska testas manuellt i olika webbläsare och på olika skärmstorlekar.

## Fas 4: Dokumentation och rapport

Slutrapporten är central för bedömningen och krävs för att nå de högre betygsstegen. Den ska innehålla:

- **Processutvärdering:** Hur fungerade planeringen? Vad stötte du på för tekniska problem och hur löste du dem?
- **Testresultat:** Redovisa resultaten från dina manuella och automatiserade tester. Vilka åtgärder tvingades du göra för att förbättra prestanda och tillgänglighet?
- **Säkerhet:** Vilka säkerhetsrisker finns, exempelvis i samband med inmatning i formulär? Hur kan tredjepartskod påverka säkerheten? Vilka säkerhetskrav bör ställas vid val av webbhotell?
- **Juridik och etik:** Hur förhåller sig din webbplats till relevanta lagar, exempelvis GDPR? Vilka etiska överväganden krävs vid insamling av användardata?

## Slutlig struktur för din inlämning

När du lämnar in ditt projekt, se till att din mappstruktur speglar handbokens logik:

```text
/projekt-rot
  index.html
  om-oss.html
  kontakt.html
  /css
    style.css (Här finns din Grid/Flexbox och Media Queries)
  /js
    script.js (Här finns ditt DOM-skript för interaktivitet)
  /img
    logo.webp (Optimerade bilder enligt kapitel 4)
  /dokumentation
    projektplan.pdf
    slutrapport.pdf (Med testresultat från Lighthouse/W3C)
```

## Bedömningsmatrix

| Bedömningsområde                                | Nivå E                                                                                                                                                                                              | Nivå C                                                                                                                                                                                      | Nivå A                                                                                                                                                                                                                                                                       |
| :---------------------------------------------- | :-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | :------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | :--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **Projektmetodik och planering**                | Upprättar en enkel projektplan (struktur/skiss). Utvecklar webbplatsen i samråd med handledare.                                                                                                     | Upprättar en genomarbetad projektplan. Utvecklar webbplatsen efter samråd med handledare.                                                                                                   | Upprättar en genomarbetad projektplan och reviderar den vid behov. Utvecklar webbplatsen efter samråd med handledare.                                                                                                                                                        |
| **Kodkvalitet och teknisk tillämpning**         | Koden följer standarder med tillfredsställande resultat. Omfattar någon av de grundläggande teknikerna för HTML och CSS. Bearbetar media för webben.                                                | Koden följer standarder med tillfredsställande resultat. Omfattar några grundläggande tekniker. Infogar enkla skript. Bearbetar media med viss säkerhet via flera moment.                   | Koden följer standarder med gott resultat. Omfattar flera tekniker för HTML/CSS. Infogar diskreta domskript. Bearbetar media med säkerhet via flera moment.                                                                                                                  |
| **Testning, prestanda och tillgänglighet**      | Genomför begränsade tester. Testar i någon webbläsare och på någon plattform. Gör begränsade åtgärder för snabb medieladdning. Följer grundläggande tillgänglighet med tillfredsställande resultat. | Genomför automatiserade tester. Testar i några webbläsare och plattformar (dator/mobil). Vidtar åtgärder för snabb överföring. Kontrollerar tillgänglighet med några automatiserade tester. | Genomför omfattande automatiserade och manuella tester. Testar i flera webbläsare och plattformar. Optimerar för att reducera antal överföringar. Kontrollerar tillgänglighet via automatiserade tester och simuleringar. Följer tillgänglighetsprinciper med gott resultat. |
| **Säkerhet, juridik och etik**                  | Redogör översiktligt för relevanta lagar och säkerhetslösningar, samt följer dem. För enkla resonemang om webbrelaterad etik och integritet.                                                        | Redogör utförligt för lagar och säkerhet. För välgrundade resonemang om etik/integritet. Beskriver hur tredjepartskod kan innebära säkerhetsproblem.                                        | Redogör utförligt och nyanserat för lagar och säkerhet. För välgrundade och nyanserade resonemang. Beskriver problem med tredjepartskod samt grundläggande säkerhetskriterier vid val av webbhotell.                                                                         |
| **Dokumentation, utvärdering och webbens roll** | Gör en enkel dokumentation. Utvärderar arbetet med enkla omdömen. Använder terminologi med viss säkerhet.                                                                                           | Gör en noggrann dokumentation. Utvärderar resultatet med nyanserade omdömen. Använder terminologi med viss säkerhet.                                                                        | Gör en noggrann och utförlig dokumentation kopplad till generella principer och testresultat. Utvärderar med nyanserade omdömen och ger förslag på förbättringar. Använder terminologi med säkerhet.                                                                         |

---

## Bilaga: Snabbguide för Lighthouse

(Kolla kapitel 4 i Handboken för mer detaljer om _varför_ detta är viktigt.)

För att nå betyg C eller A måste du optimera din sida. Så här gör du:

1.  Öppna din sida i Google Chrome (eller använd Firefox motsvarighet).
2.  Högerklicka någonstans på sidan och välj **Inspektera** (eller tryck `F12`).
3.  Leta upp fliken som heter **Lighthouse** (den kan vara dold under `>>` om ditt fönster är smalt).
4.  Se till att kategorierna _Performance_, _Accessibility_, _Best Practices_ och _SEO_ är ibockade.
5.  Klicka på **Analyze page load**.
6.  **Läs resultatet!**
    - Om du får rött på _Performance_: Kontrollera dina bildstorlekar. Har du skalat ner dem? Har du sparat dem som WebP?
    - Om du får rött på _Accessibility_: Har du glömt `alt`-texter? Är kontrasten mellan text och bakgrund tillräcklig?
7.  **Ta en skärmdump** på ditt resultat och klistra in i din slutrapport under rubriken "Testresultat".
