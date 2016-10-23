<?php
header('Content-type: image/jpeg');
require_once 'vendor/autoload.php';

use Imanee\Imanee;


$imanee = new Imanee('images/collage01.jpg');
echo $imanee->thumbnail(700, 700, true)
    ->output();
$app->run();

