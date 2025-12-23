<?php

function isUrl ($value) {
    if(parse_url($_SERVER['REQUEST_URI'])['path'] == $value){
        return true;
    }
    return false;
}

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}