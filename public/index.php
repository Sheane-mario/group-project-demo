<?php

function show($stuff)
{
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}
function splitURL()
{
    $URL = $_GET['url'] ?? 'home';
    $URL = explode('/', $URL);
    return $URL;
}
show(splitURL());
