<?php
$file = strtolower ( $data );
$getfile = __DIR__ . "/../bas.15j.run/{$file}";

if ( file_exists($getfile) && is_file($getfile) )
{
    echo "NEW\n";
    echo "VIDEO 1\n";
    echo "?\"PANCAKE VIDEO 00\n";
    echo "?\"PANCAKE RESET\n";
    require $getfile;
    echo "\n";
    echo "'OK\n";
}
else
{
    require "404";
}
