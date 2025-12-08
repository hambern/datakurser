# Projekt: Arkitekten "The Network"

## Scenario
Du är nätverksarkitekt. Ett nystartat företag (eller kanske arrangörerna för ett stort LAN-party i sporthallen) har anlitat dig. De behöver ett nätverk som är snabbt, säkert och stabilt. "Vi vill bara att det ska funka!", skriker chefen.

## Uppdraget
Designa nätverket och rita en karta över det.

### Välj kund
1.  **Start-up bolaget:** Ett kontor med 20 anställda. De behöver Wi-Fi, skrivare, och en säker server för sina hemliga filer.
2.  **LAN-partyt:** 100 gamers i en gympasal. Alla behöver nätverkskabel (Wi-Fi duger inte för gaming!). Det måste gå SNABBT.
3.  **Det Smarta Hemmet:** En villa med 5 personer, smart-TV, smarta lampor, spelkonsoler och övervakningskameror.

### Skapa Nätverkskartan
Rita en skiss (på papper eller digitalt, t.ex. med `draw.io`).
*   Var sitter **Routern**? (Ingången från internet).
*   Behövs **Switchar**? (För att få fler portar).
*   Var sätter du **Accesspunkter** (Wi-Fi) för bästa täckning?
*   Var finns brandväggen?

### Teknisk Rapport
Besvara frågorna:
*   **IP-adresser:** Hur delas de ut? (DHCP).
*   **Hastighet:** Vilken typ av kablar väljer du? (Cat5e, Cat6?).
*   **Säkerhet:** Hur skyddar du nätverket från intrång? (WPA2/3 lösenord, gästnätverk?).
*   **Backup:** Vart tar datan vägen om huset brinner ner? (Molnlagring/NAS).

## Bedömning
| Betyg | Krav |
| :--- | :--- |
| **E** | Nätverkskartan är tydlig och logisk. De viktigaste komponenterna (Router, Dator) finns med. |
| **C** | Du motiverar dina val av hårdvara (t.ex. "Jag valde Cat6 för att klara 10Gbit"). Du diskuterar säkerhet (brandväggar/lösenord). |
| **A** | Din design är professionell/skalbar. Du diskuterar subnät, IP-konflikter och redundans ("Vad händer om en kabel går av?"). |
