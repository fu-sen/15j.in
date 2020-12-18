<?php

$path = @parse_url($_SERVER['REQUEST_URI'])['path'];

$kidspod = "kidspod.club/mj{$path}";
echo file_get_contents("http://{$kidspod}");
