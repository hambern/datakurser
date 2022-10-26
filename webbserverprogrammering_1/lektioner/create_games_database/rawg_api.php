<?php

function get_rawg_games($query = null) {

    if (empty($query)) // Om ingen fråga skickas används denna standard-fråga
    {
        $query = [
            'ordering' => '-rating',
            'page_size' => 100
        ];
    }
    $query['key'] = '97647ac6e6bb4dee9923a11e0706ee91';

    $url = 'https://api.rawg.io/api/games?'.http_build_query($query); // Sätter ihop API-frågan som ska användas

    $json = file_get_contents($url); // Skickar förfrågan och hämtar svaret från API:et

    return json_decode($json, true); // Returnerar json-datan som en php-array du sedan kan mata ut via exempelvis en while- eller foreach-loop
}
