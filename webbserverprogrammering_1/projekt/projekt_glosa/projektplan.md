# Projektnamn

## Bakgrund
- Här beskriver du vad projektet handlar om och vad som ska byggas.
- Hämta gärna lite inspiration från Kursplanen ex. Projekt Glosa är ett projekt som sträcker sig över två kurser, Programmering 2 och Webbserverprogrammering…

## Projektupplägg
- Här kommer det nog att bli flera underrubriker. Beskriv projektets upplägg, alltså vad som måste göras.
- Tala om vilka verktyg som ska som ska användas.
- Skriv ner hur projektet ska kommuniceras med “kunden”.
- Kommunikation med handledaren samt kontinuerlig dokumentation av arbetets gång sker genom…

## Teknisk specifikation

### JAVA-delen

#### Use-cases

I mitt glosprogram ska man kunna göra följande saker:

- Skapa en användare
- Logga in en användare
- Skapa en glosa
- Besvara en glosa
- Ta bort en glosa

- Hur ska GUI se ut? Gör skisser över utseendet.
- Databasdiagram (ev behövs vissa förklaringar/förtydliganden).
- UML Klassdiagram för JAVA-programmet. (Lägger ni in i dokumentet i slutet av projektet)
- Dataflöde och arkitekturdiagram.

### API-delen

#### End-points

Lista och förklara samtliga end-points. Exempelvis:

- `/users/register`: Registrera en ny användare.
    - Skicka
        - `email`
        - `password`
        - `name`
- `/users/login`: Skickar login och password för att få en token som kan användas för alla endpoints som kräver inloggning.
    - Skicka
        - `email`
        - `password`
    - Svar
        - `token`

## Tidsplan
- Gör en tidsplan utifrån use cases och annat som måste med i planen.
- Tidsplanen skulle kunna göras i ett Gantt-schema (tex i excel).