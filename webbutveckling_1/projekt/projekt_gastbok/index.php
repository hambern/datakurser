<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästbok</title>
    <!--
    Här ska du lägga in länkar till Bootstraps css- och js-filer
    -->
</head>
<body>

<header>
    <!--
    Här ska du sätta bakgrundsfärgen till `light`
    Du ska också ha en `container` med padding 4 uppåt och nedåt
    Den största rubriken ska ha den största display-klassen
    Texten under huvudrubriken ska ha klassen `lead` och det ska inte finnas någon nedre marginal på elementet
    -->
</header>

<section>
    <!--
    Även denna container ska ha padding 4 uppåt och nedåt
    Formuläret ska ha marginal 3 nedåt
    De fyra översta inputfälten ska befinna sig i rad-kolumner. På riktigt smala skärmar (ex telefon) ska det bara vara en kolumn men vid bredare skärmar ska det vara två kolumner. Se facit-bilderna.
    Input-fälten bör ha en marginal på 3 nedåt
    Tänk på att länka input-fält med deras label-element så att man kan klicka på labeln för att fokusera på fältet
    -->

    <form method="post">
        <input type="text" id="first_name" name="first_name">
        <input type="text" id="last_name" name="last_name">
        <input type="text" id="email" name="email">
        <input type="text" id="homepage" name="homepage">
        <input type="text" id="header" name="header">
        <textarea id="content" name="content" cols="" rows=""></textarea>
        <input type="submit" value="Skriv i gästboken">
        <input type="reset" value="Återställ">
    </form>

    <nav>
        <!--
        Pagineringen behöver inte fungera, men den ska se ut som i facit
        Pagineringen ska vara centretad på sidan
        "Nyare" ska vara `disabled` och 1:an ska vara aktiv
        Får du tid över får du gärna försöka få pagineringen att fungera
        -->
    </nav>

    <div>
        <!--
        Inläggen ska presenteras i kort som i sin tur ligger i rad-kolumner
        På smala skärmar ska de visas i en kolumn, på lite större på två. På riktigt stora skärmar ska de visas i fyra kolumner
        Innan tiden ska du använda en ikon från Bootstrap icons. Den heter `clock` och bör gå att hitta via deras hemsida
        Namnet ska vara länkat till besökarens e-post-address medan länken ska vara länkad till besökarens hemsida
        -->
    </div>

    <nav>
        <!--
        Pagineringen behöver inte fungera, men den ska se ut som i facit
        Pagineringen ska vara centretad på sidan
        "Nyare" ska vara `disabled` och 1:an ska vara aktiv
        Får du tid över får du gärna försöka få pagineringen att fungera
        -->
    </nav>

</section>

<footer>
    <!--
    Sidfoten ska ha samma bakgrundsfärg som det översta fältet
    Texten ska vara centrerad på sidan
    -->
</footer>

</body>
</html>