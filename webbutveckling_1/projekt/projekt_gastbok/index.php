<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästbok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>

<div class="text-bg-light">
    <div class="container py-4">
        <h1 class="display-1">Detta är min gästbok</h1>
        <p class="lead mb-0">Berätta att du varit här!</p>
    </div>
</div>

<div class="container py-4">
    <form class="mb-3">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-3">
                <label for="first_name" class="form-label">Förnamn</label>
                <input type="text" class="form-control" id="first_name" placeholder="Förnamn" autofocus>
            </div>
            <div class="col mb-3">
                <label for="last_name" class="form-label">Efternamn</label>
                <input type="text" class="form-control" id="last_name" placeholder="Efternamn">
            </div>
            <div class="col mb-3">
                <label for="email" class="form-label">E-post</label>
                <input type="email" class="form-control" id="email" placeholder="E-post">
            </div>
            <div class="col mb-3">
                <label for="homepage" class="form-label">Hemsida</label>
                <input type="text" class="form-control" id="homepage" placeholder="Hemsida">
            </div>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Rubrik</label>
            <input type="text" class="form-control" id="title" placeholder="Rubrik">
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

    <nav aria-label="pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link">Nyare</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Äldre</a></li>
        </ul>
    </nav>

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

    <nav aria-label="pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link">Nyare</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Äldre</a></li>
        </ul>
    </nav>
</div>

<div class="text-bg-light">
    <div class="container py-4">
        <p class="text-center mb-0">Tack för ditt besök!</p>
    </div>
</div>

</body>
</html>