<?php

include('riksdagen_api.php');

if (isset($_GET['do']) && $_GET['do'] == 'update')
{
    // Radera allt innehåll i tabellen rik_members
    // Hämta den senaste datan via get_members()
    // Stoppa in den senaste datan i rik_members
}

// Hämta data om ledamöterna från tabellen rik_members

// Visa informationen på sidan
header('Content-Type: application/json; charset=utf-8');
echo json_encode(get_riksdagen_members());
