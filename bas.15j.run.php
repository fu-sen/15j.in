<?php

$path = @parse_url($_SERVER['REQUEST_URI'])['path'];
$file = strtolower ( $path );
$getfile = __DIR__ . "/../bas.15j.run{$file}";

if ( file_exists($getfile) && is_file($getfile) )
{
    echo "\x13\x0c\n";
    echo "NEW\n";
    require $getfile;
    echo "\n";
    echo "'OK\n";
}
else
{
    require "404";
}
