# Designprinciper alla bör känna till

Detta är en översättning och en anpassning av följande artikel: <https://www.makeuseof.com/tag/basic-programming-principles/>.

Det är lätt att skriva kod. Men det är svårt att skriva bra kod. Dålig kod finns i många former. Stökig kod, massiva if-else-kedjor, program som går sönder efter en justering och obegripliga variabler.

Om du vill vara en programmerare, nöj dig inte med genvägar. Sikta på att skriva kod som är lätt för dig och för alla andra utvecklare i ditt team att underhålla. Men hur skriver man en bra kod? Du skriver bra kod genom att vara disciplinerad med dina programmeringsprinciper. nu ska vi se några programmeringsprinciper som kan hjälpa dig att bli en bra utvecklare.

## 1. KISS-principen (Keep It Simple, Stupid!)

Det låter lite hårt, men det är en kodningsprincip att leva efter. Vad betyder det då?

Det betyder att du ska skriva kod så enkelt som möjligt. Fastna inte i att försöka vara alltför smart eller visa upp dig med ett onödigt avancerad kod. Om du kan skriva en funktion på en rad, skriv det på en rad.

Här är en enkel funktion:

~~~php
function addNumbers($num1,$num2){
    return $num1 + $num2;
}
~~~

Ganska enkelt. Det är lätt att läsa och du vet exakt vad som händer.

Använd tydliga variabelnamn. Dra nytta av kodningsbibliotek för att använda befintliga verktyg. Gör det enkelt att komma tillbaka efter sex månader och komma in i arbetet direkt. Att hålla det enkelt kommer att spara dig mycket huvudvärk.

## 2. DRY-principen (Don't Repeat Yourself!)

DRY (Don't Repeat Yourself!) betyder att du inte ska skriva återkommande kod, utan använda abstraktion för att abstrahera vanliga saker till ett enda ställe.

Om du har samma kod på fler än två ställen, överväg att göra det till en separat metod, eller om du använder ett hårdkodat värde mer än en gång, gör det till en konstant. Fördelen med denna objektorienterade designprincip är att koden blir lättare att underhålla.

Följande kod:

~~~php
function addNumberSequence($number) {
    $number = $number + 1;
    $number = $number + 2;
    $number = $number + 3;
    $number = $number + 4;
    $number = $number + 5;
    return $number;
}
~~~

Är exempelvis betydligt sämre än följande: 

~~~php
function addNumberSequence($number, $add = 5) {
    foreach (range(1, $add) as $addition) {
        $number = $number + $addition
    }
    return number;
}
~~~

Men det är viktigt att inte missbruka det. Se upp för att koppla ihop sådant som inte hör ihop bara för att de har en liknande kod.

DRY-kod är lätt att underhålla och det är lättare att felsöka en loop som körs 50 gånger än 50 separata kodblock som gör samma sak.

## 3. Open/Closed-principen

Försök eftersträva att skriva kod som är öppen för utbyggnad, men stängd för förändringar. Detta är extra viktigt när du skriver kod som andra ska använda och arbeta med. Där vill man inte att grundläggande funktioner ska förändras eftersom deras egna program kan sluta fungera.

Släpp istället kod som är enkel och tydlig i sin grundläggande funktionalitet men som är öppen för utbyggnad av andra. Detta gör koden både stabilare och enklare att underhålla.

## 4. Sammanställning över arv

När man jobbar objektorienterat finns det lägen där det är okej att objekt ärver beteenden från andra - om objekten är utbytbara. Men generellt är det klokare att använda självständiga objekt som istället använder varandras funktionalitet. Objektet "bil" ska inte ärva objektet "motor"s funktioner utan sammanställa och använda motorn istället. Bilen _är_ inte en motor, den _har_ en motor.

Rent konkret kan detta innebära att man i objektet konstruktor sammanställer de övriga objekt som behövs för att sedan använda dessa. På det sättet slipper man komplicerade arvshierarkier och koden blir också mer testbar då man enkelt kan byta ut enskilda komponenter.

## 5. 
