# Projekt - Gästbok

## CSS-ramverk

Ute i verkligheten blir det allt mer sällsynt att man skriver all css själv idag. Det är idag vanligare att man använder sig av något css-ramverk. De vanligaste idag är nog:

- **Bootstrap** - https://getbootstrap.com/
- **Materialize CSS** - https://materializecss.com/
- **Foundation** - https://get.foundation/
- **Semantic UI** - https://semantic-ui.com/
- **Bulma** - https://bulma.io/

Av dessa är Bootstrap det överlägset största.

## Lägg till Bootstrap

I denna uppgift ska du få testa att använda dig av Bootstrap. För att kunna göra detta måste du i head-sektionen lägga till följande kod. Det är helt enkelt länkar till Bootstraps css respektive javascript-filer:

~~~html
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled Bootstrap icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.bundle.min.js"></script>
~~~

## Läs på

Nästa steg är att försöka förstå hur du använder dig av Bootstraps funktioner. Detta kan du göra entingen via Bootstraps egen dokumentation eller via W3Schools sidor om Bootstrap:

- <https://getbootstrap.com/docs/5.2/getting-started/introduction/>
- <https://www.w3schools.com/bootstrap5/index.php>
- Detta är en väldigt informativ och bra video om Bootstrap 5 på YouTube: <https://www.youtube.com/watch?v=Jyvffr3aCp0>

## Instruktioner


1. Utgå ifrån filen `index.php`. Läs kommentarerna i koden. Där får du mycket hjälpsamma tips på hur du ska gå till väga.
2. Ditt slutresultat ska se ut som facitbilderna:
    - [Facit för iPhone 12 Pro](facit_iphone_12_pro.png)
    - [Facit för iPad mini (stående)](facit_ipad_mini_vertical.png)
    - [Facit för iPad mini (liggande)](facit_ipad_mini_horizontal.png)
3. Du får inte skriva någon *egen* css-kod. Du får endast använda dig av Bootstraps klasser.
