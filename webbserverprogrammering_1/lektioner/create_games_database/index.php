<?php

include('database.php');
include('rawg_api.php');
include('functions.php');

$conn = db_connect();

if (isset($_GET['do']) && $_GET['do'] == 'update') {

    $games = get_rawg_games();

    foreach ($games['results'] as $game) {

        $sql = "INSERT INTO games (name, released, rating, image)
            VALUES ('".$game['name']."', '".$game['released']."', '".$game['rating']."', '".$game['background_image']."')
            ON DUPLICATE KEY UPDATE
            name='".$game['name']."', released='".$game['released']."', rating='".$game['rating']."', image='".$game['background_image']."'";
        $result = mysqli_query($conn, $sql);
        $game_id = mysqli_insert_id($conn);

        foreach ($game['platforms'] as $platform) {

            $sql = "INSERT INTO platforms (name)
                VALUES ('".$platform['platform']['name']."')
                ON DUPLICATE KEY UPDATE
                name='".$platform['platform']['name']."'";
            $result = mysqli_query($conn, $sql);
            $platform_id = mysqli_insert_id($conn);

            $sql = "INSERT INTO game_platform (game_id, platform_id)
                VALUES (".$game_id.", ".$platform_id.")
                ON DUPLICATE KEY UPDATE
                game_id=".$game_id.", platform_id=".$platform_id;
            $result = mysqli_query($conn, $sql);
        }
    }

    foreach ($game['short_screenshots'] as $shot) {

        $sql = "INSERT INTO screenshots (game_id, image)
            VALUES (".$game_id.", '".$shot['image']."')
            ON DUPLICATE KEY UPDATE
            game_id=".$game_id.", image='".$shot['image']."'";
        $result = mysqli_query($conn, $sql);
    }
}

// json_out(get_rawg_games());