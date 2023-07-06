<?php 


require __DIR__ . "/constants.php";

$envFile = parse_ini_file(ROOT . "/../env.conf");

var_dump($envFile);