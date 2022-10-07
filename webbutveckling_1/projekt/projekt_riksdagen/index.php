<?php

$query = ['iid' => '',
    'fnamn'     => '',
    'enamn'     => '',
    'f_ar'      => '',
    'kn'        => 'man',
    'parti'     => '',
    'valkrets'  => 'Norrbottens län',
    'rdlstatus' => '',
    'org'       => '',
    'utformat'  => 'json',
    'sort'      => 'född_år',
    'sortorder' => 'desc',
    'termlista' => ''
]; // Bygger upp frågan till API:et

$url = 'https://data.riksdagen.se/personlista/?'.http_build_query($query); // Sätter ihop API-frågan som ska användas

$json = file_get_contents($url); // Skickar förfrågan och hämtar svaret från API:et

$data = json_decode($json, true); // Omvandlar json-datan till en php-array du sedan kan mata ut via exempelvis en while-loop

?>
<!doctype html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Våra demokratiska företrädare</title>
</head>
<body>

<pre>
    <?php print_r($data) // Visar datan i php-arrayen ?>
</pre>

</body>
</html>
