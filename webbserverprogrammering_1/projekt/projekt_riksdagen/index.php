<?php

include('riksdagen_api.php');

//

if (isset($_GET['do']) && $_GET['do'] == 'update')
{   
    // 1. Radera allt innehåll i tabellen rik_members. Använd TRUNCATE

    // 2. Hämta den senaste datan via get_riksdagen_members(). Den levereras i form av en array.
    
    // 3. Stoppa in den senaste datan i tabellen rik_members. Använd INSERT
}

// Hämta data om ledamöterna från tabellen rik_members. Använd SELECT

// Visa informationen på sidan som HTML

header('Content-Type: application/json; charset=utf-8');
echo json_encode(get_riksdagen_members());
