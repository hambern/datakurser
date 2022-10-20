<?php

include('riksdagen_api.php');

if (isset($_GET['c']) && $_GET['c'] == 'update')
{
    // Radera allt innehåll i tabellen rik_members
    // Hämta den senaste datan via get_members()
    // Stoppa in den senaste datan i rik_members
}

// Hämta data om ledamöterna från tabellen rik_members

?>
<!doctype html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riksdagens ledamöter</title>
</head>
<body>
<pre>
    <?= print_r(get_riksdagen_members(), true) // Visa ledamöterna på sidan ?>
</pre>
</body>
</html>
