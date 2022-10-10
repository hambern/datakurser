<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästbok</title>
    <!--
    Här ska du lägga in länkar till Bootstraps css- och js-filer
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!--
Här ska du sätta bakgrundsfärgen till `light`
Du ska också ha en `container` med padding 4 uppåt och nedåt
Den största rubriken ska ha den största display-klassen
Texten under huvudrubriken ska ha klassen `lead` och det ska inte finnas någon nedre marginal på elementet
-->
<header class="text-bg-light">
    <div class="container py-4">
        <h1 class="display-1">Detta är min gästbok</h1>
        <p class="lead mb-0">Berätta att du varit här!</p>
    </div>
</header>

<!--
Även denna container ska ha padding 4 uppåt och nedåt
Formuläret ska ha marginal 3 nedåt
De fyra översta inputfälten ska befinna sig i rad-kolumner. På riktigt smala skärmar (ex telefon) ska det bara vara en kolumn men vid bredare skärmar ska det vara två kolumner. Se facit-bilderna.
Input-fälten bör ha en marginal på 3 nedåt
Tänk på att länka input-fält med deras label-element så att man kan klicka på labeln för att fokusera på fältet
-->
<section class="container py-4">
    <form method="get" class="mb-3">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-3">
                <label for="first_name" class="form-label">Förnamn</label>
                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Förnamn" autofocus>
            </div>
            <div class="col mb-3">
                <label for="last_name" class="form-label">Efternamn</label>
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Efternamn">
            </div>
            <div class="col mb-3">
                <label for="email" class="form-label">E-post</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="E-post">
            </div>
            <div class="col mb-3">
                <label for="homepage" class="form-label">Hemsida</label>
                <input type="text" name="homepage" class="form-control" id="homepage" placeholder="Hemsida">
            </div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Rubrik</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Rubrik">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Meddelande</label>
            <textarea class="form-control" rows="6" name="message" id="message" placeholder="Meddelande"></textarea>
        </div>
        <div class="">
            <input type="submit" class="btn btn-primary" id="submit" value="Skriv i gästboken">
            <input type="reset" class="btn btn-link" id="reset" value="Återställ">
        </div>
    </form>

    <!--
    Pagineringen ska vara centretad på sidan
    "Nyare" ska vara `disabled` och 1:an ska vara aktiv
    Får du tid över får du gärna försöka få pagineringen att fungera
    -->
    <nav aria-label="pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link">Nyare</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item" aria-current="page"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Äldre</a></li>
        </ul>
    </nav>

    <!--
    Inläggen ska presenteras i kort som i sin tur ligger i rad-kolumner
    På smala skärmar ska de visas i en kolumn, på lite större på två. På riktigt stora skärmar ska de visas i fyra kolumner
    Innan tiden ska du använda en ikon från Bootstrap icons. Den heter `clock` och bör gå att hitta via deras hemsida
    Namnet ska vara länkat till besökarens e-post-address medan länken ska vara länkad till besökarens hemsida
    -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
        <?php foreach(range(1,6) as $i): ?>
        <div class="col mb-3">
            <div class="card">
                <div class="card-header">In eget auctor risus</div>
                <div class="card-body">
                    <p class="card-text">Suspendisse fermentum interdum nulla. Duis eu ornare metus. Maecenas euismod nunc tempus leo sollicitudin fringilla. Sed erat ipsum, varius sed enim vel, convallis imperdiet dui.</p>
                    <p class="card-text text-muted"><i class="bi bi-clock"></i> 2022-02-02 20:20</p>
                    <a href="mailto:claudio@cicero.se" class="card-link">Claudio Cicero</a>
                    <a href="https://cicero.se" class="card-link">Länk</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!--
    Pagineringen ska vara centretad på sidan
    "Nyare" ska vara `disabled` och 1:an ska vara aktiv
    Får du tid över får du gärna försöka få pagineringen att fungera
    -->
    <nav aria-label="pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link">Nyare</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item" aria-current="page"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Äldre</a></li>
        </ul>
    </nav>
</section>

<!--
Sidfoten ska ha samma bakgrundsfärg som det översta fältet
Texten ska vara centrerad på sidan
-->
<footer class="text-bg-light">
    <div class="container py-4">
        <p class="text-center mb-0">Tack för ditt besök!</p>
    </div>
</footer>

</body>
</html>