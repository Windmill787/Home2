<?php
require_once 'vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);


$template = $twig->loadTemplate('index.html');
$title = "Title of page";
echo $template->render(array(
'title' => $title

));



?>
