<?php

use Cocur\Slugify\Slugify;

require_once 'vendor/autoload.php';

if (file_exists('.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

$slugify = new Slugify();
echo $slugify->slugify('Hello World!');