<?php

function json_out($array) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($array);
    exit;
};