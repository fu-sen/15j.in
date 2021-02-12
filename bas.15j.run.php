<?php

$path = @parse_url($_SERVER['REQUEST_URI'])['path'];

$getfile = "../bas.15j.run/{$file}";
echo "\x13\x0c\n";
echo "NEW\n";
require $getfile;
echo "\n";
echo "'OK\n";
