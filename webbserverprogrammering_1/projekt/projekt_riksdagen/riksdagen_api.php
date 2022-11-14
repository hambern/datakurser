<?php

/**
 * Hämtar ut riksdagsledamöter ur riksdagens API
 *
 * @param array $query
 * @return array
 */
function get_riksdagen_members(array $query = []) {

    $params = [ // Sätter standardparametrar
        'iid'       => '',
        'fnamn'     => '',
        'enamn'     => '',
        'f_ar'      => '',
        'kn'        => '',
        'parti'     => '',
        'valkrets'  => '',
        'rdlstatus' => '',
        'org'       => '',
        'utformat'  => 'json',
        'sort'      => 'född_år',
        'sortorder' => 'desc',
        'termlista' => ''
    ];

    foreach ($query as $key => $value) { // Ersätter standardparametrar med egna parametrar om de finns
        if (isset($params[$key])) {
            $params[$key] = $value;
        }
    }

    $url = 'https://data.riksdagen.se/personlista/?'.http_build_query($params); // Sätter ihop API-frågan som ska användas

    $json = file_get_contents($url); // Skickar förfrågan och hämtar svaret från API:et

    return json_decode($json, true); // Returnerar json-datan som en php-array du sedan kan mata ut via exempelvis en while- eller foreach-loop
}