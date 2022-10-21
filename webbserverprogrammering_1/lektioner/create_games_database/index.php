<?php

include('database.php');
include('rawg_api.php');
include('functions.php');

json_out(get_rawg_games());