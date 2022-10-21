<?php

include('riksdagen_api.php');

if (isset($_GET['c']) && $_GET['c'] == 'update')
{
    // Radera allt innehåll i tabellen rik_members
    // Hämta den senaste datan via get_members()
    // Stoppa in den senaste datan i rik_members
}

// Hämta data om ledamöterna från tabellen rik_members

// Visa informationen på sidan
header('Content-Type: application/json; charset=utf-8');
echo json_encode(get_riksdagen_members());<?php

include('riksdagen_api.php');

if (isset($_GET['c']) && $_GET['c'] == 'update')
{
    // Radera allt innehåll i tabellen rik_members
    // Hämta den senaste datan via get_members()
    // Stoppa in den senaste datan i rik_members
}

// Hämta data om ledamöterna från tabellen rik_members

// Visa informationen på sidan
header('Content-Type: application/json; charset=utf-8');
echo json_encode(get_riksdagen_members());